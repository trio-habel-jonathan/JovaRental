<?php

use App\Http\Controllers\Mitra\AlamatMitraController;
use App\Http\Controllers\Mitra\KendaraanController;
use App\Http\Controllers\mitra\MetodePembayaranMitraController;
use App\Http\Controllers\Mitra\MitraPageController;
use App\Http\Controllers\Mitra\PesananController;
use App\Http\Controllers\Mitra\SupirPageController;
use App\Http\Controllers\Mitra\MitraController;
use App\Http\Controllers\Mitra\WithdrawalMitraController;
use App\Http\Controllers\Mitra\UnitKendaraanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\SupirController;
use Illuminate\Support\Facades\Route;

Route::prefix('mitra')->name('mitra.')->middleware(['auth', 'CheckRole:mitra'])->group(function () {
    Route::get('/pengembalian/create/{id_unit}', [KendaraanController::class, 'PengembalianKendaraanView'])->name('pengembalian.create');
    Route::post('/pengembalian/store/{id_unit}', [KendaraanController::class, 'storePengembalian'])->name('pengembalian.store');
    
    Route::get('/pengembalian-kendaraan', [KendaraanController::class,'pengembalianKendaraan'])->name('pengembalian-kendaraan');
    Route::get('/', [MitraPageController::class, 'indexMitraView'])->name('indexView'); // Pastikan rute memiliki nama ini
    Route::get('/edit', [MitraPageController::class, 'indexMitraEdit'])->name('indexEdit'); // Pastikan rute memiliki nama ini
    Route::get('/notifications', [MitraPageController::class, 'notificationMitraView'])->name('notifications'); // Pastikan rute memiliki nama ini
    Route::get('/settingss', [MitraController::class, 'profile'])->name('settings'); // Pastikan rute memiliki nama ini

    Route::prefix("/withdraw")->name('withdraw.')->group(function() {
        Route::get('/', [WithdrawalMitraController::class, 'index'])->name('index');
        Route::get('/create', [WithdrawalMitraController::class, 'create'])->name('create');
        Route::post('/', [WithdrawalMitraController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [WithdrawalMitraController::class, 'edit'])->name('edit');
        Route::put('/{id}', [WithdrawalMitraController::class, 'update'])->name('update');
        Route::delete('/{id}', [WithdrawalMitraController::class, 'destroy'])->name('destroy');
    });

    Route::put("/settings/{mitra}", [MitraController::class, "update"])->name('settingUpdate');


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

    Route::prefix("unit-kendaraan")->name("unitKendaraan.")->group(function () {
        Route::get("/", [UnitKendaraanController::class, "index"])->name('index');
        Route::get("/create", [UnitKendaraanController::class, "create"])->name('create');
        Route::post("/create", [UnitKendaraanController::class, "store"])->name('store');
        Route::get("/{uuid}/edit", [UnitKendaraanController::class, "edit"])->name('edit');
        Route::delete("/{uuid}/destroy", [UnitKendaraanController::class, "destroy"])->name('destroy');
    });

    Route::prefix('supir')->name('supir.')->group(function () {
        Route::get('/', [SupirPageController::class, 'supirmitraView'])->name('supirmitraView');
        Route::get('/create', [SupirPageController::class, 'tambahsupir'])->name('tambahsupir');
        Route::get('/edit/{id}', [SupirPageController::class, 'editsupirView'])->name('editsupirView');

        Route::post('/create-action', [SupirController::class, 'store'])->name('store');
        Route::delete('/delete-action', [SupirController::class, 'destroy'])->name('destroy');
        Route::put('/update-action/{uuid}', [SupirController::class, 'update'])->name('update');
    });

    Route::prefix('pesanan')->name('pesanan.')->group(function () {
        Route::get('/', [MitraPageController::class, 'pesananmitraView'])->name('pesananmitraView');
        Route::get('/details/{uuid}', [MitraPageController::class, 'pesanandetailView'])->name('pesanandetailView');
        // Route::get('/create', [PesananController::class, 'tambahpesanan'])->name('tambahpesananView');
        // Route::get('/edit', [PesananController::class, 'editpesanan'])->name('editpesananView');
        Route::put('/update/pilih-sopir', [PemesananController::class, 'pilihSopir'])->name('pilihSopir');
    });

    Route::prefix("/alamat")->name('alamat.')->group(function () {
        Route::get('/', [AlamatMitraController::class, 'index'])->name('MitraView');
        Route::get('/create', [AlamatMitraController::class, 'create'])->name('MitraCreate');
        Route::get('/{alamatMitra}/edit', [AlamatMitraController::class, 'edit'])->name('MitraEdit');
        Route::post('/create', [AlamatMitraController::class, 'store'])->name('MitraStore');
        Route::put('/{alamatMitra}/update', [AlamatMitraController::class, 'update'])->name('MitraUpdate');
        Route::delete('/{uuid}/destroy/', [AlamatMitraController::class, 'destroy'])->name('MitraDestroy');
    });

    Route::prefix("metode-pembayaran")->name('metodePembayaran.')->group(function(){
        Route::get("/", [MetodePembayaranMitraController::class, "index"])->name('index');
        Route::get("/create", [MetodePembayaranMitraController::class, "create"])->name('create');
        Route::post("/create", [MetodePembayaranMitraController::class, "store"])->name('store');
        Route::get("/{uuid}/edit", [MetodePembayaranMitraController::class, "edit"])->name('edit');
        Route::put("/{uuid}/update", [MetodePembayaranMitraController::class, "update"])->name('update');
        Route::delete("/{uuid}/destroy", [MetodePembayaranMitraController::class, "destroy"])->name('destroy');
    });
});
