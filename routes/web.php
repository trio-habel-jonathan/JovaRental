<?php

use App\Http\Controllers\Auth\{PageController, GoogleController, AuthController};
use App\Http\Controllers\mitra\MitraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware("guest")->group(function () {
    Route::get('/login', [PageController::class, 'loginView'])->name('login');
    Route::get('/register', [PageController::class, 'registerView'])->name('register');
    Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    Route::post('/login-action', [AuthController::class, 'login'])->name('login-action');
    Route::post('/register-action', [AuthController::class, 'register'])->name('register-action');
    
});

Route::middleware("auth")->group(function () {
    Route::get("/sewa-sebagai", [PageController::class, "sewaSebagai"])->name("sewaSebagai")->middleware('VerifiedEntity');
    Route::get("/detail-data", [PageController::class, "entityForm"])->name("entityForm");
    Route::get('/register-mitra', [PageController::class, 'registerMitraView'])->middleware('VerifiedEntity')->name('registerMitraView');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/entitas-action', [AuthController::class, 'entitas'])->name('entitas-action');
    Route::post('/registerMitra-action', [MitraController::class, 'store'])->name('register.mitra');
    // Route::post("/register-mitra-action", [MitraController::class, "store"])->name('registerMitra');
    Route::get("/register-mitra/sukses", [MitraController::class, 'suksesRegisterMitra'])->name('suksesRegister');
});

Route::get('/confirm-password', [PageController::class, 'passwordView'])->name('passwordView');
// Route::get('/register-mitra', [PageController::class, 'registerMitraView'])->name('registerMitra');


require 'user.php';
require 'admin.php';
require 'mitra.php';
