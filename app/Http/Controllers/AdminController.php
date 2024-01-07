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
            $getAll = Student::all();
            return view('admin.dashboard', compact('getAll'));
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function showCreateUser(){
        return view('admin.createUser',);
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

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('admin.editUser', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'bio' => $request->bio
        ]);
        return redirect('/dashboard');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/dashboard');
    }

    public function detail($id){
        $student = Student::findOrFail($id);
        return view('admin.detailUser', compact('student'));
    }
}
