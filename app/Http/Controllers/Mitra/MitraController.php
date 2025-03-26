<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\User;
use App\Models\EntitasPenyewa;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'tipe_mitra' => 'required|in:individu,perusahaan',
            'nama_mitra' => 'required|string|max:100',
            'nama_pemilik' => 'required|string|max:100',
            'no_identitas' => 'required|string|max:50|unique:mitra,no_identitas',
            'npwp' => 'nullable|string|max:50|unique:mitra,npwp',
            'no_telepon' => 'required|string|max:20|unique:mitra,no_telepon',
            'alamat' => 'required|string',
        ]);

        Mitra::create([
            'id_user' => auth()->user()->id_user,
            'tipe_mitra' => $request->tipe_mitra,
            'nama_mitra' => $request->nama_mitra,
            'nama_pemilik' => $request->nama_pemilik,
            'no_identitas' => $request->no_identitas,
            'npwp' => $request->npwp,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
        ]);

        User::where('id_user', auth()->user()->id_user)->update(['role' => 'mitra']);

        EntitasPenyewa::where('id_user', auth()->user()->id_user)->delete();

        return redirect()->route('mitra.indexView')->with(['type' => 'success', 'message' => 'Pendaftaran Sebagai Mitra Berhasil']);
    }
}
