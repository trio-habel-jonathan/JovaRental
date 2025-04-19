<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\AlamatMitra;
use App\Models\Mitra;
use App\Models\EntitasPenyewa;
use App\Models\User;
use App\Models\UnitKendaraan;
use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function detail(Request $request)
    {
        // No changes needed here; the existing code is fine.
        $id_unit = $request->query('id_unit');
        $tipe_rental = $request->query('tipe_rental');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $lokasi = $request->query('lokasi');

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

        $selectedUnits = $request->session()->get('selected_units', []);

        if (!isset($selectedUnits[$id_unit])) {
            $selectedUnits[$id_unit] = [
                'id_unit' => $id_unit,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ];
            $request->session()->put('selected_units', $selectedUnits);
        }

        $unitIds = array_keys($selectedUnits);

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

        $units = DB::table('unit_kendaraan')
            ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->whereIn('unit_kendaraan.id_unit', $unitIds)
            ->select('unit_kendaraan.*', 'kendaraan.*', 'mitra.nama_mitra', 'mitra.foto_mitra')
            ->get();

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

        foreach ($units as $unit) {
            if (isset($selectedUnits[$unit->id_unit])) {
                $unit->start_date = $selectedUnits[$unit->id_unit]['start_date'];
                $unit->end_date = $selectedUnits[$unit->id_unit]['end_date'];
                try {
                    $unit->startDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->start_date);
                    $unit->endDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->end_date);
                } catch (\Exception $e) {
                    $unit->startDateTime = Carbon::now();
                    $unit->endDateTime = Carbon::now()->addDay();
                }
            } else {
                $unit->startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
                $unit->endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);
            }
        }

        $selectedMitraId = $units->first()->id_mitra;
        $request->session()->put('selected_mitra_id', $selectedMitraId);

        $alamatMitra = AlamatMitra::where('id_mitra', $selectedMitraId)
            ->where(function ($query) use ($lokasi) {
                $query->where('kota', 'LIKE', "%$lokasi%")
                    ->orWhere('kecamatan', 'LIKE', "%$lokasi%")
                    ->orWhere('provinsi', 'LIKE', "%$lokasi%")
                    ->orWhere('alamat', 'LIKE', "%$lokasi%");
            })
            ->get();

        $user = Auth::user();
        $entitasPenyewa = EntitasPenyewa::where('id_user', $user->id_user)->first();

        return view('detail', compact('units', 'tipe_rental', 'lokasi', 'alamatMitra', 'entitasPenyewa', 'user'));
    }

    public function review(Request $request, $id_units = null)
    {
        $id_units = $id_units ? explode(',', $id_units) : $request->input('id_units', []);
    if (empty($id_units) || !$request->session()->has('selected_units')) {
        return redirect()->route('search')->with('error', 'Pilih kendaraan dulu.');
    }
    
        // Ambil data dari form
        $id_units = $request->input('id_units', []);
        $tanggal_mulai = $request->input('tanggal_mulai', []);
        $tanggal_kembali = $request->input('tanggal_kembali', []);
        $lokasi_pengambilan = $request->input('lokasi_pengambilan', []);
        $alamat_kantor_pengambilan = $request->input('alamat_kantor_pengambilan', []);
        $lokasi_pengambilan_lain = $request->input('lokasi_pengambilan_lain', []);
        $lokasi_pengembalian = $request->input('lokasi_pengembalian', []);
        $alamat_kantor_pengembalian = $request->input('alamat_kantor_pengembalian', []);
        $lokasi_pengembalian_lain = $request->input('lokasi_pengembalian_lain', []);
        $driver_nama = $request->input('driver_nama', []);
        $driver_telepon = $request->input('driver_telepon', []);
        $driver_email = $request->input('driver_email', []); // New: Driver email
        $tipe_rental = $request->input('tipe_rental');
        $perwakilan_penyewa = $request->input('perwakilan_penyewa');
        $kontak_perwakilan = $request->input('kontak_perwakilan');

        // Ambil data entitas penyewa untuk validasi tipe entitas
        $user = Auth::user();
        $entitasPenyewa = EntitasPenyewa::where('id_user', $user->id_user)->first();

        // Validasi input
        $validationRules = [
            'id_units' => 'required|array',
            'id_units.*' => 'exists:unit_kendaraan,id_unit',
            'tanggal_mulai.*' => 'required|date',
            'tanggal_kembali.*' => 'required|date|after_or_equal:tanggal_mulai.*',
            'lokasi_pengambilan.*' => 'required|in:kantor_rental,lokasi_lain',
            'lokasi_pengembalian.*' => 'required|in:kantor_rental,lokasi_lain',
            'alamat_kantor_pengambilan.*' => 'required_if:lokasi_pengambilan.*,kantor_rental|exists:alamat_mitra,id_alamat',
            'lokasi_pengambilan_lain.*' => 'required_if:lokasi_pengambilan.*,lokasi_lain|string|nullable',
            'alamat_kantor_pengembalian.*' => 'required_if:lokasi_pengembalian.*,kantor_rental|exists:alamat_mitra,id_alamat',
            'lokasi_pengembalian_lain.*' => 'required_if:lokasi_pengembalian.*,lokasi_lain|string|nullable',
            'driver_nama.*' => 'required_if:tipe_rental,tanpa_sopir|string|nullable',
            'driver_telepon.*' => 'required_if:tipe_rental,tanpa_sopir|regex:/^[0-9]{9,12}$/|nullable',
            'tipe_rental' => 'required|in:dengan_sopir,tanpa_sopir',
        ];

        // Tambahkan validasi untuk perwakilan jika tipe entitas adalah perusahaan
        if ($entitasPenyewa && $entitasPenyewa->tipe_entitas === 'perusahaan') {
            $validationRules['perwakilan_penyewa'] = 'required|string|max:255';
            $validationRules['kontak_perwakilan'] = 'required|regex:/^[0-9]{9,12}$/';
        }

        $request->validate($validationRules);

        // Ambil detail kendaraan
        $units = DB::table('unit_kendaraan')
            ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->whereIn('unit_kendaraan.id_unit', $id_units)
            ->select('unit_kendaraan.*', 'kendaraan.*', 'mitra.nama_mitra', 'mitra.foto_mitra')
            ->get();

        // Siapkan data untuk view
        $rentalDetails = [];
        foreach ($units as $unit) {
            $startDateTime = Carbon::parse($tanggal_mulai[$unit->id_unit]);
            $endDateTime = Carbon::parse($tanggal_kembali[$unit->id_unit]);
            $duration = $startDateTime->diffInDays($endDateTime) + 1;

            // Hitung biaya
            $driverFee = $tipe_rental === 'dengan_sopir'
                ? (DB::table('fee_setting')
                    ->where('nama_fee', 'biaya_sopir')
                    ->where('is_active', 1)
                    ->value('nilai_fee') ?? 0)
                : 0;
            $unitCost = $tipe_rental === 'tanpa_sopir'
                ? $unit->harga_sewa_perhari * $duration
                : ($unit->harga_sewa_perhari + $driverFee) * $duration;

            $rentalDetails[$unit->id_unit] = [
                'unit' => $unit,
                'startDateTime' => $startDateTime,
                'endDateTime' => $endDateTime,
                'duration' => $duration,
                'unitCost' => $unitCost,
                'driverFee' => $driverFee,
                'lokasi_pengambilan' => $lokasi_pengambilan[$unit->id_unit] === 'kantor_rental'
                    ? AlamatMitra::find($alamat_kantor_pengambilan[$unit->id_unit])
                    : $lokasi_pengambilan_lain[$unit->id_unit],
                'lokasi_pengembalian' => $lokasi_pengembalian[$unit->id_unit] === 'kantor_rental'
                    ? AlamatMitra::find($alamat_kantor_pengembalian[$unit->id_unit])
                    : $lokasi_pengembalian_lain[$unit->id_unit],
                'driver_nama' => $tipe_rental === 'tanpa_sopir' ? ($driver_nama[$unit->id_unit] ?? null) : null,
                'driver_telepon' => $tipe_rental === 'tanpa_sopir' ? ($driver_telepon[$unit->id_unit] ?? null) : null,
                'driver_email' => $tipe_rental === 'tanpa_sopir' ? ($driver_email[$unit->id_unit] ?? null) : null, // New: Driver email
                'perwakilan_penyewa' => $entitasPenyewa->tipe_entitas === 'perusahaan' ? ($perwakilan_penyewa ?? null) : null,
                'kontak_perwakilan' => $entitasPenyewa->tipe_entitas === 'perusahaan' ? ($kontak_perwakilan ?? null) : null,
            ];
        }

        // Simpan data ke session untuk langkah berikutnya (misalnya, pembayaran)
        $request->session()->put('rental_details', $rentalDetails);

        // Kirim data entitas penyewa dan user ke view
        return view('review', compact('rentalDetails', 'tipe_rental', 'entitasPenyewa', 'user'));
    }

}