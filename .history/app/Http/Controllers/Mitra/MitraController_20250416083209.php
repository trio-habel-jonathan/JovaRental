<?php

namespace App\Http\Controllers\mitra;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\User;
use App\Models\EntitasPenyewa;
use Illuminate\Http\Request;
use App\Models\AlamatMitra;
use Illuminate\Support\Str;

class MitraController extends Controller
{
    public function profile(){
        $user = User::Auth();
        $mitra = Mitra::where('id_user', $user->id_user)
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_mitra'   => 'required|in:individu,perusahaan',
            'nama_mitra'   => 'required|string|max:100',
            'nama_pemilik' => 'required|string|max:100',
            'no_identitas' => 'required|string|max:50|unique:mitra,no_identitas',
            'npwp'         => 'nullable|string|max:50|unique:mitra,npwp',
            'no_telepon'   => 'required|string|max:20|unique:alamat_mitra,no_telepon', // ubah validasi ke tabel alamat_mitra
            'alamat'       => 'required|string',
            'kota'         => 'required|string|max:50',
            'kecamatan'    => 'required|string|max:50',
            'provinsi'     => 'required|string|max:50',
            'kode_pos'     => 'nullable|string|max:10',
            'latitude'     => 'nullable|numeric',
            'longitude'    => 'nullable|numeric',
        ]);
    
        // Simpan mitra dulu
        $mitra = Mitra::create([
            'id_user'       => auth()->user()->id_user,
            'tipe_mitra'    => $request->tipe_mitra,
            'nama_mitra'    => $request->nama_mitra,
            'nama_pemilik'  => $request->nama_pemilik,
            'no_identitas'  => $request->no_identitas,
            'npwp'          => $request->npwp,
        ]);
    
        // Simpan alamat mitra
        $alamatMitra = AlamatMitra::create([
            'id_alamat'  => Str::uuid(),
            'id_mitra'   => $mitra->id_mitra,
            'alamat'     => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'kota'       => $request->kota,
            'kecamatan'  => $request->kecamatan,
            'provinsi'   => $request->provinsi,
            'kode_pos'   => $request->kode_pos,
            'latitude'   => $request->latitude,
            'longitude'  => $request->longitude,
        ]);

        User::where('id_user', auth()->user()->id_user)->update(['role' => 'mitra']);

        EntitasPenyewa::where('id_user', auth()->user()->id_user)->delete();

        return redirect()->route('mitra.indexView')->with(['type' => 'success', 'message' => 'Pendaftaran Sebagai Mitra Berhasil']);
    }
}
