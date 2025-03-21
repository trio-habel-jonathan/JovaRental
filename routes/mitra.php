<?php

use App\Http\Controllers\Mitra\{MitraPageController, SupirPageController};
use Illuminate\Support\Facades\Route;


Route::prefix('mitra')->name('mitra.')->group(function () {

    Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'kendaraanmitraView'])->name('kendaraanmitraView');
        Route::get('/create', [MitraPageController::class, 'tambahkendaraan'])->name('tambahkendaraan');
        Route::get('/edit', [MitraPageController::class, 'editkendaraan'])->name('editkendaraan');
    });
    
    Route::prefix('supir')->name('supir.')->group(function () {
        Route::get('/', [SupirPageController::class, 'supirmitraView'])->name('supirmitraView');
        Route::get('/create', [SupirPageController::class, 'tambahsupir'])->name('tambahsupir');
        Route::get('/edit', [SupirPageController::class, 'editsupir'])->name('editsupir');
    });
});


    