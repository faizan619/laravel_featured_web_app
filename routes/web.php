<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/booking',function(){
//     return view('bookingpage');
// });

Route::resource('booking',RoomController::class);

Route::resource('task',TodoController::class);
Route::view('/login','page.login')->name('loginpage');
Route::view('/register','page.register')->name('registerpage');

Route::post('/registerstore',[UserController::class,'register'])->name('register.store');
Route::post('/loginsave',[UserController::class,'login'])->name('login.save');

Route::delete('/logoutuser',[UserController::class,'logout'])->name('logout');