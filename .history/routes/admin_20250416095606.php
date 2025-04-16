<?php

use App\Http\Controllers\Admin\{AdminPageController, UserController};
use App\Http\Controllers\Auth\{PageController, GoogleController};
use App\Http\Controllers\Admin\{JenisKendaraanController,PengajuanKemitraanController};
use App\Http\Controllers\Admin\KategoriKendaraanController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::patch('/admin/mitra/{id}/verifikasi', [MitraController::class, 'verifikasi'])->name('admin.mitra.verifikasi');
    Route::patch('/admin/mitra/{id}/tolak', [MitraController::class, 'tolak'])->name('admin.mitra.tolak');


    Route::get('/', [AdminPageController::class, 'indexView'])->name('indexView');

    Route::get('/pengajuan/mitra',[PengajuanKemitraanController::class, 'index']);
    Route::get('/settings', [AdminPageController::class, 'settingsView'])->name('settingsView');

    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', [AdminPageController::class, 'userView'])->name('userView');
        Route::get('/add', [AdminPageController::class, 'adduserView'])->name('adduserView');
        Route::get('/edit/{id_user}', [AdminPageController::class, 'edituserView'])->name('edituserView');
    });


    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::put('user/update/{id_user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users', [UserController::class, 'destroy'])->name('user.destroy');


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
});
