<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup ()
    {
        return view('home.signup');
    }

    public function signuppost (Request $request) {
        
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required',
            'password' => 'required'

        ]);
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->mname = $request->mname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            return redirect(route("logins"));
        }
        return redirect()->route('home.signup');
    }
}
