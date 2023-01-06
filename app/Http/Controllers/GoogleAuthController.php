<?php

namespace App\Http\Controllers;

use App\Models\User;

use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\AbstractProvider;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            // dd($user);
            if (!$user) {
                echo ("toto1");
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);
                $token = $new_user->createToken('My Token')->accessToken;
                return response()->json(['token' => $token], 200);
            } else {
                $token = $user->createToken('My Token')->accessToken;
                return response()->json(['token' => $token], 200);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
