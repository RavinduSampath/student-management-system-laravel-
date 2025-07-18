<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\studentController;

Route::get('/about', [PageController::class, 'about']);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/text', function () {
    return 'Hello Laravel!';
});


Route::get('/hello', function () {
    return view('hello');
});


Route::get('/about', [PageController::class, 'about']);


Route::resource('students', studentController::class);
