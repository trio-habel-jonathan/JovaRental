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

        // Tambah id_unit dan periode peminjaman ke session
        if (!isset($selectedUnits[$id_unit])) {
            $selectedUnits[$id_unit] = [
                'id_unit' => $id_unit,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ];
            $request->session()->put('selected_units', $selectedUnits);
        }

        // Ambil semua id_unit dari selectedUnits
        $unitIds = array_keys($selectedUnits); // Mengambil kunci array (id_unit)

        // Validasi jika tidak ada unit yang dipilih
        if (empty($unitIds)) {
            return redirect()->route('search', [
                'tipe_rental' => $tipe_rental,
                'lokasi' => $lokasi,
                'tanggal_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('Y-m-d'),
                'waktu_mulai' => Carbon::createFromFormat('d M Y, H:i', $start_date)->format('H:i'),
                'tanggal_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('Y-m-d'),
                'waktu_selesai' => Carbon::createFromFormat('d M Y, H:i', $end_date)->format('H:i'),
            ])->with('error', 'Tidak ada kendaraan yang dipilih.');
        }

        // Fetch details untuk semua selected units
        $units = DB::table('unit_kendaraan')
            ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->whereIn('unit_kendaraan.id_unit', $unitIds)
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

        // Tambahkan periode peminjaman ke setiap unit
        foreach ($units as $unit) {
            if (isset($selectedUnits[$unit->id_unit])) {
                $unit->start_date = $selectedUnits[$unit->id_unit]['start_date'];
                $unit->end_date = $selectedUnits[$unit->id_unit]['end_date'];
                try {
                    $unit->startDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->start_date);
                    $unit->endDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->end_date);
                } catch (\Exception $e) {
                    // Jika format tanggal salah, gunakan tanggal default
                    $unit->startDateTime = Carbon::now();
                    $unit->endDateTime = Carbon::now()->addDay();
                }
            } else {
                // Jika data sesi hilang, gunakan tanggal dari query
                $unit->startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
                $unit->endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);
            }
        }

        // Simpan id_mitra dari unit pertama ke session
        $selectedMitraId = $units->first()->id_mitra;
        $request->session()->put('selected_mitra_id', $selectedMitraId);

        // Ambil alamat mitra sesuai lokasi
        $alamatMitra = AlamatMitra::where('id_mitra', $selectedMitraId)
            ->where(function ($query) use ($lokasi) {
                $query->where('kota', 'LIKE', "%$lokasi%")
                    ->orWhere('kecamatan', 'LIKE', "%$lokasi%")
                    ->orWhere('provinsi', 'LIKE', "%$lokasi%")
                    ->orWhere('alamat', 'LIKE', "%$lokasi%");
            })
            ->get();

        return view('detail', compact('units', 'tipe_rental', 'lokasi', 'alamatMitra'));
    }

    public function removeUnit(Request $request, $id_unit)
    {
        $selectedUnits = $request->session()->get('selected_units', []);
        unset($selectedUnits[$id_unit]);
        $request->session()->put('selected_units', $selectedUnits);

        return redirect()->back()->with('success', 'Kendaraan berhasil dihapus.');
    }
}