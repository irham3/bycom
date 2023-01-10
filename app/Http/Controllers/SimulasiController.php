<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Cpu;
use App\Models\Gpu;
use Ramsey\Uuid\Uuid;
use App\Models\Memory;
use App\Models\PcCase;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SimulasiController extends Controller
{
    
    public function index(Request $request)
    {
        
        $sessionData = $request->session()->all();
        // dd($sessionData);
        $componentKeys = ['cpus','gpus','motherboards','cases', 'internal_storages', 'memories', 'power_supplies'];

        // Total harga semua komponennya
        $totalPrice = 0;

        // Total watt dari komponen yang sudah dipilih
        $totalWattage = 150;

        // Script JS untuk membuka multiple url dari produk2 ecommerce, sekali proses
        $multipleUrlsScript = "";
        foreach ($sessionData as $key => $column) {
            // Dicek key nya karena ada key yang bukan component
            if (in_array($key, $componentKeys)) {
                $totalPrice += $sessionData[$key]->price;

                if($key == 'cpus' | $key == 'gpus')
                    $totalWattage += $sessionData[$key]->tdp;

                // Menambah url baru ke script
                $multipleUrlsScript .= "window.open('".$sessionData[$key]->url."','_blank');";
            }
        }
        // Mengubah angka ke format rupiah
        $formattedTotalPrice = parent::rupiah($totalPrice);

        return view('simulasi-rakit-pc.index', compact('totalPrice', 'multipleUrlsScript', 'totalWattage', 'formattedTotalPrice'));
    }

    public function addComponent($table, Request $request)
    {
         // Check nama table di db untuk disesuaikan dengan judul kategori
         $data = new stdClass();
         $data->categoryTitle = match($table) {
             'cpus' => 'CPU',
             'gpus' => 'GPU',
             'motherboards' => 'Motherboard',
             'cases' => 'Casing PC',
             'internal_storages' => 'Internal Storage',
             'memories' => 'Memory (RAM)',
             'power_supplies' => 'Power Supply (PSU)',
             default => 'Unknown',
         };
 
         // Penentuan nama folder image di storage
         $data->imageFolder = match($table) {
             'cpus' => 'cpu',
             'gpus' => 'gpu',
             'motherboards' => 'motherboard',
             'cases' => 'case',
             'internal_storages' => 'internal-storage',
             'memories' => 'memory',
             'power_supplies' => 'psu',
             default => '',
         };
 
         if ($data->categoryTitle == "Unknown") {
             return redirect()->back()->with('error', 'Kategori tidak ditemukan!');
         }

         // Filter untuk pemilihan komponen PC
         if($request->has('selectedCpuId')) {
            // Filter motherboard
            $cpuSocketId = Cpu::where('id', $request->selectedCpuId)->select('cpuSocketId')->first()->cpuSocketId;
            $pcComponents = Motherboard::where('cpuSocketId', $cpuSocketId)->select('id','name','price','image')->get();
        } else if ($request->has('selectedMoboId')) {
            // Filter memory
            $memoryMaxGB = Motherboard::where('id', $request->selectedMoboId)->select('memoryMaxGB')->first()->memoryMaxGB;
            $memorySlot = Motherboard::where('id', $request->selectedMoboId)->select('memorySlot')->first()->memorySlot;
            $pcComponents = Memory::select('id','name','price','image', 'count', DB::raw('count * capacityPerPiece as totalSize'))
                        ->where('count', '<=', $memorySlot)
                        ->having('totalSize', '<=', $memoryMaxGB)
                        ->get();
        } else if ($request->has('selectedGpuId')) {
            // Filter casing
            $gpuLength = Gpu::where('id', $request->selectedGpuId)->select('lengthMm')->first()->lengthMm;
            $pcComponents = PcCase::where('gpuMaxLengthMm', '>=',$gpuLength)->select('id','name','price','image')->get();
        }else if ($request->has('selectedCaseId')) {
            // Filter PSU
            $pcComponents = PowerSupply::where('wattage', '>=',$request->totalWattage)->select('id','name','price','image')->get();
        }
        else {
            $pcComponents = DB::table($table)->select('id','name','price','image')->get();
         }

         foreach ($pcComponents as $pcComponent) {
             $pcComponent->price = parent::rupiah($pcComponent->price);
         }
         $data->pcComponents = $pcComponents;
 
         return view('simulasi-rakit-pc.add-component', compact('data','table'));
    }

    public function addComponentItem($table, $id)
    {
        $componentData =  DB::table($table)->select('*')->where('id', $id)->get()[0];
        $componentData->formattedPrice = parent::rupiah($componentData->price);

        // Menyimpan data di session dengan key $table dan value $componentData
        session([$table => $componentData]);

        return redirect()->route('simulasi');
    }

    public function deleteSelectedItem($key)
    {
        session()->pull($key, 'default');
        return redirect()->back();
    }

    public function saveSimulasi(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'userId'    => ['required'],
            'name'      => ['required'],
            'cpuId'     => ['required'],
            'moboId'     => ['required'],
            'memoryId'     => ['required'],
            'gpuId'     => ['required'],
            'caseId'     => ['required'],
            'inStorageId'     => ['required'],
            'psuId'     => ['required'],
            'totalPrice'     => ['required'],
        ],[
            'name.required' => 'Nama rakitan harus dimasukkan!',
            'cpuId.required' => 'Anda belum memilih CPU',
            'moboId.required' => 'Anda belum memilih Motherboard',
            'memoryId.required' => 'Anda belum memilih Memory',
            'gpuId.required' => 'Anda belum memilih GPU',
            'caseId.required' => 'Anda belum memilih Casing PC',
            'inStorageId.required' => 'Anda belum memilih Internal Storage',
            'psuId.required' => 'Anda belum memilih Power Supply',
        ]);

        if($validator->fails()) {
            $errorMessage = '';
            foreach ($validator->errors()->all() as $error) {
                $errorMessage .= $error;
            }
            Alert::warning('Peringatan', $errorMessage);
            return redirect()->back();
        } else {
            // Generate kode rakitan
            $uuid = Uuid::uuid4();
            $code = substr($uuid->toString(), 0, 6);

            // Insert data rakitan ke DB
            DB::table('user_pc_builds')->insert([
                'userId' => $request->userId,
                'code' => $code,
                'name' => $request->name,
                'cpuId' => $request->cpuId,
                'moboId' => $request->moboId,
                'memoryId' => $request->memoryId,
                'gpuId' => $request->gpuId,
                'caseId' => $request->caseId,
                'inStorageId' => $request->inStorageId,
                'psuId' => $request->psuId,
                'totalPrice' => $request->totalPrice,
            ]);
            
            Alert::success('Selamat', 'Anda berhasil menyimpan rakitan PC');
            return redirect()->route('rakitanku');
        }
    }
}
