<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::where('social_id', $socialUser->id)
                ->orWhere('email', $socialUser->email)
                ->first();

            if ($user) {
                $user->update([
                    'social_id' => $socialUser->id,
                    'social_type' => $provider,
                ]);
            } else {
                $user = User::create([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'social_id' => $socialUser->id,
                    'social_type' => $provider,
                    'password' => null,
                    'membership_type' => 'A',
                ]);
            }

            Auth::login($user);
            return redirect()->intended('dashboard');

        } catch (Exception $e) {
            return redirect('login')->with('error', 'Gagal login menggunakan ' . $provider);
        }
    }
}
