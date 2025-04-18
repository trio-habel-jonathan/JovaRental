<?php

use App\Http\Controllers\Mitra\KendaraanController;
use App\Http\Controllers\Mitra\MitraPageController;
use App\Http\Controllers\Mitra\PesananController;
use App\Http\Controllers\Mitra\SupirPageController;
use App\Http\Controllers\Mitra\MitraController;
use App\Http\Controllers\SupirController;
use Illuminate\Support\Facades\Route;

Route::prefix('mitra')->name('mitra.')->middleware(['auth', 'CheckRole:mitra'])->group(function () {
    Route::get('/', [MitraPageController::class, 'indexMitraView'])->name('indexView'); // Pastikan rute memiliki nama ini
    Route::get('/notifications', [MitraPageController::class, 'notificationMitraView'])->name('notifications'); // Pastikan rute memiliki nama ini
    Route::get('/settingss', [MitraController::class, 'profile'])->name('settings'); // Pastikan rute memiliki nama ini


    Route::get('/keuangan', [MitraPageController::class, 'keuanganMitraView'])->name('keuangan.index'); // Pastikan rute memiliki nama ini
    Route::get('/pemasukan', [MitraPageController::class, 'pemasukan'])->name('keuangan.pemasukan'); // Pastikan rute memiliki nama ini
    Route::get('/pengeluaran', [MitraPageController::class, 'pengeluaran'])->name('keuangan.pengeluaran'); // Pastikan rute memiliki nama ini

    Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'kendaraanmitraView'])->name('kendaraanmitraView');
        Route::get('/create', [KendaraanController::class, 'tambahkendaraan'])->name('tambahkendaraanView');
        Route::get('/{uuid}/edit', [KendaraanController::class, 'editkendaraanView'])->name('editkendaraanView');
        Route::put('/{uuid}/edit', [KendaraanController::class, 'editkendaraan'])->name('editkendaraan');
        Route::post('/store', [KendaraanController::class, 'tambahkendaraanStore'])->name('tambahkendaraanStore');
        Route::delete('/destroy', [KendaraanController::class, 'destroy'])->name('hapusKendaraan');
    });

    Route::prefix('supir')->name('supir.')->group(function () {
        Route::get('/', [SupirPageController::class, 'supirmitraView'])->name('supirmitraView');
        Route::get('/create', [SupirPageController::class, 'tambahsupir'])->name('tambahsupir');
        Route::get('/edit', [SupirPageController::class, 'editsupir'])->name('editsupir');

        Route::post('/create-action', [SupirController::class, 'store'])->name('store');
        Route::delete('/delete-action', [SupirController::class, 'destroy'])->name('destroy');
        Route::put('/update-action', [SupirController::class, 'update'])->name('update');
    });

    Route::prefix('pesanan')->name('pesanan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'pesananmitraView'])->name('pesananmitraView');
        Route::get('/details/{uuid}', [MitraPageController::class, 'pesanandetailView'])->name('pesanandetailView');
        Route::get('/create', [PesananController::class, 'tambahpesanan'])->name('tambahpesananView');
        Route::get('/edit', [PesananController::class, 'editpesanan'])->name('editpesananView');
    });
});
