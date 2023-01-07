<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function rupiah($number)
    {
        return 'Rp ' . number_format($number, 0, ',', '.');
    }

    protected function getPcComponentDataTable(Model $pcComponentModel, $pcComponentView)
    {
        $data = $pcComponentModel->select('id','image','name','price','url')->get();

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

    public function getResponseEditData(Model $model, $id)
    {
        $data = $model->find($id);
        if($data)
        {
            return response()->json([
                'status'=>200,
                'data'=> $data,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No data Found.'
            ]);
        }
    }
}
