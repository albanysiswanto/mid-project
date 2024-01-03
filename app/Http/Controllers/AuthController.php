<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAuth(){
        return view('welcome');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)){
            return redirect('/dashboard');
        }

        return redirect('/');
    }
    public function register(Request $request){

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bio' => $request->bio
        ]);


        return redirect('/');
    }

    public function signOut(){
        session()->flush();
        Auth::logout();

        return redirect('/');
    }
}
