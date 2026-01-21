<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);

