<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function index() {
        return view('admin.users.index');
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
        }
        else {
            User::create([
                'name'  => $request->name,
                'email'  => $request->email,
                'password'  => Hash::make($request->password),
            ]);
            return response()->json(['success' => "Berhasil menyimpan data"]);
        }

    }

    public function edit($id)
    {
        $user = User::find($id)->first();
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

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email','unique:'.User::class],
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
            $user = User::find($id);
            if($user)
            {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->update();
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
