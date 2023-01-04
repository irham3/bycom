<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cpu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CpuSocket;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AdminCpuController extends Controller
{
    public function index() {
        $cpuSockets = CpuSocket::select('id','socketName')->get();
        return view('admin.pc-components.cpu.index',compact('cpuSockets'));
    }
    
    public function getAllData()
    {
        $model = new Cpu();
        return parent::getPcComponentDataTable($model, 'cpu');
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
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
        }

    }

    public function edit($id)
    {
        $data = Cpu::find($id);
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

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email'],
            'password'  => ['required', Password::defaults()]
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $user = Cpu::find($request->id);
            if($user)
            {
                if($request->hasFile('imgUpload')){
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
                    Storage::putFileAs('public/images/profile-images/users', $request->file('imgUpload'), $imgName);
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');
                    $user->password = Hash::make($request->input('password'));
                    $user->image = $imgName;
                    $user->update();
                } else {
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');
                    $user->password = Hash::make($request->input('password'));
                    $user->update();
                }
                
                return response()->json([
                    'status'=>200,
                    'message'=>'User Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No User Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $user = Cpu::findOrFail($id);
        $user->delete();
    }
}
