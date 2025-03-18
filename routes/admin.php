<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Auth\{PageController, GoogleController};
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminPageController::class, 'indexView'])->name('indexView');