<?php

use App\Http\Controllers\Mitra\KendaraanController;
use App\Http\Controllers\Mitra\MitraPageController;
use App\Http\Controllers\Mitra\PesananController;
use App\Http\Controllers\Mitra\SupirPageController;
use Illuminate\Support\Facades\Route;

Route::prefix('mitra')->name('mitra.')->group(function () {
    Route::get('/', [MitraPageController::class, 'indexMitraView'])->name('indexView'); // Pastikan rute memiliki nama ini
    Route::get('/notifications', [MitraPageController::class, 'notificationMitraView'])->name('notifications'); // Pastikan rute memiliki nama ini
    Route::get('/settingss', [MitraPageController::class, 'settingsMitraView'])->name('settings'); // Pastikan rute memiliki nama ini

    Route::prefix('keuangan')->name('keuangan')->group(function(){
        Route::get('/', [MitraPageController::class, 'keuanganMitraView'])->name('keuangan.index'); // Pastikan rute memiliki nama ini
    });

    Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'kendaraanmitraView'])->name('kendaraanmitraView');
        Route::get('/create', [KendaraanController::class, 'tambahkendaraan'])->name('tambahkendaraanView');
        Route::get('/edit', [KendaraanController::class, 'editkendaraan'])->name('editkendaraanView');
    });

    Route::prefix('supir')->name('supir.')->group(function () {
        Route::get('/', [SupirPageController::class, 'supirmitraView'])->name('supirmitraView');
        Route::get('/create', [SupirPageController::class, 'tambahsupir'])->name('tambahsupir');
        Route::get('/edit', [SupirPageController::class, 'editsupir'])->name('editsupir');
    });

    Route::prefix('pesanan')->name('pesanan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'pesananmitraView'])->name('pesananmitraView');
        Route::get('/details', [MitraPageController::class, 'pesanandetailView'])->name('pesanandetailView');
        Route::get('/create', [PesananController::class, 'tambahpesanan'])->name('tambahpesananView');
        Route::get('/edit', [PesananController::class, 'editpesanan'])->name('editpesananView');
    });
});
