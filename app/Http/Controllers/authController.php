<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }

        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {

        $request->validate([
          
            'password'=>'nullable|required|confirmed',
        ]);


        $password = $request->password;
        $store = [
            'nik'=> $request->nik,
            'name'=> $request->name,
            'tlp'=> $request->tlp,
            'email'=> $request->email,
            'alamat'=> $request->alamat,
            'role' =>  'user',
            'password'=>bcrypt($request->password),
            'remember_token'=> str_random(60)
        ];
        

        User::create($store);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    
}