<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InternalStorage;
use App\Models\PcCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminPcCaseController extends Controller
{
    public function index()
    {
        return view('admin.pc-components.case.index');
    }

    public function getAllData()
    {
        $model = new PcCase();
        return parent::getPcComponentDataTable($model, 'case');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'type'     => ['required','string'],
             'hddSlot'     => ['required','integer'],
             'gpuMaxLengthMm'     => ['required','integer'],
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
            $path = 'public/images/pc-components/case';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            PcCase::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'type'  => $request->type,
                'hddSlot'  => $request->hddSlot,
                'gpuMaxLengthMm'  => $request->gpuMaxLengthMm,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new PcCase();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'type'     => ['required','string'],
            'hddSlot'     => ['required','integer'],
            'gpuMaxLengthMm'     => ['required','integer'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $inStorage = PcCase::find($request->id);
            if($inStorage) {
                $inStorage->name = $request->name;
                $inStorage->price = $request->price;
                $inStorage->url = $request->url;
                $inStorage->type = $request->type;
                $inStorage->hddSlot = $request->hddSlot;
                $inStorage->gpuMaxLengthMm = $request->gpuMaxLengthMm;
                $inStorage->description = $request->description;

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
                    Storage::putFileAs('public/images/pc-components/case', $request->file('imgUpload'), $imgName);
                    $inStorage->image = $request->imgUpload;
                }

                $inStorage->save();

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
        PcCase::findOrFail($id)->delete();
    }
}
