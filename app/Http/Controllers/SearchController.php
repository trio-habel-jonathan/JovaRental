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
        // Validate request
        $request->validate([
            'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
            'lokasi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'waktu_mulai' => 'required',
        ]);
        
        // Parse dates and times
        $tanggalMulai = $request->input('tanggal_mulai');
        $waktuMulai = $request->input('waktu_mulai');
        
        $startDateTime = Carbon::parse($tanggalMulai . ' ' . $waktuMulai);
        
        // For "tanpa_sopir" we need both start and end dates
        if ($request->input('tipe_rental') == 'tanpa_sopir') {
            $request->validate([
                'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
                'waktu_selesai' => 'required',
            ]);
            
            $tanggalSelesai = $request->input('tanggal_selesai');
            $waktuSelesai = $request->input('waktu_selesai');
            
            $endDateTime = Carbon::parse($tanggalSelesai . ' ' . $waktuSelesai);
        } 
        // For "dengan_sopir" we calculate end date based on duration
        else {
            $request->validate([
                'durasi' => 'required|integer|min:1',
            ]);
            
            $durasi = $request->input('durasi');
            $endDateTime = $startDateTime->copy()->addDays($durasi);
        }
        
        // Extract location information
        $lokasi = $request->input('lokasi');
        $locationQuery = $lokasi; // Don't split for simplicity
        
        // Find available vehicles
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
            ->whereNotIn('kendaraan.id_kendaraan', function($query) use ($startDateTime, $endDateTime) {
                $query->select('detail_pemesanan.id_kendaraan')
                    ->from('detail_pemesanan')
                    ->join('pemesanan', 'detail_pemesanan.id_pemesanan', '=', 'pemesanan.id_pemesanan')
                    ->where(function($q) use ($startDateTime, $endDateTime) {
                        $q->where(function($subq) use ($startDateTime, $endDateTime) {
                            $subq->where('pemesanan.tanggal_mulai', '<', $endDateTime)
                                ->where('pemesanan.tanggal_kembali', '>', $startDateTime);
                        });
                    })
                    ->where('pemesanan.status_pemesanan', '!=', 'canceled');
            })
            ->where(function($query) use ($locationQuery) {
                $query->where('alamat_mitra.kota', 'LIKE', "%$locationQuery%")
                    ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$locationQuery%")
                    ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$locationQuery%");
            })
            ->when($request->input('tipe_rental') == 'dengan_sopir', function($query) {
                // For "dengan_sopir", only include vehicles with driver capability
                return $query->where('kendaraan.tersedia_dengan_sopir', 1);
            })
            ->get();
        
        // Group vehicles by name and find lowest price for each
        $groupedVehicles = [];
        $allVehicles = [];
        
        foreach ($availableVehicles as $vehicle) {
            $allVehicles[] = $vehicle;
            
            // Use name as key for grouping
            $name = $vehicle->nama_kendaraan;
            
            if (!isset($groupedVehicles[$name]) || $vehicle->harga_sewa_perhari < $groupedVehicles[$name]->harga_sewa_perhari) {
                // Store vehicle with lowest price
                $vehicle->total_options = 1;
                $groupedVehicles[$name] = $vehicle;
            } else {
                // Increment counter for this vehicle name
                $groupedVehicles[$name]->total_options++;
            }
        }
        
        // Check for selected vehicle
        $selectedVehicle = null;
        $relatedVehicles = [];
        if ($request->has('selected_vehicle')) {
            $selectedName = $request->input('selected_vehicle');
            
            // Get vehicles with this name
            foreach ($allVehicles as $vehicle) {
                if ($vehicle->nama_kendaraan === $selectedName) {
                    $relatedVehicles[] = $vehicle;
                }
            }
            
            // Sort related vehicles by price
            usort($relatedVehicles, function($a, $b) {
                return $a->harga_sewa_perhari - $b->harga_sewa_perhari;
            });
        }
        
        // Pass search parameters and results to the view
        return view('search', [
            'groupedVehicles' => array_values($groupedVehicles),
            'allVehicles' => $allVehicles,
            'selectedVehicle' => $request->input('selected_vehicle') ?? null,
            'relatedVehicles' => $relatedVehicles,
            'searchParams' => [
                'tipe_rental' => $request->input('tipe_rental'),
                'lokasi' => $lokasi,
                'tanggal_mulai' => $tanggalMulai,
                'waktu_mulai' => $waktuMulai,
                'tanggal_selesai' => $request->input('tanggal_selesai') ?? null,
                'waktu_selesai' => $request->input('waktu_selesai') ?? null,
                'durasi' => $request->input('durasi') ?? null,
                'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
                'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
            ]
        ]);
    }

}

    





