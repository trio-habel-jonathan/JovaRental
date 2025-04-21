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
use App\Models\PengemudiPemesanan;
use App\Models\MetodePembayaranPlatform;
use App\Models\Pembayaran;
use App\Models\Sopir;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PemesananController extends Controller
{
    public function detail(Request $request)
    {
        $id_unit = $request->query('id_unit');
        $tipe_rental = $request->query('tipe_rental');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $lokasi = $request->query('lokasi');

        // Validasi parameter
        if (!$id_unit || !$tipe_rental || !$start_date || !$end_date || !$lokasi) {
            \Log::error('Missing required query parameters', $request->query());
            return redirect()->route('search')->with(['type' => 'error', 'Parameter tidak lengkap.']);
        }

        // Validasi format tanggal
        try {
            $startDateTime = Carbon::createFromFormat('d M Y, H:i', $start_date);
            $endDateTime = Carbon::createFromFormat('d M Y, H:i', $end_date);
        } catch (\Exception $e) {
            \Log::error('Invalid date format: ' . $e->getMessage(), ['start_date' => $start_date, 'end_date' => $end_date]);
            return redirect()->route('search')->with(['type' => 'error', 'Format tanggal tidak valid.']);
        }

        if (!$id_unit) {
            return redirect()->route('search', [
                'tipe_rental' => $tipe_rental,
                'lokasi' => $lokasi,
                'tanggal_mulai' => $startDateTime->format('Y-m-d'),
                'waktu_mulai' => $startDateTime->format('H:i'),
                'tanggal_selesai' => $endDateTime->format('Y-m-d'),
                'waktu_selesai' => $endDateTime->format('H:i'),
            ])->with(['type' => 'error', 'Kendaraan tidak valid.']);
        }

        $selectedUnits = $request->session()->get('selected_units', []);

        // Simpan tipe_rental per unit di session
        if (!isset($selectedUnits[$id_unit])) {
            $selectedUnits[$id_unit] = [
                'id_unit' => $id_unit,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'tipe_rental' => $tipe_rental, // Simpan tipe_rental untuk unit ini
            ];
            $request->session()->put('selected_units', $selectedUnits);
        }

        $unitIds = array_keys($selectedUnits);

        if (empty($unitIds)) {
            return redirect()->route('search', [
                'tipe_rental' => $tipe_rental,
                'lokasi' => $lokasi,
                'tanggal_mulai' => $startDateTime->format('Y-m-d'),
                'waktu_mulai' => $startDateTime->format('H:i'),
                'tanggal_selesai' => $endDateTime->format('Y-m-d'),
                'waktu_selesai' => $endDateTime->format('H:i'),
            ])->with(['type' => 'error', 'message' => 'Tidak ada kendaraan yang dipilih.']);
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
                'tanggal_mulai' => $startDateTime->format('Y-m-d'),
                'waktu_mulai' => $startDateTime->format('H:i'),
                'tanggal_selesai' => $endDateTime->format('Y-m-d'),
                'waktu_selesai' => $endDateTime->format('H:i'),
            ])->with(['type' => 'error', 'message' => 'Tidak ada kendaraan yang dipilih.']);
        }

        foreach ($units as $unit) {
            if (isset($selectedUnits[$unit->id_unit])) {
                $unit->start_date = $selectedUnits[$unit->id_unit]['start_date'];
                $unit->end_date = $selectedUnits[$unit->id_unit]['end_date'];
                $unit->tipe_rental = $selectedUnits[$unit->id_unit]['tipe_rental']; // Tambahkan tipe_rental ke unit
                try {
                    $unit->startDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->start_date);
                    $unit->endDateTime = Carbon::createFromFormat('d M Y, H:i', $unit->end_date);
                } catch (\Exception $e) {
                    \Log::error('Failed to parse unit date: ' . $e->getMessage(), ['unit_id' => $unit->id_unit]);
                    $unit->startDateTime = Carbon::now();
                    $unit->endDateTime = Carbon::now()->addDay();
                }
            } else {
                $unit->startDateTime = $startDateTime;
                $unit->endDateTime = $endDateTime;
                $unit->tipe_rental = $tipe_rental;
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

        return view('detail', compact('units', 'lokasi', 'alamatMitra', 'entitasPenyewa', 'user'));
    }

    private function hitungJarak($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Radius bumi dalam km
        $latFrom = deg2rad($lat1);
        $lonFrom = deg2rad($lon1);
        $latTo = deg2rad($lat2);
        $lonTo = deg2rad($lon2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return round($angle * $earthRadius, 2); // Bulatkan ke 2 desimal
    }

    public function processDetail(Request $request)
    {
        \Log::info('Input processDetail:', $request->all());

        // Ambil data dari form
        $id_units = $request->input('id_units', []);
        $tanggal_mulai = $request->input('tanggal_mulai', []);
        $tanggal_kembali = $request->input('tanggal_kembali', []);
        $lokasi_pengambilan = $request->input('lokasi_pengambilan', []);
        $alamat_kantor_pengambilan = $request->input('alamat_kantor_pengambilan', []);
        $lokasi_pengambilan_lain = $request->input('lokasi_pengambilan_lain', []);
        $lat_pengambilan = $request->input('lat_pengambilan', []);
        $long_pengambilan = $request->input('long_pengambilan', []);
        $lokasi_pengembalian = $request->input('lokasi_pengembalian', []);
        $alamat_kantor_pengembalian = $request->input('alamat_kantor_pengembalian', []);
        $lokasi_pengembalian_lain = $request->input('lokasi_pengembalian_lain', []);
        $lat_pengembalian = $request->input('lat_pengembalian', []);
        $long_pengembalian = $request->input('long_pengembalian', []);
        $driver_nama = $request->input('driver_nama', []);
        $driver_telepon = $request->input('driver_telepon', []);
        $tipe_rental = $request->input('tipe_rental', []);
        $perwakilan_penyewa = $request->input('perwakilan_penyewa');
        $kontak_perwakilan = $request->input('kontak_perwakilan');

        // Ambil data entitas penyewa
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
            'lat_pengambilan.*' => 'required_if:lokasi_pengambilan.*,lokasi_lain|numeric|nullable',
            'long_pengambilan.*' => 'required_if:lokasi_pengambilan.*,lokasi_lain|numeric|nullable',
            'alamat_kantor_pengembalian.*' => 'required_if:lokasi_pengembalian.*,kantor_rental|exists:alamat_mitra,id_alamat',
            'lokasi_pengembalian_lain.*' => 'required_if:lokasi_pengembalian.*,lokasi_lain|string|nullable',
            'lat_pengembalian.*' => 'required_if:lokasi_pengembalian.*,lokasi_lain|numeric|nullable',
            'long_pengembalian.*' => 'required_if:lokasi_pengembalian.*,lokasi_lain|numeric|nullable',
            'tipe_rental.*' => 'required|in:dengan_sopir,tanpa_sopir',
        ];

        foreach ($id_units as $id_unit) {
            if (isset($tipe_rental[$id_unit]) && $tipe_rental[$id_unit] === 'tanpa_sopir') {
                $validationRules["driver_nama.$id_unit"] = 'required|string';
                $validationRules["driver_telepon.$id_unit"] = 'required|regex:/^[0-9]{9,12}$/';
            } else {
                $validationRules["driver_nama.$id_unit"] = 'nullable|string';
                $validationRules["driver_telepon.$id_unit"] = 'nullable|regex:/^[0-9]{9,12}$/';
            }
        }

        if ($entitasPenyewa && $entitasPenyewa->tipe_entitas === 'perusahaan') {
            $validationRules['perwakilan_penyewa'] = 'required|string|max:255';
            $validationRules['kontak_perwakilan'] = 'required|regex:/^[0-9]{9,12}$/';
        }

        try {
            $request->validate($validationRules);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed:', $e->errors());
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        // Ambil detail kendaraan
        $units = DB::table('unit_kendaraan')
            ->join('kendaraan', 'unit_kendaraan.id_kendaraan', '=', 'kendaraan.id_kendaraan')
            ->join('mitra', 'kendaraan.id_mitra', '=', 'mitra.id_mitra')
            ->whereIn('unit_kendaraan.id_unit', $id_units)
            ->select('unit_kendaraan.*', 'kendaraan.*', 'mitra.nama_mitra', 'mitra.foto_mitra', 'mitra.id_mitra')
            ->get();

        if ($units->isEmpty()) {
            \Log::error('No units found for id_units:', $id_units);
            return redirect()->route('search')->with(['error', 'Kendaraan tidak ditemukan.']);
        }

        // Ambil tarif dari fee_setting
        $tarifPerKm = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_pengantaran')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 5000.00;

        $biayaPengembalianPerKm = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_pengembalian')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 5000.00;

        $biayaSopirPerHari = DB::table('fee_setting')
            ->where('nama_fee', 'biaya_sopir')
            ->where('is_active', 1)
            ->value('nilai_fee') ?? 120000.00;

        // Hitung total harga dan siapkan data untuk pemesanan
        $totalHarga = 0;
        $rentalDetails = [];
        DB::beginTransaction();

        try {
            // Buat pemesanan
            $pemesanan = new Pemesanan();
            $pemesanan->id_pemesanan = Str::uuid()->toString();
            $pemesanan->id_entitas_penyewa = $entitasPenyewa->id_entitas_penyewa;
            $pemesanan->id_mitra = $units->first()->id_mitra;
            $pemesanan->perwakilan_penyewa = $entitasPenyewa->tipe_entitas === 'perusahaan' ? $perwakilan_penyewa : null;
            $pemesanan->kontak_perwakilan = $entitasPenyewa->tipe_entitas === 'perusahaan' ? $kontak_perwakilan : null;
            $pemesanan->tanggal_pemesanan = now();
            $pemesanan->total_harga = 0;
            $pemesanan->status_pemesanan = 'pending';
            $pemesanan->save();

            foreach ($units as $unit) {
                $startDateTime = Carbon::parse($tanggal_mulai[$unit->id_unit]);
                $endDateTime = Carbon::parse($tanggal_kembali[$unit->id_unit]);
                $duration = $startDateTime->diffInDays($endDateTime) + 1;
                $unitTipeRental = $tipe_rental[$unit->id_unit];

                // Hitung biaya sopir
                $driverFee = $unitTipeRental === 'dengan_sopir' ? $biayaSopirPerHari * $duration : 0;

                // Hitung biaya sewa kendaraan
                $unitCost = $unit->harga_sewa_perhari * $duration;

                // Ambil koordinat mitra untuk perhitungan jarak
                $alamatMitra = AlamatMitra::where('id_mitra', $unit->id_mitra)->first();
                $latMitra = $alamatMitra->latitude ?? 0;
                $longMitra = $alamatMitra->longitude ?? 0;

                // Tentukan jarak pengantaran dan pengembalian
                $jarakPengantaran = 0;
                $jarakPengembalian = 0;
                $biayaPengantaran = 0;
                $biayaPengembalian = 0;

                // Lokasi pengambilan
                if ($lokasi_pengambilan[$unit->id_unit] === 'kantor_rental') {
                    $jarakPengantaran = 0;
                    $biayaPengantaran = 0;
                } else {
                    // Hitung jarak dari lokasi mitra ke lokasi pengambilan
                    $jarakPengantaran = $this->hitungJarak(
                        $latMitra,
                        $longMitra,
                        $lat_pengambilan[$unit->id_unit] ?? 0,
                        $long_pengambilan[$unit->id_unit] ?? 0
                    );
                    $biayaPengantaran = $jarakPengantaran * $tarifPerKm;
                }

                // Lokasi pengembalian
                if ($lokasi_pengembalian[$unit->id_unit] === 'kantor_rental') {
                    $jarakPengembalian = 0;
                    $biayaPengembalian = 0;
                } else {
                    // Hitung jarak dari lokasi pengembalian ke lokasi mitra
                    $jarakPengembalian = $this->hitungJarak(
                        $latMitra,
                        $longMitra,
                        $lat_pengembalian[$unit->id_unit] ?? 0,
                        $long_pengembalian[$unit->id_unit] ?? 0
                    );
                    $biayaPengembalian = $jarakPengembalian * $biayaPengembalianPerKm;
                }

                // Hitung subtotal
                $subtotal = $unitCost + $driverFee + $biayaPengantaran + $biayaPengembalian;
                $totalHarga += $subtotal;

                // Simpan detail pemesanan
                $detailPemesanan = new DetailPemesanan();
                $detailPemesanan->id_detail = Str::uuid()->toString();
                $detailPemesanan->id_pemesanan = $pemesanan->id_pemesanan;
                $detailPemesanan->id_unit = $unit->id_unit;
                $detailPemesanan->id_unit_kendaraan = $unit->id_unit;
                $detailPemesanan->id_sopir = $unitTipeRental === 'dengan_sopir' ? null : null;
                $detailPemesanan->metode_pengantaran = $lokasi_pengambilan[$unit->id_unit] === 'kantor_rental' ? 'ambil_di_tempat' : 'diantar';
                $detailPemesanan->tipe_penggunaan_sopir = $unitTipeRental;
                $detailPemesanan->tanggal_mulai = $startDateTime;
                $detailPemesanan->tanggal_kembali = $endDateTime;

                // Lokasi pengambilan
                if ($lokasi_pengambilan[$unit->id_unit] === 'kantor_rental') {
                    $alamatMitraPengambilan = AlamatMitra::find($alamat_kantor_pengambilan[$unit->id_unit]);
                    $detailPemesanan->lokasi_pengambilan = $alamatMitraPengambilan->alamat;
                    $detailPemesanan->lat_pengambilan = $alamatMitraPengambilan->latitude ?? 0;
                    $detailPemesanan->long_pengambilan = $alamatMitraPengambilan->longitude ?? 0;
                } else {
                    $detailPemesanan->lokasi_pengambilan = $lokasi_pengambilan_lain[$unit->id_unit];
                    $detailPemesanan->lat_pengambilan = $lat_pengambilan[$unit->id_unit] ?? 0;
                    $detailPemesanan->long_pengambilan = $long_pengambilan[$unit->id_unit] ?? 0;
                }

                // Lokasi pengembalian
                if ($lokasi_pengembalian[$unit->id_unit] === 'kantor_rental') {
                    $alamatMitraPengembalian = AlamatMitra::find($alamat_kantor_pengembalian[$unit->id_unit]);
                    $detailPemesanan->lokasi_pengembalian = $alamatMitraPengembalian->alamat;
                    $detailPemesanan->lat_pengembalian = $alamatMitraPengembalian->latitude ?? 0;
                    $detailPemesanan->long_pengembalian = $alamatMitraPengembalian->longitude ?? 0;
                } else {
                    $detailPemesanan->lokasi_pengembalian = $lokasi_pengembalian_lain[$unit->id_unit];
                    $detailPemesanan->lat_pengembalian = $lat_pengembalian[$unit->id_unit] ?? 0;
                    $detailPemesanan->long_pengembalian = $long_pengembalian[$unit->id_unit] ?? 0;
                }

                // Simpan biaya dan jarak
                $detailPemesanan->biaya_pengantaran = $biayaPengantaran;
                $detailPemesanan->biaya_pengembalian = $biayaPengembalian;
                $detailPemesanan->jarak_pengantaran = $jarakPengantaran;
                $detailPemesanan->jarak_pengembalian = $jarakPengembalian;
                $detailPemesanan->tarif_per_km = $tarifPerKm;
                $detailPemesanan->subtotal_harga = $unitCost;
                $detailPemesanan->biaya_layanan = 0;
                $detailPemesanan->pajak = 0;
                $detailPemesanan->biaya_sopir = $driverFee;
                $detailPemesanan->save();

                // Simpan data pengemudi ke pengemudi_pemesanan jika tipe_rental adalah tanpa_sopir
                if ($unitTipeRental === 'tanpa_sopir' && !empty($driver_nama[$unit->id_unit]) && !empty($driver_telepon[$unit->id_unit])) {
                    $pengemudiPemesanan = new PengemudiPemesanan();
                    $pengemudiPemesanan->id_pengemudi = Str::uuid()->toString();
                    $pengemudiPemesanan->id_detail = $detailPemesanan->id_detail;
                    $pengemudiPemesanan->nama_pengemudi = $driver_nama[$unit->id_unit];
                    $pengemudiPemesanan->no_telepon = $driver_telepon[$unit->id_unit];
                    $pengemudiPemesanan->save();
                }

                // Update rentalDetails untuk review
                $rentalDetails[$unit->id_unit] = [
                    'unit' => $unit,
                    'startDateTime' => $startDateTime,
                    'endDateTime' => $endDateTime,
                    'duration' => $duration,
                    'unitCost' => $unitCost,
                    'driverFee' => $driverFee,
                    'deliveryFee' => $biayaPengantaran,
                    'returnFee' => $biayaPengembalian,
                    'jarak_pengantaran' => $jarakPengantaran,
                    'jarak_pengembalian' => $jarakPengembalian,
                    'lokasi_pengambilan' => $lokasi_pengambilan[$unit->id_unit] === 'kantor_rental'
                        ? $alamatMitraPengambilan
                        : $lokasi_pengambilan_lain[$unit->id_unit],
                    'lokasi_pengembalian' => $lokasi_pengembalian[$unit->id_unit] === 'kantor_rental'
                        ? $alamatMitraPengembalian
                        : $lokasi_pengembalian_lain[$unit->id_unit],
                    'driver_nama' => $unitTipeRental === 'tanpa_sopir' ? ($driver_nama[$unit->id_unit] ?? null) : null,
                    'driver_telepon' => $unitTipeRental === 'tanpa_sopir' ? ($driver_telepon[$unit->id_unit] ?? null) : null,
                    'perwakilan_penyewa' => $entitasPenyewa->tipe_entitas === 'perusahaan' ? ($perwakilan_penyewa ?? null) : null,
                    'kontak_perwakilan' => $entitasPenyewa->tipe_entitas === 'perusahaan' ? ($kontak_perwakilan ?? null) : null,
                ];
            }

            // Update total harga di pemesanan
            $pemesanan->total_harga = $totalHarga;
            $pemesanan->save();

            DB::commit();
            $request->session()->forget('selected_units');

            return redirect()->route('review', ['id_pemesanan' => $pemesanan->id_pemesanan]);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Error in processDetail: ' . $e->getMessage());
            return redirect()->back()->with(['type' => 'error', 'message' => 'Gagal menyimpan pemesanan: ' . $e->getMessage()]);
        }
    }


    public function review(Request $request, $id_pemesanan)
    {
        \Log::info('Review method called with id_pemesanan: ' . $id_pemesanan);
        try {
            $pemesanan = Pemesanan::with([
                'detailPemesanan.unitKendaraan.kendaraan.mitra',
                'detailPemesanan.pengemudiPemesanan',
                'entitasPenyewa.user'
            ])->where('id_pemesanan', $id_pemesanan)->first();

            if (!$pemesanan) {
                \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                return redirect()->route('detail')->with(['type' => 'error', 'Pemesanan tidak ditemukan.']);
            }

            \Log::info('Pemesanan found: ' . $pemesanan->id_pemesanan);

            $user = Auth::user();
            $entitasPenyewa = $pemesanan->entitasPenyewa;

            // Siapkan data untuk view sebagai Collection
            $rentalDetails = collect([]);
            foreach ($pemesanan->detailPemesanan as $detail) {
                $unit = $detail->unitKendaraan;
                $kendaraan = $unit->kendaraan;
                $mitra = $kendaraan->mitra;

                // Ambil alamat mitra
                $alamatMitra = AlamatMitra::where('id_mitra', $mitra->id_mitra)->first();

                try {
                    $startDateTime = Carbon::parse($detail->tanggal_mulai);
                    $endDateTime = Carbon::parse($detail->tanggal_kembali);
                } catch (\Exception $e) {
                    \Log::error('Failed to parse dates for detail: ' . $e->getMessage(), [
                        'id_detail' => $detail->id_detail,
                        'tanggal_mulai' => $detail->tanggal_mulai,
                        'tanggal_kembali' => $detail->tanggal_kembali
                    ]);
                    $startDateTime = Carbon::now();
                    $endDateTime = Carbon::now()->addDay();
                }

                $duration = $startDateTime->diffInDays($endDateTime) + 1;

                // Ambil data pengemudi
                $pengemudi = $detail->pengemudiPemesanan->first();
                $driverNama = $pengemudi ? $pengemudi->nama_pengemudi : null;
                $driverTelepon = $pengemudi ? $pengemudi->no_telepon : null;

                // Format lokasi pengambilan
                $formattedLokasiPengambilan = $detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra
                    ? "{$alamatMitra->alamat}, {$alamatMitra->kota}, {$alamatMitra->kecamatan}, {$alamatMitra->provinsi}"
                    : $detail->lokasi_pengambilan;

                // Format lokasi pengembalian
                $formattedLokasiPengembalian = $detail->lokasi_pengembalian; // Use raw value from database for custom locations
                if ($detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra) {
                    // Check if lokasi_pengembalian matches an AlamatMitra record
                    $alamatMitraPengembalian = AlamatMitra::where('alamat', $detail->lokasi_pengembalian)->first();
                    if ($alamatMitraPengembalian) {
                        $formattedLokasiPengembalian = "{$alamatMitraPengembalian->alamat}, {$alamatMitraPengembalian->kota}, {$alamatMitraPengembalian->kecamatan}, {$alamatMitraPengembalian->provinsi}";
                    }
                }

                $rentalDetails->put($unit->id_unit, [
                    'unit' => (object) [
                        'id_unit' => $unit->id_unit,
                        'nama_kendaraan' => $kendaraan->nama_kendaraan,
                        'fotos' => $kendaraan->fotos,
                        'transmisi' => $kendaraan->transmisi,
                        'jumlah_kursi' => $kendaraan->jumlah_kursi,
                        'tahun_produksi' => $kendaraan->tahun_produksi,
                        'harga_sewa_perhari' => $kendaraan->harga_sewa_perhari,
                        'nama_mitra' => $mitra->nama_mitra,
                        'foto_mitra' => $mitra->foto_mitra,
                        'kota_mitra' => $mitra->kota_mitra ?? 'Unknown',
                        'alamat_mitra' => $alamatMitra ? (object) [
                            'alamat' => $alamatMitra->alamat,
                            'kota' => $alamatMitra->kota,
                            'kecamatan' => $alamatMitra->kecamatan,
                            'provinsi' => $alamatMitra->provinsi,
                        ] : null,
                    ],
                    'startDateTime' => $startDateTime,
                    'endDateTime' => $endDateTime,
                    'duration' => $duration,
                    'unitCost' => $detail->subtotal_harga,
                    'driverFee' => $detail->biaya_sopir,
                    'deliveryFee' => $detail->biaya_pengantaran,
                    'returnFee' => $detail->biaya_pengembalian,
                    'lokasi_pengambilan' => $formattedLokasiPengambilan,
                    'lokasi_pengembalian' => $formattedLokasiPengembalian,
                    'driver_nama' => $driverNama,
                    'driver_telepon' => $driverTelepon,
                    'perwakilan_penyewa' => $pemesanan->perwakilan_penyewa,
                    'kontak_perwakilan' => $pemesanan->kontak_perwakilan,
                    'tipe_penggunaan_sopir' => $detail->tipe_penggunaan_sopir,
                ]);
            }

            \Log::info('RentalDetails created: ', $rentalDetails->toArray());

            return view('review', compact('rentalDetails', 'entitasPenyewa', 'user', 'pemesanan'));
        } catch (\Exception $e) {
            \Log::error('Error in review: ' . $e->getMessage());
            return redirect()->route('detail')->with(['type' => 'error', 'message' => 'Gagal memuat review: ' . $e->getMessage()]);
        }
    }


    public function pilihSopir(Request $request)
    {
        $request->validate([
            'id_detail' => 'required',
            'id_sopir' => 'required',
        ]);

        $detailpemesanan = DetailPemesanan::find($request->id_detail);
        $detailpemesanan->id_sopir = $request->id_sopir;
        $detailpemesanan->save();

        $sopir = Sopir::find($request->id_sopir);
        $sopir->status = 'bertugas';
        $sopir->save();

        return redirect()->back();
    }

     // PEMBAYARAN

     public function pembayaran(Request $request, $id_pemesanan)
     {
         \Log::info('Payment method called with id_pemesanan: ' . $id_pemesanan);
         try {
             // Fetch the booking details
             $pemesanan = Pemesanan::with([
                 'detailPemesanan.unitKendaraan.kendaraan.mitra',
                 'detailPemesanan.pengemudiPemesanan',
                 'entitasPenyewa.user'
             ])->where('id_pemesanan', $id_pemesanan)->first();
     
             if (!$pemesanan) {
                 \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                 return redirect()->route('detail')->with('error', 'Pemesanan tidak ditemukan.');
             }
     
             \Log::info('Pemesanan found: ' . $pemesanan->id_pemesanan);
     
             $user = Auth::user();
             $entitasPenyewa = $pemesanan->entitasPenyewa;
     
             // Fetch active metode pembayaran
             $paymentMethods = MetodePembayaranPlatform::where('is_active', 1)->get();
     
             // menyiapkan detail rental untuk ditampilkan di halaman pembayaran
     
             $rentalDetails = collect([]);
             foreach ($pemesanan->detailPemesanan as $detail) {
                 $unit = $detail->unitKendaraan;
                 $kendaraan = $unit->kendaraan;
                 $mitra = $kendaraan->mitra;
     
                 // Fetch partner address
                 $alamatMitra = AlamatMitra::where('id_mitra', $mitra->id_mitra)->first();
     
                 try {
                     $startDateTime = Carbon::parse($detail->tanggal_mulai);
                     $endDateTime = Carbon::parse($detail->tanggal_kembali);
                 } catch (\Exception $e) {
                     \Log::error('Failed to parse dates for detail: ' . $e->getMessage(), [
                         'id_detail' => $detail->id_detail,
                         'tanggal_mulai' => $detail->tanggal_mulai,
                         'tanggal_kembali' => $detail->tanggal_kembali
                     ]);
                     $startDateTime = Carbon::now();
                     $endDateTime = Carbon::now()->addDay();
                 }
     
                 $duration = $startDateTime->diffInDays($endDateTime) + 1;
     
                 // Fetch driver data
                 $pengemudi = $detail->pengemudiPemesanan->first();
                 $driverNama = $pengemudi ? $pengemudi->nama_pengemudi : null;
                 $driverTelepon = $pengemudi ? $pengemudi->no_telepon : null;
     
                 // Format pickup location
                 $formattedLokasiPengambilan = $detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra
                     ? "{$alamatMitra->alamat}, {$alamatMitra->kota}, {$alamatMitra->kecamatan}, {$alamatMitra->provinsi}"
                     : $detail->lokasi_pengambilan;
     
                 // Format return location
                 $formattedLokasiPengembalian = $detail->lokasi_pengembalian;
                 if ($detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra) {
                     $alamatMitraPengembalian = AlamatMitra::where('alamat', $detail->lokasi_pengembalian)->first();
                     if ($alamatMitraPengembalian) {
                         $formattedLokasiPengembalian = "{$alamatMitraPengembalian->alamat}, {$alamatMitraPengembalian->kota}, {$alamatMitraPengembalian->kecamatan}, {$alamatMitraPengembalian->provinsi}";
                     }
                 }
     
                 $rentalDetails->put($unit->id_unit, [
                     'unit' => (object) [
                         'id_unit' => $unit->id_unit,
                         'nama_kendaraan' => $kendaraan->nama_kendaraan,
                         'fotos' => $kendaraan->fotos,
                         'transmisi' => $kendaraan->transmisi,
                         'jumlah_kursi' => $kendaraan->jumlah_kursi,
                         'tahun_produksi' => $kendaraan->tahun_produksi,
                         'harga_sewa_perhari' => $kendaraan->harga_sewa_perhari,
                         'nama_mitra' => $mitra->nama_mitra,
                         'foto_mitra' => $mitra->foto_mitra,
                         'kota_mitra' => $mitra->kota_mitra ?? 'Unknown',
                         'alamat_mitra' => $alamatMitra ? (object) [
                             'alamat' => $alamatMitra->alamat,
                             'kota' => $alamatMitra->kota,
                             'kecamatan' => $alamatMitra->kecamatan,
                             'provinsi' => $alamatMitra->provinsi,
                         ] : null,
                     ],
                     'startDateTime' => $startDateTime,
                     'endDateTime' => $endDateTime,
                     'duration' => $duration,
                     'unitCost' => $detail->subtotal_harga,
                     'driverFee' => $detail->biaya_sopir,
                     'deliveryFee' => $detail->biaya_pengantaran,
                     'returnFee' => $detail->biaya_pengembalian,
                     'lokasi_pengambilan' => $formattedLokasiPengambilan,
                     'lokasi_pengembalian' => $formattedLokasiPengembalian,
                     'driver_nama' => $driverNama,
                     'driver_telepon' => $driverTelepon,
                     'perwakilan_penyewa' => $pemesanan->perwakilan_penyewa,
                     'kontak_perwakilan' => $pemesanan->kontak_perwakilan,
                     'tipe_penggunaan_sopir' => $detail->tipe_penggunaan_sopir,
                 ]);
             }
     
             \Log::info('RentalDetails created: ', $rentalDetails->toArray());
     
             return view('pembayaran', compact('rentalDetails', 'entitasPenyewa', 'user', 'pemesanan', 'paymentMethods'));
         } catch (\Exception $e) {
             \Log::error('Error in payment: ' . $e->getMessage());
             return redirect()->route('review', ['id_pemesanan' => $id_pemesanan])->with('error', 'Gagal memuat halaman pembayaran: ' . $e->getMessage());
         }
     }
     
     public function prosesPembayaran(Request $request, $id_pemesanan)
     {
         \Log::info('Process payment called with id_pemesanan: ' . $id_pemesanan);
         try {
             // Validasi input
             $request->validate([
                 'payment_method' => 'required|exists:metode_pembayaran_platform,id_metode_pembayaran_platform',
             ], [
                 'payment_method.required' => 'Harap pilih metode pembayaran.',
                 'payment_method.exists' => 'Metode pembayaran tidak valid.',
             ]);
     
             // Ambil pemesanan
             $pemesanan = Pemesanan::with([
                 'detailPemesanan.unitKendaraan.kendaraan.mitra',
                 'detailPemesanan.pengemudiPemesanan',
                 'entitasPenyewa.user'
             ])->where('id_pemesanan', $id_pemesanan)->first();
     
             if (!$pemesanan) {
                 \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Pemesanan tidak ditemukan.');
             }
     
             // Ambil entitas penyewa
             $entitasPenyewa = $pemesanan->entitasPenyewa;
             if (!$entitasPenyewa) {
                 \Log::error('Entitas penyewa not found for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Data entitas penyewa tidak ditemukan.');
             }
     
             // Ambil user
             $user = Auth::user();
             if (!$user) {
                 \Log::error('User not authenticated for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('login')->with('error', 'Harap login terlebih dahulu.');
             }
     
             // Ambil metode pembayaran
             $paymentMethod = MetodePembayaranPlatform::where('id_metode_pembayaran_platform', $request->payment_method)
                 ->where('is_active', 1)
                 ->first();
     
             if (!$paymentMethod) {
                 \Log::error('Payment method not found or inactive: ' . $request->payment_method);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Metode pembayaran tidak valid.');
             }
     
             // Siapkan rentalDetails
             $rentalDetails = collect([]);
             $totalAll = 0;
             foreach ($pemesanan->detailPemesanan as $detail) {
                 $unit = $detail->unitKendaraan;
                 $kendaraan = $unit->kendaraan;
                 $mitra = $kendaraan->mitra;
     
                 $alamatMitra = AlamatMitra::where('id_mitra', $mitra->id_mitra)->first();
     
                 try {
                     $startDateTime = Carbon::parse($detail->tanggal_mulai);
                     $endDateTime = Carbon::parse($detail->tanggal_kembali);
                 } catch (\Exception $e) {
                     \Log::error('Failed to parse dates for detail: ' . $e->getMessage(), [
                         'id_detail' => $detail->id_detail,
                         'tanggal_mulai' => $detail->tanggal_mulai,
                         'tanggal_kembali' => $detail->tanggal_kembali
                     ]);
                     $startDateTime = Carbon::now();
                     $endDateTime = Carbon::now()->addDay();
                 }
     
                 $duration = $startDateTime->diffInDays($endDateTime) + 1;
     
                 $pengemudi = $detail->pengemudiPemesanan->first();
                 $driverNama = $pengemudi ? $pengemudi->nama_pengemudi : null;
                 $driverTelepon = $pengemudi ? $pengemudi->no_telepon : null;
     
                 $formattedLokasiPengambilan = $detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra
                     ? "{$alamatMitra->alamat}, {$alamatMitra->kota}, {$alamatMitra->kecamatan}, {$alamatMitra->provinsi}"
                     : $detail->lokasi_pengambilan;
     
                 $formattedLokasiPengembalian = $detail->lokasi_pengembalian;
                 if ($detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra) {
                     $alamatMitraPengembalian = AlamatMitra::where('alamat', $detail->lokasi_pengembalian)->first();
                     if ($alamatMitraPengembalian) {
                         $formattedLokasiPengembalian = "{$alamatMitraPengembalian->alamat}, {$alamatMitraPengembalian->kota}, {$alamatMitraPengembalian->kecamatan}, {$alamatMitraPengembalian->provinsi}";
                     }
                 }
     
                 $subtotal = $detail->subtotal_harga + ($detail->tipe_penggunaan_sopir === 'dengan_sopir' ? $detail->biaya_sopir : 0) + $detail->biaya_pengantaran + $detail->biaya_pengembalian;
                 $totalAll += $subtotal;
     
                 $rentalDetails->put($unit->id_unit, [
                     'unit' => (object) [
                         'id_unit' => $unit->id_unit,
                         'nama_kendaraan' => $kendaraan->nama_kendaraan,
                         'fotos' => $kendaraan->fotos,
                         'transmisi' => $kendaraan->transmisi,
                         'jumlah_kursi' => $kendaraan->jumlah_kursi,
                         'tahun_produksi' => $kendaraan->tahun_produksi,
                         'harga_sewa_perhari' => $kendaraan->harga_sewa_perhari,
                         'nama_mitra' => $mitra->nama_mitra,
                         'foto_mitra' => $mitra->foto_mitra,
                         'kota_mitra' => $mitra->kota_mitra ?? 'Unknown',
                         'alamat_mitra' => $alamatMitra ? (object) [
                             'alamat' => $alamatMitra->alamat,
                             'kota' => $alamatMitra->kota,
                             'kecamatan' => $alamatMitra->kecamatan,
                             'provinsi' => $alamatMitra->provinsi,
                         ] : null,
                     ],
                     'startDateTime' => $startDateTime,
                     'endDateTime' => $endDateTime,
                     'duration' => $duration,
                     'unitCost' => $detail->subtotal_harga,
                     'driverFee' => $detail->biaya_sopir,
                     'deliveryFee' => $detail->biaya_pengantaran,
                     'returnFee' => $detail->biaya_pengembalian,
                     'lokasi_pengambilan' => $formattedLokasiPengambilan,
                     'lokasi_pengembalian' => $formattedLokasiPengembalian,
                     'driver_nama' => $driverNama,
                     'driver_telepon' => $driverTelepon,
                     'perwakilan_penyewa' => $pemesanan->perwakilan_penyewa,
                     'kontak_perwakilan' => $pemesanan->kontak_perwakilan,
                     'tipe_penggunaan_sopir' => $detail->tipe_penggunaan_sopir,
                 ]);
             }
     
             $deadline = Carbon::now()->addHours(24);
     
             \Log::info('RentalDetails created: ', $rentalDetails->toArray());
     
             // Simpan payment_method di session untuk digunakan di storeBuktiPembayaran
             $request->session()->put('payment_method', $request->payment_method);
     
             return view('petunjukPembayaranTransfer', compact(
                 'rentalDetails',
                 'entitasPenyewa',
                 'user',
                 'pemesanan',
                 'paymentMethod',
                 'deadline',
                 'totalAll'
             ));
         } catch (\Exception $e) {
             \Log::error('Error in processPayment: ' . $e->getMessage());
             return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                 ->with('error', 'Gagal memproses pembayaran: ' . $e->getMessage());
         }
     }
     public function uploadBuktiPembayaran(Request $request, $id_pemesanan)
     {
         \Log::info('uploadBuktiPembayaran called with id_pemesanan: ' . $id_pemesanan);
     
         try {
             // Ambil pemesanan
             $pemesanan = Pemesanan::with([
                 'detailPemesanan.unitKendaraan.kendaraan.mitra',
                 'detailPemesanan.pengemudiPemesanan',
                 'entitasPenyewa.user'
             ])->where('id_pemesanan', $id_pemesanan)->first();
     
             if (!$pemesanan) {
                 \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Pemesanan tidak ditemukan.');
             }
     
             // Ambil entitas penyewa
             $entitasPenyewa = $pemesanan->entitasPenyewa;
             if (!$entitasPenyewa) {
                 \Log::error('Entitas penyewa not found for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Data entitas penyewa tidak ditemukan.');
             }
     
             // Ambil user
             $user = Auth::user();
             if (!$user) {
                 \Log::error('User not authenticated for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('login')->with('error', 'Harap login terlebih dahulu.');
             }
     
             // Siapkan rentalDetails untuk view
             $rentalDetails = collect([]);
             foreach ($pemesanan->detailPemesanan as $detail) {
                 $unit = $detail->unitKendaraan;
                 $kendaraan = $unit->kendaraan;
                 $mitra = $kendaraan->mitra;
     
                 $alamatMitra = AlamatMitra::where('id_mitra', $mitra->id_mitra)->first();
     
                 try {
                     $startDateTime = Carbon::parse($detail->tanggal_mulai);
                     $endDateTime = Carbon::parse($detail->tanggal_kembali);
                 } catch (\Exception $e) {
                     \Log::error('Failed to parse dates for detail: ' . $e->getMessage(), [
                         'id_detail' => $detail->id_detail,
                         'tanggal_mulai' => $detail->tanggal_mulai,
                         'tanggal_kembali' => $detail->tanggal_kembali
                     ]);
                     $startDateTime = Carbon::now();
                     $endDateTime = Carbon::now()->addDay();
                 }
     
                 $duration = $startDateTime->diffInDays($endDateTime) + 1;
     
                 $pengemudi = $detail->pengemudiPemesanan->first();
                 $driverNama = $pengemudi ? $pengemudi->nama_pengemudi : null;
                 $driverTelepon = $pengemudi ? $pengemudi->no_telepon : null;
     
                 $formattedLokasiPengambilan = $detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra
                     ? "{$alamatMitra->alamat}, {$alamatMitra->kota}, {$alamatMitra->kecamatan}, {$alamatMitra->provinsi}"
                     : $detail->lokasi_pengambilan;
     
                 $formattedLokasiPengembalian = $detail->lokasi_pengembalian;
                 if ($detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra) {
                     $alamatMitraPengembalian = AlamatMitra::where('alamat', $detail->lokasi_pengembalian)->first();
                     if ($alamatMitraPengembalian) {
                         $formattedLokasiPengembalian = "{$alamatMitraPengembalian->alamat}, {$alamatMitraPengembalian->kota}, {$alamatMitraPengembalian->kecamatan}, {$alamatMitraPengembalian->provinsi}";
                     }
                 }
     
                 $rentalDetails->put($unit->id_unit, [
                     'unit' => (object) [
                         'id_unit' => $unit->id_unit,
                         'nama_kendaraan' => $kendaraan->nama_kendaraan,
                         'fotos' => $kendaraan->fotos,
                         'transmisi' => $kendaraan->transmisi,
                         'jumlah_kursi' => $kendaraan->jumlah_kursi,
                         'tahun_produksi' => $kendaraan->tahun_produksi,
                         'harga_sewa_perhari' => $kendaraan->harga_sewa_perhari,
                         'nama_mitra' => $mitra->nama_mitra,
                         'foto_mitra' => $mitra->foto_mitra,
                         'kota_mitra' => $mitra->kota_mitra ?? 'Unknown',
                         'alamat_mitra' => $alamatMitra ? (object) [
                             'alamat' => $alamatMitra->alamat,
                             'kota' => $alamatMitra->kota,
                             'kecamatan' => $alamatMitra->kecamatan,
                             'provinsi' => $alamatMitra->provinsi,
                         ] : null,
                     ],
                     'startDateTime' => $startDateTime,
                     'endDateTime' => $endDateTime,
                     'duration' => $duration,
                     'unitCost' => $detail->subtotal_harga,
                     'driverFee' => $detail->biaya_sopir,
                     'deliveryFee' => $detail->biaya_pengantaran,
                     'returnFee' => $detail->biaya_pengembalian,
                     'lokasi_pengambilan' => $formattedLokasiPengambilan,
                     'lokasi_pengembalian' => $formattedLokasiPengembalian,
                     'driver_nama' => $driverNama,
                     'driver_telepon' => $driverTelepon,
                     'perwakilan_penyewa' => $pemesanan->perwakilan_penyewa,
                     'kontak_perwakilan' => $pemesanan->kontak_perwakilan,
                     'tipe_penggunaan_sopir' => $detail->tipe_penggunaan_sopir,
                 ]);
             }
     
             return view('buktiPembayaran', compact(
                 'rentalDetails',
                 'entitasPenyewa',
                 'user',
                 'pemesanan'
             ));
         } catch (\Exception $e) {
             \Log::error('Error in uploadBuktiPembayaran: ' . $e->getMessage());
             return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                 ->with('error', 'Gagal memproses: ' . $e->getMessage());
         }
     }
     public function storeBuktiPembayaran(Request $request, $id_pemesanan)
     {
         \Log::info('storeBuktiPembayaran called with id_pemesanan: ' . $id_pemesanan);
     
         try {
             // Validasi file
             $request->validate([
                 'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:5120', // Maks 5MB
             ], [
                 'bukti_pembayaran.required' => 'Harap unggah bukti pembayaran.',
                 'bukti_pembayaran.image' => 'File harus berupa gambar.',
                 'bukti_pembayaran.mimes' => 'Format file harus JPG, PNG, atau JPEG.',
                 'bukti_pembayaran.max' => 'Ukuran file maksimal 5MB.',
             ]);
     
             // Ambil pemesanan
             $pemesanan = Pemesanan::find($id_pemesanan);
             if (!$pemesanan) {
                 \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Pemesanan tidak ditemukan.');
             }
     
             // Ambil entitas penyewa
             $entitasPenyewa = EntitasPenyewa::where('id_entitas_penyewa', $pemesanan->id_entitas_penyewa)->first();
             if (!$entitasPenyewa) {
                 \Log::error('Entitas penyewa not found for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Data entitas penyewa tidak ditemukan.');
             }
     
             // Ambil user
             $user = Auth::user();
             if (!$user) {
                 \Log::error('User not authenticated for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('login')->with('error', 'Harap login terlebih dahulu.');
             }
     
             // Ambil payment_method dari session
             $paymentMethodId = $request->session()->get('payment_method');
             if (!$paymentMethodId) {
                 \Log::error('Payment method not found in session for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Sesi metode pembayaran telah kadaluwarsa. Silakan pilih ulang.');
             }
     
             // Validasi metode pembayaran
             $paymentMethod = MetodePembayaranPlatform::where('id_metode_pembayaran_platform', $paymentMethodId)
                 ->where('is_active', 1)
                 ->first();
             if (!$paymentMethod) {
                 \Log::error('Payment method not found or inactive: ' . $paymentMethodId);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Metode pembayaran tidak valid.');
             }
     
             DB::beginTransaction();
     
             // Cek apakah pembayaran sudah ada
             $pembayaran = Pembayaran::where('id_pemesanan', $id_pemesanan)->first();
             if (!$pembayaran) {
                 // Buat pembayaran baru
                 $pembayaran = new Pembayaran();
                 $pembayaran->id_pembayaran = Str::uuid()->toString();
                 $pembayaran->id_pemesanan = $id_pemesanan;
                 $pembayaran->id_metode_pembayaran_platform = $paymentMethod->id_metode_pembayaran_platform;
                 $pembayaran->total_bayar = $pemesanan->total_harga;
                 $pembayaran->status_pembayaran = 'pending';
                 $pembayaran->tanggal_pembayaran = now();
             }
     
             // Simpan file bukti pembayaran
             if ($request->hasFile('bukti_pembayaran')) {
                 $file = $request->file('bukti_pembayaran');
                 $filename = 'bukti_' . $pembayaran->id_pembayaran . '_' . time() . '.' . $file->getClientOriginalExtension();
                 $path = $file->storeAs('bukti_pembayaran', $filename, 'public');
                 $pembayaran->bukti_pembayaran = $path;
                 $pembayaran->save();
     
                 \Log::info('Bukti pembayaran uploaded: ', ['path' => $path]);
             } else {
                 \Log::error('No file uploaded for bukti_pembayaran');
                 DB::rollBack();
                 return redirect()->route('pembayaran.upload', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Harap unggah file bukti pembayaran.');
             }
     
             DB::commit();
     
             // Hapus payment_method dari session
             $request->session()->forget('payment_method');
     
             // Redirect ke halaman sukses
             \Log::info('Redirecting to pembayaran.success for id_pemesanan: ' . $id_pemesanan);
             return redirect()->route('pembayaran.success', ['id_pemesanan' => $id_pemesanan])
                 ->with('success', 'Bukti pembayaran berhasil diunggah. Menunggu verifikasi.');
         } catch (\Illuminate\Validation\ValidationException $e) {
             \Log::error('Validation failed in storeBuktiPembayaran: ', $e->errors());
             return redirect()->route('pembayaran.upload', ['id_pemesanan' => $id_pemesanan])
                 ->withErrors($e->errors())
                 ->withInput();
         } catch (\Exception $e) {
             DB::rollBack();
             \Log::error('Error in storeBuktiPembayaran: ' . $e->getMessage());
             return redirect()->route('pembayaran.upload', ['id_pemesanan' => $id_pemesanan])
                 ->with('error', 'Gagal mengunggah bukti pembayaran: ' . $e->getMessage());
         }
     }
     
     public function pembayaranSuccess(Request $request, $id_pemesanan)
     {
         \Log::info('pembayaranSuccess called with id_pemesanan: ' . $id_pemesanan);
         try {
             // Ambil pemesanan
             $pemesanan = Pemesanan::with([
                 'detailPemesanan.unitKendaraan.kendaraan.mitra',
                 'detailPemesanan.pengemudiPemesanan',
                 'entitasPenyewa.user'
             ])->where('id_pemesanan', $id_pemesanan)->first();
     
             if (!$pemesanan) {
                 \Log::error('Pemesanan not found for id: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Pemesanan tidak ditemukan.');
             }
     
             // Ambil entitas penyewa
             $entitasPenyewa = $pemesanan->entitasPenyewa;
             if (!$entitasPenyewa) {
                 \Log::error('Entitas penyewa not found for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Data entitas penyewa tidak ditemukan.');
             }
     
             // Ambil user
             $user = Auth::user();
             if (!$user) {
                 \Log::error('User not authenticated for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('login')->with('error', 'Harap login terlebih dahulu.');
             }
     
             // Ambil data pembayaran
             $pembayaran = Pembayaran::where('id_pemesanan', $id_pemesanan)->first();
             if (!$pembayaran) {
                 \Log::error('Pembayaran not found for pemesanan: ' . $id_pemesanan);
                 return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                     ->with('error', 'Data pembayaran tidak ditemukan.');
             }
     
             // Siapkan rentalDetails
             $rentalDetails = collect([]);
             foreach ($pemesanan->detailPemesanan as $detail) {
                 $unit = $detail->unitKendaraan;
                 $kendaraan = $unit->kendaraan;
                 $mitra = $kendaraan->mitra;
     
                 $alamatMitra = AlamatMitra::where('id_mitra', $mitra->id_mitra)->first();
     
                 try {
                     $startDateTime = Carbon::parse($detail->tanggal_mulai);
                     $endDateTime = Carbon::parse($detail->tanggal_kembali);
                 } catch (\Exception $e) {
                     \Log::error('Failed to parse dates for detail: ' . $e->getMessage(), [
                         'id_detail' => $detail->id_detail,
                         'tanggal_mulai' => $detail->tanggal_mulai,
                         'tanggal_kembali' => $detail->tanggal_kembali
                     ]);
                     $startDateTime = Carbon::now();
                     $endDateTime = Carbon::now()->addDay();
                 }
     
                 $duration = $startDateTime->diffInDays($endDateTime) + 1;
     
                 $pengemudi = $detail->pengemudiPemesanan->first();
                 $driverNama = $pengemudi ? $pengemudi->nama_pengemudi : null;
                 $driverTelepon = $pengemudi ? $pengemudi->no_telepon : null;
     
                 $formattedLokasiPengambilan = $detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra
                     ? "{$alamatMitra->alamat}, {$alamatMitra->kota}, {$alamatMitra->kecamatan}, {$alamatMitra->provinsi}"
                     : $detail->lokasi_pengambilan;
     
                 $formattedLokasiPengembalian = $detail->lokasi_pengembalian;
                 if ($detail->metode_pengantaran === 'ambil_di_tempat' && $alamatMitra) {
                     $alamatMitraPengembalian = AlamatMitra::where('alamat', $detail->lokasi_pengembalian)->first();
                     if ($alamatMitraPengembalian) {
                         $formattedLokasiPengembalian = "{$alamatMitraPengembalian->alamat}, {$alamatMitraPengembalian->kota}, {$alamatMitraPengembalian->kecamatan}, {$alamatMitraPengembalian->provinsi}";
                     }
                 }
     
                 $rentalDetails->put($unit->id_unit, [
                     'unit' => (object) [
                         'id_unit' => $unit->id_unit,
                         'nama_kendaraan' => $kendaraan->nama_kendaraan,
                         'fotos' => $kendaraan->fotos,
                         'transmisi' => $kendaraan->transmisi,
                         'jumlah_kursi' => $kendaraan->jumlah_kursi,
                         'tahun_produksi' => $kendaraan->tahun_produksi,
                         'harga_sewa_perhari' => $kendaraan->harga_sewa_perhari,
                         'nama_mitra' => $mitra->nama_mitra,
                         'foto_mitra' => $mitra->foto_mitra,
                         'kota_mitra' => $mitra->kota_mitra ?? 'Unknown',
                         'alamat_mitra' => $alamatMitra ? (object) [
                             'alamat' => $alamatMitra->alamat,
                             'kota' => $alamatMitra->kota,
                             'kecamatan' => $alamatMitra->kecamatan,
                             'provinsi' => $alamatMitra->provinsi,
                         ] : null,
                     ],
                     'startDateTime' => $startDateTime,
                     'endDateTime' => $endDateTime,
                     'duration' => $duration,
                     'unitCost' => $detail->subtotal_harga,
                     'driverFee' => $detail->biaya_sopir,
                     'deliveryFee' => $detail->biaya_pengantaran,
                     'returnFee' => $detail->biaya_pengembalian,
                     'lokasi_pengambilan' => $formattedLokasiPengambilan,
                     'lokasi_pengembalian' => $formattedLokasiPengembalian,
                     'driver_nama' => $driverNama,
                     'driver_telepon' => $driverTelepon,
                     'perwakilan_penyewa' => $pemesanan->perwakilan_penyewa,
                     'kontak_perwakilan' => $pemesanan->kontak_perwakilan,
                     'tipe_penggunaan_sopir' => $detail->tipe_penggunaan_sopir,
                 ]);
             }
     
             // Log untuk debugging
             \Log::info('Pembayaran data:', ['pembayaran' => $pembayaran ? $pembayaran->toArray() : null]);
             \Log::info('Rendering pembayaranSuccess with data', [
                 'pemesanan_id' => $pemesanan->id_pemesanan,
                 'pembayaran_id' => $pembayaran->id_pembayaran
             ]);
     
             // Kembalikan view dengan semua variabel
             return view('pembayaranSuccess', compact('pemesanan', 'entitasPenyewa', 'user', 'pembayaran', 'rentalDetails'));
         } catch (\Exception $e) {
             \Log::error('Error in pembayaranSuccess: ' . $e->getMessage());
             return redirect()->route('pembayaran', ['id_pemesanan' => $id_pemesanan])
                 ->with('error', 'Gagal memproses halaman sukses: ' . $e->getMessage());
         }
     }
        
}