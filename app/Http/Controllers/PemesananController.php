<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\AlamatMitra;
use App\Models\Mitra;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function create(Request $request)
    {
        // Ambil parameter dari URL
        $id_kendaraan = $request->query('id_kendaraan');
        $tipe_rental = $request->query('tipe_rental');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $lokasi = $request->query('lokasi');

        // Ambil detail kendaraan
        $vehicle = Kendaraan::with('mitra')->findOrFail($id_kendaraan);
        // Parse tanggal dari format yang diterima
        $startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
        $endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);

        // Kirim data ke view
        return view('detail', compact('vehicle', 'tipe_rental', 'startDateTime', 'endDateTime', 'lokasi'));
    }
    public function showReview()
{
    $bookingData = session('booking_data');
    if (!$bookingData) {
        return redirect()->route('search')->with('error', 'Data pemesanan tidak ditemukan.');
    }
    $vehicle = Kendaraan::find($bookingData['id_kendaraan']);
    return view('review2', compact('bookingData', 'vehicle'));
}
}