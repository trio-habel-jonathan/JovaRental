<?php

namespace App\Http\Controllers;

use App\Models\KategoriKendaraan;
use Illuminate\Http\Request;

class KategoriKendaraanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_jenis' => 'required|exists:jenis_kendaraan,id_jenis',
            'nama_kategori' => 'required|string|max:50|unique:kategori_kendaraan,nama_kategori',
            'deskripsi' => 'nullable|string',
        ]);

        KategoriKendaraan::create($request->only(['id_jenis', 'nama_kategori', 'deskripsi']));

        return redirect()->route('admin.clasifications.clasificationsView')->with(['type' => 'success', 'message' => 'Kategori Kendaraan Berhasil Terbuat']);
    }
}
