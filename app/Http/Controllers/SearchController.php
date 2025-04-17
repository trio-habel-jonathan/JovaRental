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
    
        // Format results to include the full address
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
        // Validasi tipe rental harus ada dua pilihan: tanpa_sopir dan dengan_sopir
        $request->validate([
            'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
        ]);
        
        // Jika rental tanpa sopir
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
            $durasi = null; // Set durasi to null for tanpa_sopir
        }
        // Rental dengan sopir
        else {
            $request->validate([
                'lokasi_sopir' => 'required|string',
                'tanggal_mulai_sopir' => 'required|date',
                'waktu_mulai_sopir' => 'required',
                'durasi' => 'required|integer|min:1',
            ]);
            $lokasi = $request->input('lokasi_sopir');
            $startDateTime = Carbon::parse($request->input('tanggal_mulai_sopir') . ' ' . $request->input('waktu_mulai_sopir'));
            $durasi = (int)$request->input('durasi');
            
            // Aturan: rental dengan sopir berakhir pada pukul 23:59
            if ($durasi === 1) {
                $endDateTime = Carbon::parse($request->input('tanggal_mulai_sopir'))->setTime(23, 59);
            } else {
                $endDateTime = Carbon::parse($request->input('tanggal_mulai_sopir'))
                    ->addDays($durasi - 1)
                    ->setTime(23, 59);
            }
        }
    
        // Ambil biaya sopir dari tabel fee_setting
        $driverFee = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_sopir')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 0;
    
        // Query pencarian kendaraan yang tidak dipesan di rentang waktu
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
                $query->where('alamat_mitra.alamat', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat_mitra.kota', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$lokasi%")
                      ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$lokasi%");
            })
            ->get();
    
        // Proses grouping kendaraan agar menampilkan penyedia dengan harga sewa paling rendah
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
    
        // Ambil kendaraan yang dipilih (jika ada)
        $selectedVehicle = null;
        $relatedVehicles = [];
    
        if ($request->has('selected_vehicle')) {
            $selectedName = $request->input('selected_vehicle');
            foreach ($allVehicles as $vehicle) {
                if ($vehicle->nama_kendaraan === $selectedName) {
                    $relatedVehicles[] = $vehicle;
                }
            }
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
                'tanggal_mulai' => $request->tipe_rental === 'tanpa_sopir'
                    ? $request->input('tanggal_mulai')
                    : $request->input('tanggal_mulai_sopir'),
                'waktu_mulai' => $request->tipe_rental === 'tanpa_sopir'
                    ? $request->input('waktu_mulai')
                    : $request->input('waktu_mulai_sopir'),
                'tanggal_selesai' => $request->tipe_rental === 'tanpa_sopir'
                    ? $request->input('tanggal_selesai')
                    : null,
                'waktu_selesai' => $endDateTime->format('H:i'),
                'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
                'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
                'durasi' => $durasi, // Add durasi to searchParams
            ],
            'driver_fee' => $driverFee,
        ]);
    }
}
