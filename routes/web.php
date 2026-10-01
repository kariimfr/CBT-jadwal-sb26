<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])
    ->name('register.store');
