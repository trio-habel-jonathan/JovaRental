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
    
        // Hitung total harga kendaraan yang disewa
        $totalHargaKendaraan = $pemesanan->detailPemesanans->sum(function ($detail) {
            $lamaSewa = (strtotime($detail->tanggal_selesai) - strtotime($detail->tanggal_mulai)) / 86400; // Konversi ke hari
            return $detail->kendaraan->harga_sewa_perhari * max(1, $lamaSewa);
        });
        
    
        // Ambil nilai fee layanan & pajak dari database
        $biayaLayananPersen = FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440000')->value('nilai_fee');
        $pajakPersen = FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440002')->value('nilai_fee');
    
        // Hitung biaya layanan & pajak
        $biayaLayanan = ($totalHargaKendaraan * $biayaLayananPersen) / 100;
        $pajak = ($totalHargaKendaraan * $pajakPersen) / 100;
    
        // Hitung total pembayaran
        $totalBayar = $totalHargaKendaraan + $biayaLayanan + $pajak;
    
        return view('mitra.pesanan.details', compact('pemesanan', 'totalHargaKendaraan', 'biayaLayananPersen', 'biayaLayanan', 'pajakPersen', 'pajak', 'totalBayar'));
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
