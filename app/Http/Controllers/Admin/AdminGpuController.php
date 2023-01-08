<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gpu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminGpuController extends Controller
{
    public function index()
    {
        return view('admin.pc-components.gpu.index');
    }

    public function getAllDatatable()
    {
        $model = new Gpu();
        return parent::getPcComponentDataTable($model, 'gpu');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'license'     => ['required','string'],
             'memorySize'     => ['required','integer'],
             'tdp'     => ['required','integer'],
             'boostClockMhz'     => ['required','integer'],
             'lengthMm'     => ['required','integer'],
             'description'     => ['required', 'string'],
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
            $path = 'public/images/pc-components/gpu';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            Gpu::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'license'  => $request->license,
                'memorySize'  => $request->memorySize,
                'tdp'  => $request->tdp,
                'boostClockMhz'  => $request->boostClockMhz,
                'lengthMm'  => $request->lengthMm,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new Gpu();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'license'     => ['required','string'],
            'memorySize'     => ['required','integer'],
            'tdp'     => ['required','integer'],
            'boostClockMhz'     => ['required','integer'],
            'lengthMm'     => ['required','integer'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $gpu = Gpu::find($request->id);
            if($gpu) {
                $gpu->name = $request->name;
                $gpu->price = $request->price;
                $gpu->url = $request->url;
                $gpu->license = $request->license;
                $gpu->memorySize = $request->memorySize;
                $gpu->tdp = $request->tdp;
                $gpu->boostClockMhz = $request->boostClockMhz;
                $gpu->description = $request->description;

                // Tidak wajib update gambar
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
                    Storage::putFileAs('public/images/pc-components/gpus', $request->file('imgUpload'), $imgName);
                    $gpu->image = $request->imgUpload;
                }

                $gpu->save();

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
        Gpu::findOrFail($id)->delete();
    }
}
