<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    //Log out class
    public function logout (Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logins');
    }

    //Log in class
    public function logins ()
    {
        return view("home.logins");
    }
    public function loginspost (Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("dashboard"));
        }
        return redirect()->intended(route('logins'));
    }
}
