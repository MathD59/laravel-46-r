<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

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
            if (!$user) {
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
