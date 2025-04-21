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
    // public function search(Request $request)
    // {
    //     // Log parameter yang diterima untuk debugging
    //     \Log::info('Search request parameters:', $request->all());

    //     // Reset session hanya jika bukan dari halaman detail dan bukan tambah unit
    //     if (!$request->has('from_detail')) {
    //         $request->session()->forget(['selected_units', 'selected_mitra_id']);
    //     }

    //     // Validasi tipe rental untuk unit baru
    //     $request->validate([
    //         'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
    //     ]);

    //     // Inisialisasi variabel
    //     $lokasi = null;
    //     $startDateTime = null;
    //     $endDateTime = null;
    //     $durasi = null;
    //     $newTipeRental = $request->tipe_rental; // Tipe rental untuk unit baru

    //     // Validasi dan pengolahan parameter berdasarkan tipe rental untuk unit baru
    //     if ($newTipeRental === 'tanpa_sopir') {
    //         $request->validate([
    //             'lokasi' => 'required|string',
    //             'tanggal_mulai' => 'required|date',
    //             'waktu_mulai' => 'required',
    //             'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
    //             'waktu_selesai' => 'required',
    //         ]);

    //         $lokasi = $request->input('lokasi');
    //         $startDateTime = Carbon::parse($request->input('tanggal_mulai') . ' ' . $request->input('waktu_mulai'));
    //         $endDateTime = Carbon::parse($request->input('tanggal_selesai') . ' ' . $request->input('waktu_selesai'));
    //     } else {
    //         $request->validate([
    //             'lokasi_sopir' => 'required|string',
    //             'tanggal_mulai_sopir' => 'required|date',
    //             'waktu_mulai_sopir' => 'required',
    //             'durasi' => 'required|numeric|min:1',
    //         ]);

    //         $lokasi = $request->input('lokasi_sopir');
    //         $startDateTime = Carbon::parse($request->input('tanggal_mulai_sopir') . ' ' . $request->input('waktu_mulai_sopir'));
    //         $durasi = (int) ceil($request->input('durasi'));
    //         $endDateTime = ($durasi === 1)
    //             ? Carbon::parse($request->input('tanggal_mulai_sopir'))->setTime(23, 59)
    //             : Carbon::parse($request->input('tanggal_mulai_sopir'))->addDays($durasi - 1)->setTime(23, 59);
    //     }

    //     // Ambil biaya sopir
    //     $driverFee = DB::table('fee_setting')
    //         ->where('nama_fee', 'biaya_sopir')
    //         ->where('is_active', 1)
    //         ->value('nilai_fee') ?? 0;

    //     // Ambil unit yang sudah dipilih dari sesi
    //     $selectedUnits = $request->session()->get('selected_units', []);
    //     $selectedUnitIds = array_keys($selectedUnits);

    //     // Ambil ID mitra yang sudah dipilih dari sesi
    //     $selectedMitraId = $request->session()->get('selected_mitra_id');
    //     \Log::info('selected_mitra_id in session:', ['selected_mitra_id' => $selectedMitraId]);

    //     // Query ketersediaan kendaraan
    //     $query = DB::table('kendaraan')
    //         ->select(
    //             'kendaraan.*',
    //             'alamat_mitra.kota',
    //             'alamat_mitra.kecamatan',
    //             'alamat_mitra.provinsi',
    //             'mitra.nama_mitra',
    //             'mitra.foto_mitra',
    //             'unit_kendaraan.id_unit',
    //             'unit_kendaraan.plat_nomor'
    //         )
    //         ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
    //         ->join('unit_kendaraan', 'kendaraan.id_kendaraan', '=', 'unit_kendaraan.id_kendaraan')
    //         ->join('alamat_mitra', 'unit_kendaraan.id_alamat_mitra', '=', 'alamat_mitra.id_alamat')
    //         ->where('unit_kendaraan.status_unit_kendaraan', 'tersedia')
    //         ->whereNotIn('unit_kendaraan.id_unit', function ($query) use ($startDateTime, $endDateTime) {
    //             $query->select('detail_pemesanan.id_unit')
    //                 ->from('detail_pemesanan')
    //                 ->join('pemesanan', 'detail_pemesanan.id_pemesanan', '=', 'pemesanan.id_pemesanan')
    //                 ->where('detail_pemesanan.tanggal_mulai', '<', $endDateTime)
    //                 ->where('detail_pemesanan.tanggal_kembali', '>', $startDateTime)
    //                 ->whereNotIn('pemesanan.status_pemesanan', ['pending', 'canceled']);
    //         })
    //         ->whereNotIn('unit_kendaraan.id_unit', $selectedUnitIds)
    //         ->where(function ($query) use ($lokasi) {
    //             $query->where('alamat_mitra.alamat', 'LIKE', "%$lokasi%")
    //                 ->orWhere('alamat_mitra.kota', 'LIKE', "%$lokasi%")
    //                 ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$lokasi%")
    //                 ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$lokasi%");
    //         });

    //     // Jika from_detail ada dan selected_mitra_id tersedia, filter berdasarkan id_mitra
    //     if ($request->has('from_detail') && $selectedMitraId) {
    //         $query->where('kendaraan.id_mitra', $selectedMitraId);
    //     }

    //     $availableVehicles = $query->get();

    //     // Kelompokkan kendaraan berdasarkan nama
    //     $groupedVehicles = [];
    //     $allVehicles = [];
    //     $mitraPerVehicle = [];

    //     foreach ($availableVehicles as $vehicle) {
    //         $allVehicles[] = $vehicle;
    //         $name = $vehicle->nama_kendaraan;

    //         // Tambahkan ID mitra ke array mitra unik untuk kendaraan ini
    //         if (!isset($mitraPerVehicle[$name])) {
    //             $mitraPerVehicle[$name] = [];
    //         }
    //         if (!in_array($vehicle->id_mitra, $mitraPerVehicle[$name])) {
    //             $mitraPerVehicle[$name][] = $vehicle->id_mitra;
    //         }

    //         // Simpan kendaraan dengan harga terendah untuk setiap nama kendaraan
    //         if (!isset($groupedVehicles[$name]) || $vehicle->harga_sewa_perhari < $groupedVehicles[$name]->harga_sewa_perhari) {
    //             $groupedVehicles[$name] = $vehicle;
    //         }
    //     }

    //     // Update jumlah penyedia (mitra) untuk setiap kendaraan
    //     foreach ($groupedVehicles as $name => &$vehicle) {
    //         $vehicle->total_options = count($mitraPerVehicle[$name]);
    //     }

    //     // Logika untuk kendaraan yang dipilih dan kendaraan terkait
    //     $selectedVehicle = null;
    //     $relatedVehicles = [];
    //     $groupedByMitra = [];

    //     if ($request->has('selected_vehicle')) {
    //         $selectedName = $request->input('selected_vehicle');

    //         // Kelompokkan kendaraan berdasarkan mitra
    //         foreach ($allVehicles as $vehicle) {
    //             if ($vehicle->nama_kendaraan === $selectedName) {
    //                 $mitraId = $vehicle->id_mitra;

    //                 // Hanya tambahkan kendaraan pertama per mitra
    //                 if (!isset($groupedByMitra[$mitraId])) {
    //                     $groupedByMitra[$mitraId] = $vehicle;
    //                     $relatedVehicles[] = $vehicle;
    //                 }
    //             }
    //         }

    //         // Urutkan berdasarkan harga
    //         usort($relatedVehicles, function ($a, $b) {
    //             return $a->harga_sewa_perhari <=> $b->harga_sewa_perhari;
    //         });
    //     }

    //     // Siapkan parameter untuk view
    //     $searchParams = [
    //         'tipe_rental' => $newTipeRental, // Tipe rental untuk pencarian baru
    //         'lokasi' => $lokasi,
    //         'tanggal_mulai' => $newTipeRental === 'tanpa_sopir' ? $request->input('tanggal_mulai') : $request->input('tanggal_mulai_sopir'),
    //         'waktu_mulai' => $newTipeRental === 'tanpa_sopir' ? $request->input('waktu_mulai') : $request->input('waktu_mulai_sopir'),
    //         'tanggal_selesai' => $newTipeRental === 'tanpa_sopir' ? $request->input('tanggal_selesai') : null,
    //         'waktu_selesai' => $endDateTime->format('H:i'),
    //         'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
    //         'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
    //         'durasi' => $durasi,
    //     ];

    //     return view('search', [
    //         'groupedVehicles' => array_values($groupedVehicles),
    //         'allVehicles' => $allVehicles,
    //         'selectedVehicle' => $request->input('selected_vehicle') ?? null,
    //         'relatedVehicles' => $relatedVehicles,
    //         'searchParams' => $searchParams,
    //         'driver_fee' => $driverFee,
    //         'selected_units' => $selectedUnits, // Kirim selected_units ke view
    //     ]);
    // }

    public function search(Request $request)
    {
        \Log::info('Search request parameters:', $request->all());

        if (!$request->has('from_detail')) {
            $request->session()->forget(['selected_units', 'selected_mitra_id']);
        }

        $request->validate([
            'tipe_rental' => 'required|in:tanpa_sopir,dengan_sopir',
        ]);

        $lokasi = null;
        $startDateTime = null;
        $endDateTime = null;
        $durasi = null;
        $rentalDays = 0;
        $extraHours = 0;
        $newTipeRental = $request->tipe_rental;

        // Ambil biaya dari fee_setting
        $driverFee = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_sopir')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 0;
        $extraHourFee = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_jam_ekstra')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 0;

        if ($newTipeRental === 'tanpa_sopir') {
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

            // Hitung total jam sewa
            $totalHours = $startDateTime->diffInHours($endDateTime);
            // Hitung jumlah hari (24 jam per hari)
            $rentalDays = max(1, floor($totalHours / 24));
            $extraHours = $totalHours % 24;
            // Jika ada sisa jam dan total jam > 24, hitung ekstra
            if ($extraHours > 0 && $totalHours > 24) {
                $extraHours = $totalHours % 24;
            } elseif ($totalHours <= 24) {
                $extraHours = 0;
            }
        } else {
            $request->validate([
                'lokasi_sopir' => 'required|string',
                'tanggal_mulai_sopir' => 'required|date',
                'waktu_mulai_sopir' => 'required',
                'durasi' => 'required|numeric|min:1',
            ]);

            $lokasi = $request->input('lokasi_sopir');
            $startDateTime = Carbon::parse($request->input('tanggal_mulai_sopir') . ' ' . $request->input('waktu_mulai_sopir'));
            $durasi = (int) ceil($request->input('durasi'));
            // End time = start time + (durasi * 12 jam)
            $endDateTime = $startDateTime->copy()->addHours($durasi * 12);

            // Hitung total jam sewa
            $totalHours = $startDateTime->diffInHours($endDateTime);
            // Hitung jumlah hari (12 jam per hari)
            $rentalDays = floor($totalHours / 12);
            $extraHours = $totalHours % 12;
            // Pastikan minimal 1 hari
            $rentalDays = max(1, $rentalDays);
        }

        $selectedUnits = $request->session()->get('selected_units', []);
        $selectedUnitIds = array_keys($selectedUnits);
        $selectedMitraId = $request->session()->get('selected_mitra_id');
        \Log::info('selected_mitra_id in session:', ['selected_mitra_id' => $selectedMitraId]);

        $query = DB::table('kendaraan')
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
                $query->select('detail_pemesanan.id_unit')
                    ->from('detail_pemesanan')
                    ->join('pemesanan', 'detail_pemesanan.id_pemesanan', '=', 'pemesanan.id_pemesanan')
                    ->where('detail_pemesanan.tanggal_mulai', '<', $endDateTime)
                    ->where('detail_pemesanan.tanggal_kembali', '>', $startDateTime)
                    ->whereNotIn('pemesanan.status_pemesanan', ['pending', 'canceled']);
            })
            ->whereNotIn('unit_kendaraan.id_unit', $selectedUnitIds)
            ->where(function ($query) use ($lokasi) {
                $query->where('alamat_mitra.alamat', 'LIKE', "%$lokasi%")
                    ->orWhere('alamat_mitra.kota', 'LIKE', "%$lokasi%")
                    ->orWhere('alamat_mitra.kecamatan', 'LIKE', "%$lokasi%")
                    ->orWhere('alamat_mitra.provinsi', 'LIKE', "%$lokasi%");
            });

        if ($request->has('from_detail') && $selectedMitraId) {
            $query->where('kendaraan.id_mitra', $selectedMitraId);
        }

        $availableVehicles = $query->get();

        $groupedVehicles = [];
        $allVehicles = [];
        $mitraPerVehicle = [];

        foreach ($availableVehicles as $vehicle) {
            $allVehicles[] = $vehicle;
            $name = $vehicle->nama_kendaraan;

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

        foreach ($groupedVehicles as $name => &$vehicle) {
            $vehicle->total_options = count($mitraPerVehicle[$name]);
        }

        $selectedVehicle = null;
        $relatedVehicles = [];
        $groupedByMitra = [];

        if ($request->has('selected_vehicle')) {
            $selectedName = $request->input('selected_vehicle');

            foreach ($allVehicles as $vehicle) {
                if ($vehicle->nama_kendaraan === $selectedName) {
                    $mitraId = $vehicle->id_mitra;

                    if (!isset($groupedByMitra[$mitraId])) {
                        $groupedByMitra[$mitraId] = $vehicle;
                        $relatedVehicles[] = $vehicle;
                    }
                }
            }

            usort($relatedVehicles, function ($a, $b) {
                return $a->harga_sewa_perhari <=> $b->harga_sewa_perhari;
            });
        }

        $searchParams = [
            'tipe_rental' => $newTipeRental,
            'lokasi' => $lokasi,
            'tanggal_mulai' => $newTipeRental === 'tanpa_sopir' ? $request->input('tanggal_mulai') : $request->input('tanggal_mulai_sopir'),
            'waktu_mulai' => $newTipeRental === 'tanpa_sopir' ? $request->input('waktu_mulai') : $request->input('waktu_mulai_sopir'),
            'tanggal_selesai' => $newTipeRental === 'tanpa_sopir' ? $request->input('tanggal_selesai') : null,
            'waktu_selesai' => $endDateTime->format('H:i'),
            'start_date_formatted' => $startDateTime->format('d M Y, H:i'),
            'end_date_formatted' => $endDateTime->format('d M Y, H:i'),
            'durasi' => $durasi,
            'rentalDays' => $rentalDays,
            'extraHours' => $extraHours,
            'extraHourFee' => $extraHourFee,
        ];

        return view('search', [
            'groupedVehicles' => array_values($groupedVehicles),
            'allVehicles' => $allVehicles,
            'selectedVehicle' => $request->input('selected_vehicle') ?? null,
            'relatedVehicles' => $relatedVehicles,
            'searchParams' => $searchParams,
            'driver_fee' => $driverFee,
            'selected_units' => $selectedUnits,
        ]);
    }

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
}