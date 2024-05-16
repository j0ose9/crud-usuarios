<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::view('login', 'login')->name('login');
Route::view('register', [UserController::class,'create']);
Route::post('login', function(){
  $credentials = request()->only('email', 'password');
  if (Auth::attempt($credentials)){
    request()->session()->regenerate();
    return redirect('users.index');
  }
  return redirect('login');
});