<?php

use App\Http\Controllers\Mitra\MitraPageController;x
use Illuminate\Support\Facades\Route;


Route::get('kendaraan/index', [PageController::class, 'kendaraanmitraView'])->name('kendaraanmitraView');
Route::get('kendaraan/create', [PageController::class, 'tambahkendaraan'])->name('tambahkendaraan');
Route::get('kendaraan/edit', [PageController::class, 'editkendaraan'])->name('editkendaraan');