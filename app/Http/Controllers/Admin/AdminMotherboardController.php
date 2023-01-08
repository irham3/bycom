<?php

namespace App\Http\Controllers\Admin;

use App\Models\Motherboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CpuSocket;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminMotherboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil data socket motherboard untuk tambah dan edit data
        $cpuSockets = CpuSocket::select('id','socketName')->get();
        return view('admin.pc-components.motherboard.index', compact('cpuSockets'));
    }

    public function getAllDatatable()
    {
        $model = new Motherboard();
        return parent::getPcComponentDataTable($model, 'motherboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
             'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
             'name'      => ['required', 'string', 'max:200'],
             'price'     => ['required','integer','min:4'],
             'url'     => ['required','string'],
             'cpuSocketId'     => ['required','integer'],
             'formFactor'     => ['required','string'],
             'memoryMaxGB'     => ['required','integer'],
             'memorySlot'     => ['required','integer'],
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
             $path = 'public/images/pc-components/motherboard';
             Storage::putFileAs($path, $request->file('imgUpload'), $imgName);
 
             Motherboard::create([
                 'name'  => $request->name,
                 'price'  => $request->price,
                 'url'  => $request->url,
                 'image'  => $imgName,
                 'cpuSocketId'  => $request->cpuSocketId,
                 'formFactor'  => $request->formFactor,
                 'memoryMaxGB'  => $request->memoryMaxGB,
                 'memorySlot'  => $request->memorySlot,
                 'description'  => $request->description
             ]);
             
             return response()->json(['success' => "Berhasil menyimpan data"]);
         }
 
     }

    public function edit($id)
    {
        $model = new Motherboard();
        return parent::getResponseEditData($model, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'cpuSocketId'     => ['required','integer'],
            'formFactor'     => ['required','string'],
            'memoryMaxGB'     => ['required','integer'],
            'memorySlot'     => ['required','integer'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $motherboard = Motherboard::find($request->id);
            if($motherboard) {
                $motherboard->name = $request->name;
                $motherboard->price = $request->price;
                $motherboard->url = $request->url;
                $motherboard->cpuSocketId = $request->cpuSocketId;
                $motherboard->formFactor = $request->formFactor;
                $motherboard->memoryMaxGB = $request->memoryMaxGB;
                $motherboard->memorySlot = $request->memorySlot;
                $motherboard->description = $request->description;

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
                    Storage::putFileAs('public/images/pc-components/motherboard', $request->file('imgUpload'), $imgName);
                    $motherboard->image = $request->imgUpload;
                }
                    
                if($request->has('integratedGraphic'))
                    $motherboard->integratedGraphic = $request->integratedGraphic;

                $motherboard->save();

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
        Motherboard::findOrFail($id)->delete();
    }
}