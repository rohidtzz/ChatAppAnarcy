<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_post(Request $request){

        $auth = Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        if(!$auth){
            return redirect('/');
        }

        return redirect('/chat');

    }

    public function register(){
        return view('register');
    }

    public function register_post(Request $request){

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');


    }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }
}
