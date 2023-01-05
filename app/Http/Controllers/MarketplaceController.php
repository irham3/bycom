<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketplaceController extends Controller
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
        return view('marketplace.index', compact('data'));
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

        return view('marketplace.category', compact('data'));
    }

    public function detailComponent($table, $id)
    {
        $detailComponent = new stdClass();
        switch ($table) {
            case "cpus":
                $specificDetail = Cpu::where('id', $id)->select('cpuSocketId', 'coreCount', 'coreClock', 'boostClock', 'tdp', 'integratedGraphic');
              break;
            case "motherboards":

              break;
            case "gpus":

              break;
            case "internal_storages":

              break;
            case "memories":

              break;
            case "power_supplies":

              break;
            case "cases":

              break;
            default:
            return redirect()->route('marketplace');
          }
          $generalDetail = DB::table($table)->select('name','price','url', 'image')->where('id', $id)->get();
          $detailComponent->general = $generalDetail;
          $detailComponent->specific = $specificDetail;
          dd($detailComponent);

        // dd($columnNames);
        // return view('marketplace.detail-component', compact('detailComponent'));
    }
}
