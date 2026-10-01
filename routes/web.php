<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


// Halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Proses login sementara
Route::post('/login', function () {
    return 'Login berhasil diproses';
})->name('login.process');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
