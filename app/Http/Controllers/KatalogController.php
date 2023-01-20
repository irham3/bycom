<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Support\Facades\DB;

class KatalogController extends Controller
{
    public function index()
    {
        $data = new stdClass();
        $data->cpus = DB::table('cpus')->select('id','name','price','image')->limit(4)->get();
        $data->gpus = DB::table('gpus')->select('id','name','price','image')->limit(4)->get();
        $data->motherboards = DB::table('motherboards')->select('id','name','price','image')->limit(4)->get();
        $data->cases = DB::table('cases')->select('id','name','price','image')->limit(4)->get();
        $data->memories = DB::table('memories')->select('id','name','price','image')->limit(4)->get();
        $data->internal_storages = DB::table('internal_storages')->select('id','name','price','image')->limit(4)->get();
        $data->power_supplies = DB::table('power_supplies')->select('id','name','price','image')->limit(4)->get();

        // Get price and change it to Indonesian Rupiah format
        foreach ($data as $componentType => $components) {
            foreach ($components as $component) {
                $component->price = parent::rupiah($component->price);
            }
        }
        return view('katalog.index', compact('data'));
    }

    public function category($table)
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

        return view('katalog.category', compact('data','table'));
    }

    public function detailComponent($table, $id)
    {
        $imageFolder = match($table) {
          'cpus' => 'cpu',
          'gpus' => 'gpu',
          'motherboards' => 'motherboard',
          'cases' => 'case',
          'internal_storages' => 'internal-storage',
          'memories' => 'memory',
          'power_supplies' => 'psu',
          default => '',
        };
        $detailComponent = DB::table($table)->select('name','price','url', 'image', 'description')->where('id', $id)->get()[0];
        $detailComponent->price = parent::rupiah($detailComponent->price);

        // dd($columnNames);
        return view('katalog.detail-component', compact('detailComponent', 'imageFolder'));
    }
}
