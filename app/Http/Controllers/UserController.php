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

    
    public function usercfg (Request $request)
    {
            $newcfg=User::find($request->id)->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'widget1'=>$request->widget1,
                'params1'=>$request->params1,
                'timer1'=>$request->timer1,
                'widget2'=>$request->widget2,
                'params2'=>$request->params2,
                'timer2'=>$request->timer2,
                'widget3'=>$request->widget3,
                'params3'=>$request->params3,
                'timer3'=>$request->timer3,
                'widget4'=>$request->widget4,
                'params4'=>$request->params4,
                'timer4'=>$request->timer4,
                'widget5'=>$request->widget5,
                'params5'=>$request->params5,
                'timer5'=>$request->timer5,
                'widget6'=>$request->widget6,
                'params6'=>$request->params6,
                'timer6'=>$request->timer6 ]);
            return $newcfg;    
    }
}

