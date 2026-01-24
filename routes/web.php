<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});




Route::get('/', [ProjectController::class, 'index']);

