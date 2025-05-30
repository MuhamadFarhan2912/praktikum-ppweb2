<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->middleware('auth');
Route::get('/login', function() { return view('login'); })->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function() { return view('register'); })->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);