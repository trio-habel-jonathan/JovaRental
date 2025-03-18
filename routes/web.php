<?php

use App\Http\Controllers\Auth\{PageController,GoogleController,AuthController};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/login', [PageController::class, 'loginView'])->name('loginView');
Route::get('/register', [PageController::class, 'registerView'])->name('registerView');
Route::get('/registerMitra', [PageController::class, 'registerMitraView'])->name('registerMitraView');

Route::get('/confirm-password', [PageController::class, 'passwordView'])->name('passwordView');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-mitra', [AuthController::class, 'registerMitra'])->name('register.mitra');
