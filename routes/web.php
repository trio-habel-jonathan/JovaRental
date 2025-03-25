<?php

use App\Http\Controllers\Auth\{PageController, GoogleController, AuthController};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/login', [PageController::class, 'loginView'])->name('loginView');
Route::get('/register', [PageController::class, 'registerView'])->name('registerView');
Route::get('/registerMitra', [PageController::class, 'registerMitraView'])->name('registerMitraView');

Route::get('/confirm-password', [PageController::class, 'passwordView'])->name('passwordView');
Route::get('/register-mitra', [PageController::class, 'registerMitra'])->name('registerMitra');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get("/sewa-sebagai", [PageController::class, "sewaSebagai"])->name("sewaSebagai");
Route::get("/detail-data", [PageController::class, "entityForm"])->name("entityForm");

Route::post('/login-action', [AuthController::class, 'login'])->name('login');
Route::post('/register-action', [AuthController::class, 'register'])->name('register');
Route::post('/registerMitra-action', [AuthController::class, 'registerMitra'])->name('register.mitra');

require 'user.php';
require 'admin.php';
require 'mitra.php';