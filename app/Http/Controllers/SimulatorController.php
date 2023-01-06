<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use App\Models\Gpu;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\PcCase;
use App\Models\PowerSupply;
use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimulatorController extends Controller
{
    public function index(Request $request)
    {
        $sessionData = $request->session()->all();
        $componentKeys = ['cpus','gpus','motherboards','cases', 'internal_storages', 'memories', 'power_supplies'];

        // Total harga semua komponennya
        $totalPrice = 0;

        // Total watt dari komponen yang sudah dipilih
        $totalWattage = 150;

        // Script JS untuk membuka multiple url dari produk2 ecommerce, sekali proses
        $multipleUrlsScript = "";
        foreach ($sessionData as $key => $value) {
            // Dicek key nya karena ada key yang bukan component
            if (in_array($key, $componentKeys)) {
                $totalPrice += $sessionData[$key]->price;

                if($key == 'cpus' || $key == 'gpus')
                    $totalWattage += $sessionData[$key]->tdp;

                $multipleUrlsScript .= "window.open('".$sessionData[$key]->url."','_blank');";
            }
        }
        // Mengubah angka ke format rupiah
        $totalPrice = parent::rupiah($totalPrice);

        return view('simulasi-rakit-pc.index', compact('totalPrice', 'multipleUrlsScript', 'totalWattage'));
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
            // Filter casing (notes: jangan lupa tambahin filter tipe monitor dg tipe mobo nya jg)
            $gpuLength = Gpu::where('id', $request->selectedGpuId)->select('length')->first()->length;
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
        return redirect()->route('simulasi');
    }

    public function saveSimulasi(Request $request)
    {
        # code...
    }
}
