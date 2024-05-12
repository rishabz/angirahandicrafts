<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\helpers\CommonClass;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function index(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            $dashboardUrl = CommonClass::getDashbordUrl();
            return view('login',compact("dashboardUrl"));
        }
    }

    function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            Session::put('email', $validator->errors()->first('email'));
            Session::put('password', $validator->errors()->first('password'));
            return redirect()->back();
        }else{
            $email = $request->email;
            $password = $request->password;
            $user_data = User::where('email','=',$email)->where('status','=','Active')->first();
            if ($user_data instanceof User) {
                if(Hash::check($password, $user_data->password)){
                    $user_data->role = 'admin';
                    Auth::login($user_data);
                    return redirect()->back();
                }else{
                    Session::put('password', 'Password is invalid.');
                    return redirect()->back();
                }
            } else {
                Session::put('email', "Email is invalid.");
                return redirect()->back();
            }
        }
    }
}
