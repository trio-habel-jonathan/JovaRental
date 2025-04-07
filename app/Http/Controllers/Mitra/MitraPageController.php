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
        $pembayaran = Pembayaran::where('id_pemesanan', $id_pemesanan)->first();

        // Ambil data pemesanan beserta detail kendaraan
        $pemesanan = Pemesanan::with('detailPemesanans.kendaraan')->findOrFail($id_pemesanan);
    
        // Ambil total biaya kendaraan langsung dari subtotal di detail_pemesanan
        $totalHargaKendaraan = $pemesanan->detailPemesanans->sum('subtotal_harga');
    
        // Ambil biaya layanan & pajak yang sudah dihitung dan disimpan di database
        $biayaLayanan = $pemesanan->detailPemesanans->sum('biaya_layanan');
        $pajak = $pemesanan->detailPemesanans->sum('pajak');
        $biayaSopir = $pemesanan->detailPemesanans->sum('biaya_supir');
    
        // Hitung total pembayaran
        $totalBayar = $pemesanan->detailPemesanans->sum('subtotal_dengan_fee');
    
        return view('mitra.pesanan.details', compact(
            'pembayaran',
            'pemesanan',
            'totalHargaKendaraan',
            'biayaLayanan',
            'pajak',
            'biayaSopir',
            'totalBayar'
        ));
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
