<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PembayaranController extends Controller
{
    /**
     * Menampilkan daftar pemesanan dengan detail pembayaran dan detail pemesanan.
     */
    public function index()
    {
        // Mengambil pemesanan dengan relasi pembayaran dan detailPemesanan
        $pemesanans = Pemesanan::with(['pembayaran', 'detailPemesanan.unitKendaraan', 'detailPemesanan.sopir'])
            ->paginate(10);

        // Debug: Log untuk memeriksa apakah pembayaran terdeteksi
        foreach ($pemesanans as $pemesanan) {
            Log::info('Pemesanan ID: ' . $pemesanan->id_pemesanan . ', Pembayaran: ' . ($pemesanan->pembayaran ? 'Ada, Status: ' . $pemesanan->pembayaran->status_pembayaran : 'Tidak Ada'));
        }

        return view('admin.pembayaran.index', compact('pemesanans'));
    }

    /**
     * Memperbarui status pembayaran.
     */
    public function update(Request $request, $id_pembayaran)
    {
        // Validasi input
        $request->validate([
            'status_pembayaran' => 'required|in:pending,paid,failed,refunded',
        ]);

        // Cari pembayaran
        $pembayaran = Pembayaran::findOrFail($id_pembayaran);

        // Update status pembayaran
        $pembayaran->status_pembayaran = $request->status_pembayaran;
        $pembayaran->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.pembayaran.index')->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}