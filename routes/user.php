<?php

use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [UserPageController::class, "home"])->name("home");
Route::get("/about", [UserPageController::class, "about"])->name("about");
Route::get("/profile", [UserPageController::class, "profile"])->name("profile");
Route::get("/profile/history", [UserPageController::class, "history"])->name("history");
Route::get("/contact-us", [UserPageController::class, "contactus"])->name("contactus");
Route::get("/daftar-kendaraan", [UserPageController::class, "daftarKendaraan"])->name("daftarKendaraan");
Route::get("/daftar-mitra", [UserPageController::class, "daftarMitra"])->name("daftarMitra");

