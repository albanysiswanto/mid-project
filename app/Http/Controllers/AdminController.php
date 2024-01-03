<?php

namespace App\Http\Controllers;

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
}
