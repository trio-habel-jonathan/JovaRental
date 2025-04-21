<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Pembayaran;
use App\Models\Mitra;
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
    // Get the authenticated user
    $user = Auth::user();

    // Access the mitra relationship and select id_user
    $mitra = $user->mitra()->select('id_user')->first();

    // Pass the data to the view
    return view('mitra.index', [
        'mitra' => $mitra
    ]);
}
    public function settingsMitraView()
    {
        return view('mitra.settings');
    }
    public function kendaraanmitraView()
    {
        $user = Auth::user();

        // Ambil mitra berdasarkan user yang login
        $mitra = $user->mitra;
    
        if (!$mitra) {
            // Jika user belum terdaftar sebagai mitra, arahkan atau beri pesan error
            abort(403, 'Anda belum terdaftar sebagai mitra.');
        }
    
        // Ambil kendaraan yang hanya dimiliki mitra ini
        $allKendaraan = Kendaraan::where('id_mitra', $mitra->id_mitra)->get();
    
        return view('mitra.kendaraan.index', compact('allKendaraan'));
    }
    
    
    public function pesananmitraView()
    {
        $allPesanan = Pemesanan::all();
       return view('mitra.pesanan.index', compact('allPesanan'));
    }
    
    public function pesananDetailView($id_pemesanan)
    {
        // Ambil data pembayaran
        $pembayaran = Pembayaran::where('id_pemesanan', $id_pemesanan)->first();
    
        // Ambil data pemesanan beserta detail dan unit kendaraan
        $pemesanan = Pemesanan::with(['detailPemesanan.unitKendaraan.kendaraan'])
            ->findOrFail($id_pemesanan);
    
        // Ambil total biaya kendaraan langsung dari subtotal di detail_pemesanan
        $totalHargaKendaraan = $pemesanan->detailPemesanan->sum('subtotal_harga');
    
        // Ambil biaya layanan, pajak, dan sopir
        $biayaLayanan = $pemesanan->detailPemesanan->sum('biaya_layanan');
        $pajak = $pemesanan->detailPemesanan->sum('pajak');
        $biayaSopir = $pemesanan->detailPemesanan->sum('biaya_sopir');
    
        // Hitung total pembayaran
        $totalBayar = $pemesanan->sum('total_harga');
    
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

    public function indexMitraEdit(){
        return view('mitra.edit');
    }
    
}
