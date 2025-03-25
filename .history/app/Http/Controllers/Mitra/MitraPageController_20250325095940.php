<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraPageController extends Controller
{
    public function notificationMitraView()
    {
        return view('mitra.notifications');
    }
    public function indexMitraView()
    {
        return view('mitra.index');
    }
    public function settingsMitraView()
    {
        return view('mitra.settings');
    }
    public function kendaraanmitraView()
    {
        return view('mitra.kendaraan.index');
    }
    public function pesananmitraView()
    {
        return view('mitra.pesanan.index');
    }
    public function pesanandetailView()
    {
        return view('mitra.pesanan.details');
    }
    public function keuanganMitraView()
    {
        return view('mitra.keuangan.index');
    }
    public function pengeluaran(){
        return view ('mitra.keuangan.expenses');
    }
    public function pemasukan(){
        return view ('mitra.keuangan.income');
    }
}
