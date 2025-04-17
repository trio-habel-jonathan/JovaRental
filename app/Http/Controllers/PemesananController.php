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
        $id_unit = $request->query('id_unit'); // Ganti id_kendaraan jadi id_unit
        $tipe_rental = $request->query('tipe_rental');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $lokasi = $request->query('lokasi');

        // Ambil detail unit dengan relasi kendaraan dan mitra
        $unit = DB::table('unit_kendaraan')
            ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->where('unit_kendaraan.id_unit', $id_unit)
            ->select('unit_kendaraan.*', 'kendaraan.*', 'mitra.nama_mitra', 'mitra.foto_mitra')
            ->firstOrFail();

        // Ambil alamat mitra sesuai lokasi
        $alamatMitra = AlamatMitra::where('id_mitra', $unit->id_mitra)
            ->where(function ($query) use ($lokasi) {
                $query->where('kota', 'LIKE', "%$lokasi%")
                      ->orWhere('kecamatan', 'LIKE', "%$lokasi%")
                      ->orWhere('provinsi', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat', 'LIKE', "%$lokasi%");
            })
            ->get();

        $startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
        $endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);

        return view('detail', compact('unit', 'tipe_rental', 'startDateTime', 'endDateTime', 'lokasi', 'alamatMitra'));
    }

    
}