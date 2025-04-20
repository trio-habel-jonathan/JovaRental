<?php

use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get("/daftar-mitra", [UserPageController::class, "daftarMitra"])->name("daftarMitra");

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/alamat', [SearchController::class, 'searchAlamat'])->name('search.alamat');
Route::get('/remove-unit/{id_unit}', [PemesananController::class, 'removeUnit'])->name('remove-unit');
Route::get('/pemesanan/review/{id_pemesanan}', [PemesananController::class, 'review'])->name('review');
Route::post('/pemesanan/process', [PemesananController::class, 'processDetail'])->name('process.detail');
Route::post('/pemesanan/add-unit', [SearchController::class, 'addUnit'])->name  ('pemesanan.add-unit');


Route::middleware(['VerifiedEntity'])->group(function () {
    Route::get('/contact', [EmailController::class, 'showContactForm'])->name('contact.form');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
    Route::get("/", [UserPageController::class, "home"])->name("home");
    Route::get("/about", [UserPageController::class, "about"])->name("about");
    Route::get("/contact-us", [UserPageController::class, "contactus"])->name("contactus");
    Route::get("/daftar-kendaraan", [UserPageController::class, "daftarKendaraan"])->name("daftarKendaraan");
    Route::get("/daftar-kendaraan/pesan", [UserPageController::class, "pesanKendaraan"])->name("pesanKendaraan");
    Route::get("/pemesanan", [UserPageController::class, "pemesanan"])->name("pemesanan");
    // Route::get("/pemesanan/review", [UserPageController::class, "review"])->name("review");
    Route::get("/pemesanan/review/pembayaran", [UserPageController::class, "pembayaran"])->name("pembayaran");
    Route::get("/pemesanan/review/pembayaran/petunjuk-pembayaran-transfer", [UserPageController::class, "petunjukPembayaranTransfer"])->name("petunjukPembayaranTransfer");
    Route::get("/pemesanan/review/pembayaran/bukti-pembayaran", [UserPageController::class, "buktiPembayaran"])->name("buktiPembayaran");
    Route::get("/pemesanan/review/pembayaran/bukti-penyewaan-kendaraan", [UserPageController::class, "buktiPenyewaanKendaraan"])->name("buktiPenyewaanKendaraan");


    Route::middleware("auth")->group(function () {
        Route::get("/profile", [UserPageController::class, "profile"])->name("profile");
        Route::get("/profile/history", [UserPageController::class, "history"])->name("history");
        Route::get("/detail", [PemesananController::class, "detail"])->name("detail");

    });
});
