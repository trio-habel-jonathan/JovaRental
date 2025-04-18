<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\AlamatMitra;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchAlamat(Request $request)
    {
        $query = $request->input('q', '');
        $results = DB::table('alamat_mitra')
            ->select('kota', 'kecamatan', 'provinsi', 'alamat')
            ->where('kota', 'LIKE', "%$query%")
            ->orWhere('kecamatan', 'LIKE', "%$query%")
            ->orWhere('provinsi', 'LIKE', "%$query%")
            ->orWhere('alamat', 'LIKE', "%$query%")
            ->distinct()
            ->take(10)
            ->get();

        $formattedResults = $results->map(function ($item) {
            return [
                'id' => $item->alamat,
                'text' => "{$item->alamat}, {$item->kota}, {$item->kecamatan}, {$item->provinsi}"
            ];
        });

        return response()->json($results);
    }

    public function search(Request $request)
    {
        // Reset session hanya jika bukan dari halaman detail (tanpa parameter id_unit)
// Reset session hanya jika bukan dari halaman detail
if (!$request->has('from_detail')) {
    $request->session()->forget('selected_units');
}
        $request->validate([
            'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
        ]);

        if ($request->tipe_rental === 'tanpa_sopir') {
            $request->validate([
                'lokasi' => 'required|string',
                'tanggal_mulai' => 'required|date',
                'waktu_mulai' => 'required',
                'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
                'waktu_selesai' => 'required',
            ]);
            $lokasi = $request->input('lokasi');
            $startDateTime = Carbon::parse($request->input('tanggal_mulai') . ' ' . $request->input('waktu_mulai'));
            $endDateTime = Carbon::parse($request->input('tanggal_selesai') . ' ' . $request->input('waktu_selesai'));
            $durasi = null;
        } else {
            $request->validate([
                'lokasi_sopir' => 'required|string',
                'tanggal_mulai_sopir' => 'required|date',
                'waktu_mulai_sopir' => 'required',
                'durasi' => 'required|integer|min:1',
            ]);
            $lokasi = $request->input('lokasi_sopir');
            $startDateTime = Carbon::parse($request->input('tanggal_mulai_sopir') . ' ' . $request->input('waktu_mulai_sopir'));
            $durasi = (int)$request->input('durasi');
            $endDateTime = ($durasi === 1)
                ? Carbon::parse($request->input('tanggal_mulai_sopir'))->setTime(23, 59)
                : Carbon::parse($request->input('tanggal_mulai_sopir'))->addDays($durasi - 1)->setTime(23, 59);
        }

        $driverFee = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_sopir')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 0;

       // Get selected units from session
       $selectedUnits = $request->session()->get('selected_units', []);
    // Query ketersediaan berdasarkan unit_kendaraan, excluding selected units
    $availableVehicles = DB::table('kendaraan')
    ->select(
        'kendaraan.*',
        'alamat_mitra.kota',
        'alamat_mitra.kecamatan',
        'alamat_mitra.provinsi',
        'mitra.nama_mitra',
        'mitra.foto_mitra',
        'unit_kendaraan.id_unit',
        'unit_kendaraan.plat_nomor'
    )
    ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
    ->join('unit_kendaraan', 'kendaraan.id_kendaraan', '=', 'unit_kendaraan.id_kendaraan')
    ->join('alamat_mitra', 'unit_kendaraan.id_alamat_mitra', '=', 'alamat_mitra.id_alamat')
    ->where('unit_kendaraan.status_unit_kendaraan', 'tersedia')
    ->whereNotIn('unit_kendaraan.id_unit', function ($query) use ($startDateTime, $endDateTime) {
        $query->select('id_unit')
            ->from('detail_pemesanan')
            ->where('tanggal_mulai', '<', $endDateTime)
            ->where('tanggal_kembali', '>', $startDateTime);
    })
    ->whereNotIn('unit_kendaraan.id_unit', $selectedUnits)
    ->where(function ($query) use ($lokasi) {
        $query->where('alamat_mitra.alamat', 'LIKE', "%$lokasi%")
              ->orWhere('alamat_mitra.kota', 'LIKE', "%$lokasi%")
              ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$lokasi%")
              ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$lokasi%");
    })
    ->get();
        
      $groupedVehicles = [];
    $allVehicles = [];
    $mitraPerVehicle = []; // Untuk menyimpan mitra unik per kendaraan

    foreach ($availableVehicles as $vehicle) {
        $allVehicles[] = $vehicle;
        $name = $vehicle->nama_kendaraan;
        
        // Tambahkan ID mitra ke array mitra unik untuk kendaraan ini
        if (!isset($mitraPerVehicle[$name])) {
            $mitraPerVehicle[$name] = [];
        }
        if (!in_array($vehicle->id_mitra, $mitraPerVehicle[$name])) {
            $mitraPerVehicle[$name][] = $vehicle->id_mitra;
        }

        if (!isset($groupedVehicles[$name]) || $vehicle->harga_sewa_perhari < $groupedVehicles[$name]->harga_sewa_perhari) {
            $groupedVehicles[$name] = $vehicle;
        }
    }

    // Update jumlah penyedia (mitra) untuk setiap kendaraan
    foreach ($groupedVehicles as $name => &$vehicle) {
        $vehicle->total_options = count($mitraPerVehicle[$name]);
    }

    // Kode untuk selected vehicle dan related vehicles...
    $selectedVehicle = null;
    $relatedVehicles = [];
    $groupedByMitra = [];

    if ($request->has('selected_vehicle')) {
        $selectedName = $request->input('selected_vehicle');
        
        // Group vehicles by mitra
        foreach ($allVehicles as $vehicle) {
            if ($vehicle->nama_kendaraan === $selectedName) {
                $mitraId = $vehicle->id_mitra;
                
                // Only add the first vehicle per mitra
                if (!isset($groupedByMitra[$mitraId])) {
                    $groupedByMitra[$mitraId] = $vehicle;
                    $relatedVehicles[] = $vehicle;
                }
            }
        }
        
        // Sort by price
        usort($relatedVehicles, function ($a, $b) {
            return $a->harga_sewa_perhari <=> $b->harga_sewa_perhari;
        });
    }   

    return view('search', [
        'groupedVehicles' => array_values($groupedVehicles),
        'allVehicles' => $allVehicles,
        'selectedVehicle' => $request->input('selected_vehicle') ?? null,
        'relatedVehicles' => $relatedVehicles,
        'searchParams' => [
            'tipe_rental' => $request->tipe_rental,
            'lokasi' => $lokasi,
            'tanggal_mulai' => $request->tipe_rental === 'tanpa_sopir' ? $request->input('tanggal_mulai') : $request->input('tanggal_mulai_sopir'),
            'waktu_mulai' => $request->tipe_rental === 'tanpa_sopir' ? $request->input('waktu_mulai') : $request->input('waktu_mulai_sopir'),
            'tanggal_selesai' => $request->tipe_rental === 'tanpa_sopir' ? $request->input('tanggal_selesai') : null,
            'waktu_selesai' => $endDateTime->format('H:i'),
            'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
            'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
            'durasi' => $durasi,
        ],
        'driver_fee' => $driverFee,
    ]);
    }

    
}