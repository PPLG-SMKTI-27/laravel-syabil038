<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

Route::get('/', [ProjectController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

/* ================= AUTH ================= */
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
