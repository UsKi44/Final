<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register() {
        return view('register');
    }

    public function register_user(UserRequest $request){
        User::create([
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password'))
        ]);

        return redirect('/');
    }

    public function login(){
        return view('login');
    }

    public function login_user(Request $request){
        $credentials = $request->except('_token');
        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            abort('404');
        }
    }


    public function log_out(){
        Auth::logout();
        return redirect()->back();
    }
}
