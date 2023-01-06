<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Exception\JsonException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try{
            $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            ]);
        // echo('die');
        $data = request(['name', 'email']);

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

            $token = $user->createToken('My Token')->accessToken;
            return response()->json(['token' => $token], 200);
        }
        catch(\Throwable $th){
            return "my bad";
        }
        // return $user;
    }
}

