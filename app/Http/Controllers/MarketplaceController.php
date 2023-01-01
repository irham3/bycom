<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketplaceController extends Controller
{
    public function index()
    {
        return view('marketplace.index');
    }

    public function category($table)
    {
        $data = new stdClass();
        $data->categoryName = match($table) {
            'cpus' => 'CPU',
            'gpus' => 'GPU',
            'motherboards' => 'Motherboard',
            'cases' => 'Casing PC',
            'internal_storages' => 'Internal Storage',
            'memories' => 'Memory (RAM)',
            'power_supplies' => 'Power Supply (PSU)',
            'case' => 'Casing PC',
            default => 'Unknown',
        };

        if ($data->categoryName == "Unknown") {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan!');
        }

        $data->components = DB::table($table)->select('id','name','price','image')->get();

        return view('marketplace.category', compact('data'));
    }
}
