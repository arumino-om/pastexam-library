<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function(){
    return view('welcome');
});

// Authentication routes
Route::get('/auth/microsoft', function(){
    return Socialite::driver('microsoft')->redirect();
});
Route::get('/auth/microsoft/callback', function(){
    $user = Socialite::driver('microsoft')->user();
    return $user->getName();
});
