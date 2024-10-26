<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', [App\Http\Controllers\Authcontroller::class, 'logout'])->name('adminlogout');

Route::get('/logins', [App\Http\Controllers\Authcontroller::class, 'logins'])->name('logins');
Route::post('/logins', [App\Http\Controllers\Authcontroller::class, 'loginspost'])->name('loginspost');

//Route::match(['GET', 'POST'], '/signup',[SignupController::class,'signup'])->name('signup');
Route::get('/signup', action: [App\Http\Controllers\SignupController::class, 'signup'])->name(name: 'signupview');
Route::post('/signup', [App\Http\Controllers\SignupController::class, 'signuppost'])->name("signup");

//Route::get('/forgot-passwords', [AdminController::class, 'forgotpasswords'])->name(name: 'forgot-passwords');


Route::get('/mystaffs', [App\Http\Controllers\AdminController::class, 'adminstaff'])->name("mystaff")->middleware(['auth', 'auth']);

Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name("myprofile")->middleware(['auth', 'auth']);

Route::get('/', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('admindashboard')->middleware(['auth', 'is_admin']);

Route::get('/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('staff.edit');

Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'emplodashboard'])->name('employdashboard')->middleware(['auth', 'is_employee']);

//Route::redirect('/', 'logins');

//Route::get('/mystaffs/{staff}/edit', [AdminController::class, 'edit'])->name('staff.edit');


