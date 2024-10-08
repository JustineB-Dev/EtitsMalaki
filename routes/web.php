<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

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
Route::get('/signup', [App\Http\Controllers\SignupController::class, 'signup'])->name(name: 'signupview');
Route::post('/signup', [App\Http\Controllers\SignupController::class, 'signuppost'])->name("signup");

//Route::get('/forgot-passwords', [AdminController::class, 'forgotpasswords'])->name(name: 'forgot-passwords');

Route::middleware("auth")->group(function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('dashboard');
});


