<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                'email.required' => 'Email belum diisi',
                'email.email' => 'Gunakanlah format email yang benar',
                'password.required' => 'Password belum diisi'
            ];

            $this->validate($request, $rules, $customMessages);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'status'=>1])) {
                return redirect('admin/dashboard')->with('adminDetails', $data);
            } else {
                return redirect()->back()->with('error_message', 'Email atau Password salah');
            }
        }
        return view('admin.login');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function updateAdminPassword(Request $request)
    {
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();

        if($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'current_password' => 'required',
                'new_password' => 'required|between:6,20',
                'confirm_password' => 'required|same:new_password'
            ];

            $customMessages = [
                'current_password.required' => 'Password lama belum diisi',
                'new_password.required' => 'Password baru belum diisi',
                'new_password.between' => 'Password baru harus antara 6-20 karakter',
                'confirm_password.required' => 'Konfirmasi password belum diisi',
                'confirm_password.same' => 'Konfirmasi password tidak sama dengan password baru'
            ];

            $this->validate($request, $rules, $customMessages);

            if(Hash::check($data['current_password'], $adminDetails['password'])) {
                if(Hash::check($data['new_password'], $adminDetails['password'])){
                    return redirect()->back()->withErrors('Password baru anda sama dengan password lama');
                } else{
                    Admin::where('email', Auth::guard('admin')->user()->email)->update(['password'=>bcrypt($data['new_password'])]);
                    return redirect()->back()->withSuccess('Password berhasil diubah');
                }
            } else {
                return redirect()->back()->withErrors('Password lama salah');
            }
        }
        return view('admin.settings.update-admin-password', compact('adminDetails'));
    }

    public function updateAdminImage(Request $request)
    {
        if($request->hasFile('imgUpload')){
            $extension = $request->file('imgUpload')->extension();
            $imgName = date('dmyHis').uniqid().'.'.$extension;

            $this->validate($request, [
                'imgUpload' => 'required|image|mimes:jpeg,png,jpg,svg|max:5000',
            ], 
            [
                'imgUpload.image' => 'File yang dipilih bukan gambar',
                'imgUpload.mimes' => 'Format gambar harus jpeg, png, jpg, svg',
                'max' => 'Ukuran gambar maksimal 5MB'
            ]
            );
            Storage::putFileAs('public/images/profile-images', $request->file('imgUpload'), $imgName);
            Admin::where('email', Auth::guard('admin')->user()->email)->update(['image'=>$imgName]);

            return redirect()->back()->withSuccess('Gambar profil berhasil diperbarui');
        } else {
            return redirect()->back()->withErrors('Belum ada gambar yang dipilih');
        }
    }
}
