<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Pembayaran;
use App\Models\FeeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $allKendaraan = Kendaraan::all();
        return view('mitra.kendaraan.index', compact('allKendaraan'));
    }
    public function pesananmitraView()
    {
        $allPesanan = Pemesanan::all();
       return view('mitra.pesanan.index', compact('allPesanan'));
    }
    public function pesananDetailView($id_pemesanan)
    {
        // Ambil data pemesanan beserta detail kendaraan
        $pemesanan = Pemesanan::with('detailPemesanans.kendaraan')->findOrFail($id_pemesanan);
    
       
    return view('mitra.pesanan.details', [
        'pemesanan' => $pemesanan,
        'totalHargaKendaraan' => $pemesanan->hitungTotalHargaKendaraan(),
        'biayaLayanan' => $pemesanan->hitungBiayaLayanan(),
        'pajak' => $pemesanan->hitungPajak(),
        'totalBayar' => $pemesanan->hitungTotalBayar(),
    ]);
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
