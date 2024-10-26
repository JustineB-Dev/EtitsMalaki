<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function admindashboard(): View
    {
        return view("home.admin.addashboard");
    }

    public function adminstaff(): View
    {
        $staffs = User::all();        
        return view('home.admin.staff', compact('staffs'));
    }

    public function edit()
    {
        /*$staffs = User::findOrFail($id);*/
             
        return view("home.modal.editstaff");
    }

    public function profile(): View
    {
        return view("home.admin.profile");
    }
    
/*    public function update(Request $request, $id)
{
    $staff = User::findOrFail($id);

    $request->validate([
        'lame' => 'required',
        'fame' => 'required',
        'mame' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:users,email,' . $staff->id,
        'password' => 'nullable|min:6',
    ]);

    $staff->update([
        'lname' => $request->name,
        'fname' => $request->name,
        'mname' => $request->name,
        'phone' => $request->name,
        'email' => $request->email,
        'password' => $request->password ? bcrypt($request->password) : $staff->password,
    ]);

    return redirect()->route('mystaff')->with('success', 'User updated successfully.');
}
    */
}   
