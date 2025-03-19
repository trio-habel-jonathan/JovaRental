<?php

use App\Http\Controllers\Mitra\MitraPageController;
use Illuminate\Support\Facades\Route;



Route::prefix('mitra')->name('mitra.')->group(function () {

    Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'kendaraanmitraView'])->name('kendaraanmitraView');
        Route::get('/create', [MitraPageController::class, 'tambahkendaraan'])->name('tambahkendaraanView');
        Route::get('/edit', [MitraPageController::class, 'editkendaraan'])->name('editkendaraanView');
    });

    Route::get('/notifications')->function(
        return view ('mitra.notifications');
    );

});