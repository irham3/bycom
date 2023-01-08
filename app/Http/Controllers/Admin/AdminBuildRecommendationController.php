<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuildRecommendation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminBuildRecommendationController extends Controller
{
    public function index()
    {
        return view('admin.pc-builds.build-recommendation.index');
    }

    public function getAllDatatable()
    {
        $data = BuildRecommendation::select('id','image','name','price','url')->get();

        // Change to rupiah format
        foreach ($data as $datum) {
            $datum['price'] = 'Rp ' . number_format($datum['price'], 0, ',', '.');
        }

        return DataTables::of($data)
        ->addColumn('url', function($data) {
            return view('admin.pc-components._link')->with('linkUrl', $data->url);
        })
        ->addColumn('action', function($data) use(&$pcComponentView) {
            return view('admin.pc-components._aksi')->with('actionUrl', $pcComponentView.'/'.$data->id);
        })
        ->addColumn('image', function($data) use(&$pcComponentView) {
            return view('admin.pc-components._gambar')->with('imgName', $pcComponentView.'/'.$data->image);
        })
        ->make(true);
    }
}
