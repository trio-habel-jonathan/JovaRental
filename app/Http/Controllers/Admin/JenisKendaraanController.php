<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\JenisKendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required|unique:jenis_kendaraan,nama_jenis',
            'deskripsi' => 'required'
        ]);

        JenisKendaraan::create($request->only(['nama_jenis', 'deskripsi']));

        return redirect()->route('admin.clasifications.clasificationsView')->with(['type' => 'success', 'message' => 'Jenis Kendaraan Berhasil Ditambah']);
    }
}
