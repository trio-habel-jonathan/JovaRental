<?php

use App\Http\Controllers\Admin\{AdminPageController,UserController};
use App\Http\Controllers\Auth\{PageController, GoogleController};
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminPageController::class, 'indexView'])->name('indexView');
    Route::get('/settings', [AdminPageController::class, 'settingsView'])->name('settingsView');

    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', [AdminPageController::class, 'userView'])->name('userView');
        Route::get('/add', [AdminPageController::class, 'adduserView'])->name('adduserView');
        Route::get('/edit', [AdminPageController::class, 'edituserView'])->name('edituserView');
    });

    Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    

    Route::prefix('mitra')->name('mitra.')->group(function () {
        Route::get('/', [AdminPageController::class, 'mitraView'])->name('mitraView');
        Route::get('/detail', [AdminPageController::class, 'detailmitraView'])->name('detailmitraView');
    });
});

