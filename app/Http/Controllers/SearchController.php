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

        return response()->json($results);

        $formattedResults = $results->map(function ($item) {
            return [
                'id' => $item->kota,
                'text' => "{$item->kota}, {$item->kecamatan}, {$item->provinsi}"
            ];
        });
    }


    public function search(Request $request)
    {
        // Validasi input
        $request->validate([
            'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
            'lokasi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'waktu_mulai' => 'required',
        ]);
    
        $tipeRental = $request->input('tipe_rental');
        $lokasi = $request->input('lokasi');
    
        // Gabungkan tanggal dan waktu mulai
        $startDateTime = Carbon::parse($request->input('tanggal_mulai') . ' ' . $request->input('waktu_mulai'));
    
        // Hitung endDateTime sesuai tipe rental
        if ($tipeRental === 'tanpa_sopir') {
            $request->validate([
                'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
                'waktu_selesai' => 'required',
            ]);
            $endDateTime = Carbon::parse($request->input('tanggal_selesai') . ' ' . $request->input('waktu_selesai'));
        } else {
            $request->validate([
                'durasi' => 'required|integer|min:1',
            ]);
            $durasi = $request->input('durasi');
            $endDateTime = $startDateTime->copy()->addHours($durasi * 12); // 12 jam per hari dengan sopir
        }
    
        // Ambil kendaraan yang tidak digunakan pada range waktu tersebut (cek di detail_pemesanan!)
        $availableVehicles = DB::table('kendaraan')
            ->select(
                'kendaraan.*',
                'alamat_mitra.kota',
                'alamat_mitra.kecamatan',
                'alamat_mitra.provinsi',
                'mitra.nama_mitra',
                'mitra.foto_mitra'
            )
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->join('alamat_mitra', 'mitra.id_mitra', '=', 'alamat_mitra.id_mitra')
            ->whereNotIn('kendaraan.id_kendaraan', function ($query) use ($startDateTime, $endDateTime) {
                $query->select('id_kendaraan')
                    ->from('detail_pemesanan')
                    ->where(function ($q) use ($startDateTime, $endDateTime) {
                        $q->where('tanggal_mulai', '<', $endDateTime)
                          ->where('tanggal_kembali', '>', $startDateTime);
                    });
            })
            ->where(function ($query) use ($lokasi) {
                $query->where('alamat_mitra.kota', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$lokasi%");
            })
            ->when($tipeRental === 'dengan_sopir', function ($query) {
                return $query->where('kendaraan.tersedia_dengan_sopir', 1);
            })
            ->get();
    
        // Group berdasarkan nama kendaraan untuk tampilkan harga termurah
        $groupedVehicles = [];
        $allVehicles = [];
    
        foreach ($availableVehicles as $vehicle) {
            $allVehicles[] = $vehicle;
            $name = $vehicle->nama_kendaraan;
    
            if (!isset($groupedVehicles[$name]) || $vehicle->harga_sewa_perhari < $groupedVehicles[$name]->harga_sewa_perhari) {
                $vehicle->total_options = 1;
                $groupedVehicles[$name] = $vehicle;
            } else {
                $groupedVehicles[$name]->total_options++;
            }
        }
    
        // Kalau ada kendaraan terpilih
        $selectedVehicle = null;
        $relatedVehicles = [];
        if ($request->has('selected_vehicle')) {
            $selectedName = $request->input('selected_vehicle');
            foreach ($allVehicles as $vehicle) {
                if ($vehicle->nama_kendaraan === $selectedName) {
                    $relatedVehicles[] = $vehicle;
                }
            }
            usort($relatedVehicles, fn($a, $b) => $a->harga_sewa_perhari <=> $b->harga_sewa_perhari);
        }
    
        // Kirim ke view
        return view('search', [
            'groupedVehicles' => array_values($groupedVehicles),
            'allVehicles' => $allVehicles,
            'selectedVehicle' => $request->input('selected_vehicle') ?? null,
            'relatedVehicles' => $relatedVehicles,
            'searchParams' => [
                'tipe_rental' => $tipeRental,
                'lokasi' => $lokasi,
                'tanggal_mulai' => $request->input('tanggal_mulai'),
                'waktu_mulai' => $request->input('waktu_mulai'),
                'tanggal_selesai' => $request->input('tanggal_selesai') ?? null,
                'waktu_selesai' => $request->input('waktu_selesai') ?? null,
                'durasi' => $request->input('durasi') ?? null,
                'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
                'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
            ]
        ]);
    }
    

}

    





