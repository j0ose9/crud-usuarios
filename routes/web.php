<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/register', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('welcome');
});
Route::get('/update/{user}', function ($user) {
    return view('welcome');
});
Route::get('/users', function () {
    return view('welcome');
});
Route::get('/users/{user}', function ($user) {
    return view('welcome');
});
Route::get('/delete/{user}', function ($user) {
    return view('welcome');
});
