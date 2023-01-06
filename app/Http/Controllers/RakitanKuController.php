<?php

namespace App\Http\Controllers;

use App\Models\PcBuild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RakitanKuController extends Controller
{
    public function index(Request $request)
    {

        $listRakitan = PcBuild::where('userId', Auth::user()->id)->get();
        foreach ($listRakitan as $rakitan) {
            $rakitan->totalPrice = parent::rupiah($rakitan->totalPrice);
        }
             
        return view('rakitanku.index', compact('listRakitan'));
    }

    public function detailRakitan($code)
    {
        // Cek apakah code ditemukan
        if (PcBuild::where('code', '=', $code)->count() > 0) {
            // data yang khusus ada ketika proses edit 
            // (untuk membedakan dg proses tambah karena menggunakan page yang sama)
            $prevRakitanData = PcBuild::where('code', $code)->first();

            // Mengambil data semua komponen yang sudah disimpan di db
            $cpu =  DB::table('cpus')->select('*')->where('id', $prevRakitanData->cpuId)->first();
            $mobo =  DB::table('motherboards')->select('*')->where('id', $prevRakitanData->moboId)->first();
            $memory =  DB::table('memories')->select('*')->where('id', $prevRakitanData->memoryId)->first();
            $storage =  DB::table('internal_storages')->select('*')->where('id', $prevRakitanData->inStorageId)->first();
            $gpu =  DB::table('gpus')->select('*')->where('id', $prevRakitanData->gpuId)->first();
            $case =  DB::table('cases')->select('*')->where('id', $prevRakitanData->caseId)->first();
            $psu =  DB::table('power_supplies')->select('*')->where('id', $prevRakitanData->psuId)->first();

            // Menyimpan semua data db di satu variable
            $allComponents = [
                'cpus' => $cpu,
                'motherboards' => $mobo,
                'memories' => $memory,
                'internal_storages' => $storage,
                'gpus' => $gpu,
                'cases' => $case,
                'power_supplies' => $psu,
            ];

            $sessionData = session()->all();
            $componentKeys = array_keys($allComponents);

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

            foreach ($allComponents as $componentKey => $componentData) {
                // reset data di session dulu
                // session()->pull($componentKey, 'default');
                if(!is_null($componentData)) {
                    $componentData->formattedPrice = parent::rupiah($componentData->price);
                    
                    session([$componentKey => $componentData]);
                }
            }
            return view('simulasi-rakit-pc.index', 
                    compact('totalPrice', 'multipleUrlsScript', 'totalWattage', 'formattedTotalPrice',
                        'prevRakitanData'));

        // Jika code tidak ada
        } else {
            Alert::warning('Peringatan', 'Kode yang anda cari tidak ditemukan');
            return redirect()->route('simulasi');
        }
    }

    
}
