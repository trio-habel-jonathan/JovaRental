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

    public function destroy(Request $request)
    {
        $request->validate([
            'uuid' => 'required',
        ]);

        $jenis = JenisKendaraan::findOrFail($request->uuid);

        $jenis->delete();

        return redirect()->back()->with(['type' => 'success', 'message' => 'Jenis Kendaraan Berhasil Dihapus']);
    }
}
