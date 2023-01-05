<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimulatorController extends Controller
{
    public function index(Request $request)
    {
        $sessionData = $request->session()->all();
        $sessionKeys = ['cpus','gpus','motherboards','cases', 'internal_storages', 'memories', 'power_supplies'];

        $totalPrice = 0;
        $multipleUrlsScript = "";
        foreach ($sessionData as $key => $value) {
            if (in_array($key, $sessionKeys)) {
                // Menghitung harga total dari komponen yang sudah dipilih
                $totalPrice += $sessionData[$key]->price;
                $multipleUrlsScript .= "window.open('".$sessionData[$key]->url."','_blank');";
                // array_push($ecommerceUrls, $sessionData[$key]->url);
            }
        }
        // Mengubah angka ke format rupiah
        $totalPrice = parent::rupiah($totalPrice);

        return view('simulasi-rakit-pc.index', compact('totalPrice', 'multipleUrlsScript'));
    }

    public function addComponent($table)
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
 
         $pcComponents = DB::table($table)->select('id','name','price','image')->get();
         foreach ($pcComponents as $pcComponent) {
             $pcComponent->price = parent::rupiah($pcComponent->price);
         }
         $data->pcComponents = $pcComponents;
 
         return view('simulasi-rakit-pc.add-component', compact('data','table'));
    }

    public function addComponentItem($table, $id)
    {
        $componentData =  DB::table($table)->select('id','name','price','image', 'url')->where('id', $id)->get()[0];
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

    public function store(Request $request)
    {
        # code...
    }
}
