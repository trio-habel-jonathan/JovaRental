<?php

use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [UserPageController::class, "home"])->name("home");
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile/history', function () {
    return view('history');
})->name('history');
