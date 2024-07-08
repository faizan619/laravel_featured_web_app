<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('task',TodoController::class);
Route::view('/login','page.login');
Route::view('/register','page.register')->name('registerpage');

Route::post('/registerstore',[UserController::class,'register'])->name('register.store');