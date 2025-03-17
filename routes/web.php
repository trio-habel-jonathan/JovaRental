<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{GoogleController};
use App\Http\Controllers\{AuthController};





Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
});

// Protected route for the dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure you have a `dashboard.blade.php` file.
})->middleware('auth')->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
