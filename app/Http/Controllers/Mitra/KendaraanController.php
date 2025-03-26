<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\JenisKendaraan;
use App\Models\KategoriKendaraan;
use App\Models\Mitra;
use Illuminate\Support\Facades\Auth;

class KendaraanController extends Controller
{
    public function tambahkendaraan()
    {
        $jenisKendaraan = JenisKendaraan::all();
        $kategoriKendaraan = KategoriKendaraan::all();
        return view('mitra.kendaraan.create', compact('jenisKendaraan', 'kategoriKendaraan'));
    }

    public function editkendaraan()
    {
        return view('mitra.kendaraan.edit');
    }

    public function tambahkendaraanStore(Request $request)
    {
        $user = Auth::user();
        $mitra = Mitra::where('id_user', $user->id_user)->first();

        if (!$mitra) {
            return redirect()->route('kendaraan.kendaraanmitraView')->with('error', 'Anda bukan mitra yang terdaftar.');
        }

        $validated = $request->validate([
            'nama_kendaraan' => 'required|string|max:100',
            'id_kategori' => 'required|exists:kategori_kendaraan,id_kategori',
            'plat_nomor' => 'required|string|max:20|unique:kendaraan,plat_nomor',
            'tahun_produksi' => 'required|integer|min:1900|max:2025',
            'warna' => 'required|string|max:50',
            'transmisi' => 'required|in:automatic,manual,kopling',
            'cubic_centimeter' => 'required|integer',
            'harga_sewa_perhari' => 'required|numeric|min:0',
            'jumlah_kursi' => 'required|integer|min:1|max:50',
        ]);

        dd($validated);

        $validated['id_mitra'] = $mitra->id_mitra;

        Kendaraan::create($validated);

        return redirect()->route('mitra.kendaraan.kendaraanmitraView')->with('success', 'Kendaraan berhasil ditambahkan');
    }
}
