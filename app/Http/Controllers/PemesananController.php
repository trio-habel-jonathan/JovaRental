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
   public function detail(Request $request)
{
    $id_unit = $request->query('id_unit');
    $tipe_rental = $request->query('tipe_rental');
    $start_date = $request->query('start_date');
    $end_date = $request->query('end_date');
    $lokasi = $request->query('lokasi');
    
    // Validasi id_unit
    if (!$id_unit) {
        return redirect()->route('search', [
            'tipe_rental' => $tipe_rental,
            'lokasi' => $lokasi,
            'tanggal_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('Y-m-d'),
            'waktu_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('H:i'),
            'tanggal_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('Y-m-d'),
            'waktu_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('H:i'),
        ])->with('error', 'Kendaraan tidak valid.');
    }

    // Ambil selected units dari session
    $selectedUnits = $request->session()->get('selected_units', []);

    // Tambah id_unit baru ke session kalau belum ada
    if (!in_array($id_unit, $selectedUnits)) {
        $selectedUnits[] = $id_unit;
        $request->session()->put('selected_units', $selectedUnits);
    }

    // Fetch details untuk semua selected units
    $units = DB::table('unit_kendaraan')
        ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
        ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
        ->whereIn('unit_kendaraan.id_unit', $selectedUnits)
        ->select('unit_kendaraan.*', 'kendaraan.*', 'mitra.nama_mitra', 'mitra.foto_mitra')
        ->get();

    // Validasi kalau units kosong
    if ($units->isEmpty()) {
        return redirect()->route('search', [
            'tipe_rental' => $tipe_rental,
            'lokasi' => $lokasi,
            'tanggal_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('Y-m-d'),
            'waktu_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('H:i'),
            'tanggal_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('Y-m-d'),
            'waktu_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('H:i'),
        ])->with('error', 'Tidak ada kendaraan yang dipilih.');
    }

    // Ambil alamat mitra sesuai lokasi
    $alamatMitra = AlamatMitra::where('id_mitra', $units->first()->id_mitra)
        ->where(function ($query) use ($lokasi) {
            $query->where('kota', 'LIKE', "%$lokasi%")
                  ->orWhere('kecamatan', 'LIKE', "%$lokasi%")
                  ->orWhere('provinsi', 'LIKE', "%$lokasi%")
                  ->orWhere('alamat', 'LIKE', "%$lokasi%");
        })
        ->get();

    $startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
    $endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);

    return view('detail', compact('units', 'tipe_rental', 'startDateTime', 'endDateTime', 'lokasi', 'alamatMitra'));
}
}