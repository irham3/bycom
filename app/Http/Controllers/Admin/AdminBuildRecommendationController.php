<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuildRecommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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
            return view('admin.pc-builds._link')->with('linkUrl', $data->url);
        })
        ->addColumn('action', function($data) {
            return view('admin.pc-builds._aksi')->with('actionUrl', 'pc-recommendation/'.$data->id);
        })
        ->addColumn('image', function($data) {
            return view('admin.pc-builds._gambar')->with('imgName', $data->image);
        })
        ->make(true);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
         ], 
         [
         'imgUpload.image' => 'File yang dipilih bukan gambar',
         'imgUpload.mimes' => 'Format gambar harus jpeg, png, jpg, svg',
         'max' => 'Ukuran gambar maksimal 5MB'
         ]);
 
         if($validator->fails()) {
             return response()->json(['errors' => $validator->errors()]);
         } else {
             $extension = $request->file('imgUpload')->extension();
             $imgName = $request->name . '-' . date('dmyHis') . uniqid() . '.' .$extension;
             $path = 'public/images/build-recommendations';
             Storage::putFileAs($path, $request->file('imgUpload'), $imgName);
 
             BuildRecommendation::create([
                 'name'  => $request->name,
                 'price'  => $request->price,
                 'url'  => $request->url,
                 'image'  => $imgName,
             ]);
             
             return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }
 
     public function edit($id)
     {
         $model = new BuildRecommendation();
         return parent::getResponseEditData($model, $id);
     }
 
     public function update(Request $request)
     {
         $validator = Validator::make($request->all(),[
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string']
         ]);
 
         if($validator->fails()) {
             return response()->json([
                 'status'=>400,
                 'errors'=>$validator->messages()
             ]);
         } else {
             $buildRecommendation = BuildRecommendation::find($request->id);
             if($buildRecommendation) {
                 $buildRecommendation->name = $request->name;
                 $buildRecommendation->price = $request->price;
                 $buildRecommendation->url = $request->url;

                 // Tidak wajib update image
                 if($request->hasFile('imgUpload')) {
                     $extension = $request->file('imgUpload')->extension();
                     $imgName = date('dmyHis').uniqid().'.'.$extension;
         
                     $this->validate($request, 
                       [
                         'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
                       ], 
                       [
                         'imgUpload.image' => 'File yang dipilih bukan gambar',
                         'imgUpload.mimes' => 'Format gambar harus jpeg, png, jpg, svg',
                         'max' => 'Ukuran gambar maksimal 5MB'
                       ]
                     );
                     Storage::putFileAs('public/images/build-recommendations', $request->file('imgUpload'), $imgName);
                     $buildRecommendation->image = $request->imgUpload;
                 }
 
                 $buildRecommendation->save();
 
                 return response()->json([
                     'status'=>200,
                     'message'=>'Data Updated Successfully.'
                 ]);
             }
             else
             {
                 return response()->json([
                     'status'=>404,
                     'message'=>'No Data Found.'
                 ]);
             }
 
         }
     }
 
     public function destroy($id)
     {
         BuildRecommendation::findOrFail($id)->delete();
     }
}
