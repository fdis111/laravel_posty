<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'connect'])->name('login');

Route::post('/logout', [LogoutController::class, 'disconnect'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');
