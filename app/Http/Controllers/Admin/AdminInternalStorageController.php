<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InternalStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminInternalStorageController extends Controller
{
    public function index()
    {
        return view('admin.pc-components.internal-storage.index');
    }

    public function getAllData()
    {
        $model = new InternalStorage();
        return parent::getPcComponentDataTable($model, 'internal-storage');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'capacity'     => ['required','string'],
             'type'     => ['required','string'],
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
            $path = 'public/images/pc-components/internal-storage';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            InternalStorage::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'capacity'  => $request->capacity,
                'type'  => $request->type,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new InternalStorage();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'capacity'     => ['required','string'],
            'type'     => ['required','string'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $inStorage = InternalStorage::find($request->id);
            if($inStorage) {
                $inStorage->name = $request->name;
                $inStorage->price = $request->price;
                $inStorage->url = $request->url;
                $inStorage->capacity = $request->capacity;
                $inStorage->type = $request->type;
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
                    Storage::putFileAs('public/images/pc-components/internal-storage', $request->file('imgUpload'), $imgName);
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
        InternalStorage::findOrFail($id)->delete();
    }
}
