<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PowerSupply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminPowerSupplyController extends Controller
{
    public function index()
    {
        return view('admin.pc-components.psu.index');
    }

    public function getAllData()
    {
        $model = new PowerSupply();
        return parent::getPcComponentDataTable($model, 'psu');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'formFactor'     => ['required','string'],
             'efficiencyRating'     => ['required','string'],
             'wattage'     => ['required','integer'],
             'modular'     => ['required','string'],
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
            $path = 'public/images/pc-components/psu';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            PowerSupply::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'formFactor'  => $request->formFactor,
                'efficiencyRating'  => $request->efficiencyRating,
                'wattage'  => $request->wattage,
                'modular'  => $request->modular,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new PowerSupply();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'formFactor'     => ['required','string'],
            'efficiencyRating'     => ['required','string'],
            'wattage'     => ['required','integer'],
            'modular'     => ['required','string'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $psu = PowerSupply::find($request->id);
            if($psu) {
                $psu->name = $request->name;
                $psu->price = $request->price;
                $psu->url = $request->url;
                $psu->formFactor = $request->formFactor;
                $psu->efficiencyRating = $request->efficiencyRating;
                $psu->wattage = $request->wattage;
                $psu->modular = $request->modular;
                $psu->description = $request->description;

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
                    Storage::putFileAs('public/images/pc-components/psu', $request->file('imgUpload'), $imgName);
                    $psu->image = $request->imgUpload;
                }

                $psu->save();

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
        PowerSupply::findOrFail($id)->delete();
    }
}
