<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cpu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CpuSocket;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminCpuController extends Controller
{
    public function index() {
        // Mengambil data socket cpu untuk tambah dan edit data
        $cpuSockets = CpuSocket::select('id','socketName')->get();
        return view('admin.pc-components.cpu.index',compact('cpuSockets'));
    }
    
    public function getAllDatatable()
    {
        $cpuModel = new Cpu();
        return parent::getPcComponentDataTable($cpuModel, 'cpu');
    }

    public function store(Request $request) {
       $validator = Validator::make($request->all(),[
            'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'cpuSocketId'     => ['required','integer'],
            'coreCount'     => ['required','integer'],
            'coreClock'     => ['required','string'],
            'boostClock'     => ['required','string'],
            'tdp'     => ['required','integer'],
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
            $path = 'public/images/pc-components/cpu';
            Storage::putFileAs($path, $request->file('imgUpload'), $imgName);

            $integratedGraphic = '';
            if($request->has('integratedGraphic'))
                $integratedGraphic = $request->integratedGraphic;

            Cpu::create([
                'name'  => $request->name,
                'price'  => $request->price,
                'url'  => $request->url,
                'image'  => $imgName,
                'cpuSocketId'  => $request->cpuSocketId,
                'coreCount'  => $request->coreCount,
                'coreClock'  => $request->coreClock,
                'boostClock'  => $request->boostClock,
                'tdp'  => $request->tdp,
                'integratedGraphic'  => $integratedGraphic,
                'description'  => $request->description
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
        }

    }

    public function edit($id)
    {
        $cpuModel = new Cpu();
        return parent::getResponseEditData($cpuModel, $id);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:200'],
            'price'     => ['required','integer','min:4'],
            'url'     => ['required','string'],
            'cpuSocketId'     => ['required','integer'],
            'coreCount'     => ['required','integer'],
            'coreClock'     => ['required','string'],
            'boostClock'     => ['required','string'],
            'tdp'     => ['required','integer'],
            'description'     => ['required','string'],
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        } else {
            $cpu = Cpu::find($request->id);
            if($cpu) {
                $cpu->name = $request->name;
                $cpu->price = $request->price;
                $cpu->url = $request->url;
                $cpu->cpuSocketId = $request->cpuSocketId;
                $cpu->coreCount = $request->coreCount;
                $cpu->coreClock = $request->coreClock;
                $cpu->boostClock = $request->boostClock;
                $cpu->tdp = $request->tdp;
                $cpu->description = $request->description;

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
                    Storage::putFileAs('public/images/pc-components/cpu', $request->file('imgUpload'), $imgName);
                    $cpu->image = $request->imgUpload;
                }
                    
                if($request->has('integratedGraphic'))
                    $cpu->integratedGraphic = $request->integratedGraphic;

                $cpu->save();

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
        Cpu::findOrFail($id)->delete();
    }
}
