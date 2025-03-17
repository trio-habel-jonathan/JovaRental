<?php

use App\Http\Controllers\Auth\{PageController,GoogleController};
use Illuminate\Support\Facades\Route;

Route::get('/login', [PageController::class, 'loginView'])->name('loginView');
Route::get('/register', [PageController::class, 'registerView'])->name('registerView');
Route::get('/confirm-password', [PageController::class, 'passwordView'])->name('passwordView');
Route::get('/register-mitra', [PageController::class, 'registerMitra'])->name('registerMitra');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);