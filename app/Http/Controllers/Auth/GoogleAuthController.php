<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callBackGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                $newUser = User::updateOrCreate([
                    'email' => $googleUser->getEmail(),
                ], [
                    'name' => $googleUser->getName(),
                    'email_verified_at' => Carbon::now(),
                    'google_id' => $googleUser->getId(),
                ]);
                Auth::login(($newUser));
            } else {
                Auth::login($user);
            }
            return redirect('/');
        } catch (\Throwable $th) {
            Alert::error('Error', $th->getMessage());
        }
    }

}
