<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'id_user' => 'required|size:36', //
            'tipe_mitra' => 'required|in:individu,perusahaan', //
            'nama_mitra' => 'required|string|max:100', //
            'nama_pemilik' => 'required|string|max:100', //
            'no_identitas' => 'required|string|max:50|unique:mitra,no_identitas', //
            'npwp' => 'nullable|string|max:50|unique:mitra,npwp', //
            'no_telepon' => 'required|string|max:20|unique:mitra,no_telepon',
            'alamat' => 'required|string',
        ]);

        dd($request->input());
    }
}
