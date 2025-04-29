<?php

use App\Http\Controllers\Admin\{AdminPageController, UserController};
use App\Http\Controllers\Auth\{PageController, GoogleController};
use App\Http\Controllers\Admin\{JenisKendaraanController, MetodePembayaranMitraController as AdminMetodePembayaranMitraController, MetodePembayaranPlatformController as AdminMetodePembayaranPlatformController, PengajuanKemitraanController};
use App\Http\Controllers\Admin\KategoriKendaraanController;
use App\Http\Controllers\MetodePembayaranPlatformController;
use App\Http\Controllers\mitra\WithdrawalMitraController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminPageController::class, 'indexView'])->name('indexView');

    Route::patch('/mitra/{id}/verifikasi', [PengajuanKemitraanController::class, 'verifikasi'])->name('mitra.verifikasi');
    Route::patch('/mitra/{id}/tolak', [PengajuanKemitraanController::class, 'tolak'])->name('mitra.tolak');
    Route::get('/pengajuan/mitra', [PengajuanKemitraanController::class, 'index'])->name('pengajuan.kemitraan');

    Route::get('/settings', [AdminPageController::class, 'settingsView'])->name('settingsView');

    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', [AdminPageController::class, 'userView'])->name('userView');
        Route::get('/add', [AdminPageController::class, 'adduserView'])->name('adduserView');
        Route::get('/edit/{id_user}', [AdminPageController::class, 'edituserView'])->name('edituserView');

        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::put('update/{id_user}', [UserController::class, 'update'])->name('update');
        Route::delete('{id_user}/delete', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix("/pengajuan-withdraw")->name('withdraw.')->group(function() {
        Route::get('/', [AdminPageController::class, 'withdrawalMitra'])->name('index');

        Route::get('/', [WithdrawalMitraController::class, 'index'])->name('index');
        Route::get('/create', [WithdrawalMitraController::class, 'create'])->name('create');
        Route::post('/', [WithdrawalMitraController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [WithdrawalMitraController::class, 'edit'])->name('edit');
        Route::put('/{id}', [WithdrawalMitraController::class, 'update'])->name('update');
        Route::delete('/{id}', [WithdrawalMitraController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('mitra')->name('mitra.')->group(function () {
        Route::get('/', [AdminPageController::class, 'mitraView'])->name('mitraView');
        Route::get('/detail', [AdminPageController::class, 'detailmitraView'])->name('detailmitraView');
    });

    Route::prefix('clasifications')->name('clasifications.')->group(function () {
        Route::get('/', [AdminPageController::class, 'clasificationsView'])->name('clasificationsView');
        Route::get('/create-kategori', [AdminPageController::class, 'createKategoriView'])->name('createKategoriView');
        Route::get('/create-jenis', [AdminPageController::class, 'createJenisView'])->name('createJenisView');
        Route::get('/{uuid}/edit-kategori', [AdminPageController::class, 'editKategoriView'])->name('editKategoriView');
        Route::get('/edit-jenis', [AdminPageController::class, 'editJenisView'])->name('editJenisView');

        Route::post('/create-jenis', [JenisKendaraanController::class, 'store'])->name('jenis.store');
        Route::post('/create-kategori', [KategoriKendaraanController::class, 'store'])->name('kategori.store');

        Route::put('/{uuid}/update-kategori', [KategoriKendaraanController::class, 'update'])->name('kategori.update');

        Route::delete('/kategori-hapus', [KategoriKendaraanController::class, 'destroy'])->name('kategori.destroy');
        Route::delete('/jenis-hapus', [JenisKendaraanController::class, 'destroy'])->name('jenis.destroy');
    });

    Route::prefix("metode-pembayaran-platform")->name('metodePembayaran.')->group(function () {
        Route::get("/", [AdminMetodePembayaranPlatformController::class, "index"])->name('index');
        Route::get("/create", [AdminMetodePembayaranPlatformController::class, "create"])->name('create');
        Route::post("/", [AdminMetodePembayaranPlatformController::class, "store"])->name('store');
        Route::get("/{id}/edit", [AdminMetodePembayaranPlatformController::class, "edit"])->name('edit');
        Route::put("/{id}", [AdminMetodePembayaranPlatformController::class, "update"])->name('update');
        Route::delete("/{id}", [AdminMetodePembayaranPlatformController::class, "destroy"])->name('destroy');
    });

    Route::prefix("metode-pembayaran-mitra")->name('metodePembayaranMitra.')->group(function () {
        Route::get("/", [AdminMetodePembayaranMitraController::class, "index"])->name('index');
        Route::get("/create", [AdminMetodePembayaranMitraController::class, "create"])->name('create');
        Route::post("/create", [AdminMetodePembayaranMitraController::class, "store"])->name('store');
        Route::get("/{uuid}/edit", [AdminMetodePembayaranMitraController::class, "edit"])->name('edit');
        Route::put("/{uuid}/update", [AdminMetodePembayaranMitraController::class, "update"])->name('update');
        Route::delete("/{uuid}/destroy", [AdminMetodePembayaranMitraController::class, "destroy"])->name('destroy');
    });
});
