<?php

use App\Http\Controllers\Auth\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [PageController::class, 'loginView'])->name('loginView');
Route::get('/register', [PageController::class, 'registerView'])->name('registerView');
Route::get('/confirm-password', [PageController::class, 'passwordView'])->name('passwordView');