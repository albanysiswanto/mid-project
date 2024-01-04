<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function showCreateUser(){
        return view('admin.createUser');
    }

    public function store(Request $request){
        // $request->validate([
        //     'firstName' => 'required',
        //     'lastName' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'bio' => 'required',
        // ]);

        Student::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'bio' => $request->bio
        ]);


        return redirect('/dashboard');
    }
}
