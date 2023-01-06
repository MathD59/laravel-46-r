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
            echo ("toto1");
            $google_user = Socialite::driver('google')->user();
            echo ("toto2");
            $user = User::where('google_id', $google_user->getId())->first();
            echo ("toto3");
            if (!$user) {
                echo ("toto4");
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);
                echo ("toto5");
                $token = $new_user->createToken('My Token')->accessToken;
                return response()->json(['token' => $token], 200);
            } else {
                echo ("toto6");
                $token = $user->createToken('My Token')->accessToken;
                return response()->json(['token' => $token], 200);
            }
        } catch (Exception $e) {
            echo ("toto7");
            dd($e->getMessage());
        }
    }
}
