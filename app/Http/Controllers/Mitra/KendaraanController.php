<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\JenisKendaraan;
use App\Models\KategoriKendaraan;

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
        $validated = $request->validate([
            'nama_kendaraan' => 'required|string|max:100',
            'id_kategori' => 'required|exists:kategori_kendaraan,id_kategori',
            'plat_nomor' => 'required|string|max:20|unique:kendaraan,plat_nomor',
            'tahun_produksi' => 'required|integer|min:1900|max:2025',
            'warna' => 'required|string|max:50',
            'transmisi' => 'required|in:automatic,manual,kopling',
            'cubic_centimeter' => 'required|integer',
            'jumlah_kursi' => 'required|integer|min:1|max:50',
            // Tambahkan field lain jika perlu
        ]);

        Kendaraan::create($validated);


        return redirect()->route('mitra.kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }
}



