<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{GoogleController, AuthController};

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [PageController::class, 'loginView'])->name('loginView');
    Route::get('/register', [PageController::class, 'registerView'])->name('registerView');
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
