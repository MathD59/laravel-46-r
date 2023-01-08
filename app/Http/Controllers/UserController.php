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

    
    public function usercfg (Request $request, $id)
    {
            $newcfg=User::find($id)->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'widget1'=>$request->widget1,
                'params1'=>$request->params1,
                'timer1'=>$request->timer1,
                'widget2'=>$request->widget1,
                'params2'=>$request->params1,
                'timer2'=>$request->timer1,
                'widget3'=>$request->widget1,
                'params3'=>$request->params1,
                'timer3'=>$request->timer1,
                'widget4'=>$request->widget1,
                'params4'=>$request->params1,
                'timer4'=>$request->timer1,
                'widget5'=>$request->widget1,
                'params5'=>$request->params1,
                'timer5'=>$request->timer1,
                'widget6'=>$request->widget1,
                'params6'=>$request->params1,
                'timer6'=>$request->timer1 ]);
            return $newcfg;    
    }
}

