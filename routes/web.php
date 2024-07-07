<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/task',function(){
//     return view('taskpage');
// })->name('task');

Route::resource('task',TodoController::class);