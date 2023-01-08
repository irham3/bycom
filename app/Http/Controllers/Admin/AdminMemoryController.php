<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use App\Models\Motherboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminMemoryController extends Controller
{
    public function index()
    {
        return view('admin.pc-components.memory.index');
    }

    public function getAllDatatable()
    {
        $model = new Memory();
        return parent::getPcComponentDataTable($model, 'memory');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'type'     => ['required','string'],
             'count'     => ['required','integer'],
             'capacityPerPiece'     => ['required','integer'],
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
            $path = 'public/images/pc-components/memory';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            Memory::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'type'  => $request->type,
                'count'  => $request->count,
                'capacityPerPiece'  => $request->capacityPerPiece,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new Memory();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'type'     => ['required','string'],
            'count'     => ['required','integer'],
            'capacityPerPiece'     => ['required','integer'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $memory = Memory::find($request->id);
            if($memory) {
                $memory->name = $request->name;
                $memory->price = $request->price;
                $memory->url = $request->url;
                $memory->type = $request->type;
                $memory->count = $request->count;
                $memory->capacityPerPiece = $request->capacityPerPiece;
                $memory->description = $request->description;

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
                    Storage::putFileAs('public/images/pc-components/memory', $request->file('imgUpload'), $imgName);
                    $memory->image = $request->imgUpload;
                }

                $memory->save();

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
        Memory::findOrFail($id)->delete();
    }
}

