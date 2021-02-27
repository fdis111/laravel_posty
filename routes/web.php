<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');
