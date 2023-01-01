<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cpu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AdminCpuController extends Controller
{
    public function index() {
        return view('admin.pc-components.cpu.index');
    }

    public function getAllUsers()
    {
        $users = DB::table('users')
            ->select(
                'id as id',
                'name as name',
                'email as email')
            ->orderBy('id', 'asc')
            ->get();

            return DataTables::of($users)
            ->addColumn('action', function($user) {
                return view('admin.users._aksi')->with('user', $user);
            })
            ->addColumn('image', function($user) {
                $imgName = Cpu::find($user->id)->image;
                return view('admin.users._gambar')->with('imgName', $imgName);
            })
            ->make(true);
    }

    public function store(Request $request) {
       $validator = Validator::make($request->all(),[
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'unique:'.User::class],
            'password'  => ['required', 'confirmed', Password::defaults()],
        ],
        [
            'name.required'     => 'Nama harus diisi',
            'email.required'    => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
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
                Storage::putFileAs('public/images/profile-images/user', $request->file('imgUpload'), $imgName);
                User::create([
                    'name'  => $request->name,
                    'email'  => $request->email,
                    'image'  => $imgName,
                    'password'  => Hash::make($request->password),
                ]);
            } else {
                User::create([
                    'name'  => $request->name,
                    'email'  => $request->email,
                    'password'  => Hash::make($request->password),
                ]);
            }
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
        }

    }

    public function edit($id)
    {
        $user = User::find($id);
        if($user)
        {
            return response()->json([
                'status'=>200,
                'user'=> $user,
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
            $user = User::find($request->id);
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
        $user = User::findOrFail($id);
        $user->delete();
    }
}
