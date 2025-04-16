<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Mitra, User};

class PengajuanKemitraanController extends Controller
{
    public function index(){
        $mitraPenyewa = Mitra::whereHas('user', function ($query) {
            $query->where('role', 'penyewa');
        })->with('user')->get();
        

        return view ('admin.mitra.pengajuan', compact('mitraPenyewa'));
    }

    public function verifikasi($id)
{
    $mitra = Mitra::with('user')->findOrFail($id); // eager load user
    $mitra->status_verifikasi = 'verified';
    $mitra->->role = 'mitra';
    $mitra->save();

    return back()->with('success', 'Mitra berhasil diverifikasi.');
}

public function tolak($id)
{
    $mitra = Mitra::findOrFail($id);
    $mitra->status_verifikasi = 'rejected';
    $mitra->save();

    return back()->with('success', 'Mitra ditolak.');
}

}
