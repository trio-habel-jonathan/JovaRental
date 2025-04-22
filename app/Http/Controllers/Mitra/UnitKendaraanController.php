<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\AlamatMitra;
use App\Models\Kendaraan;
use App\Models\UnitKendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UnitKendaraanController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $mitra = $user->mitra; // Ambil mitra dari user yang login
    
        if (!$mitra) {
            abort(403, 'Akun ini bukan mitra atau belum terdaftar sebagai mitra.');
        }
    
        $alamatMitra = $mitra->alamatMitra; // Ambil alamat mitra dari mitra login
    
        $query = $request->input('q');
        $unitKendaraan = UnitKendaraan::when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('id_alamat_mitra', $query);
        })->whereIn('id_alamat_mitra', $alamatMitra->pluck('id_alamat'))->get();
    
        return view('mitra.unit_kendaraan.index', compact('alamatMitra', 'unitKendaraan'));
    }
    public function edit($uuid)
    {
        $user = Auth::user();
        $mitra = $user->mitra;
    
        if (!$mitra) {
            abort(404);
        }
    
        $unitKendaraan = UnitKendaraan::findOrFail($uuid);
    
        // Cek apakah unit ini dimiliki oleh mitra yang login
        if (!$mitra->alamatMitra->pluck('id_alamat')->contains($unitKendaraan->id_alamat_mitra)) {
            abort(404);
        }
    
        return view('mitra.unit_kendaraan.edit', compact('unitKendaraan'));
    }
    
    

    public function create(){
        $kendaraan = Kendaraan::all();
        $alamatMitra = AlamatMitra::all();
        
        return view('mitra.unit_kendaraan.create', compact('kendaraan', 'alamatMitra'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kendaraan' => 'required|exists:kendaraan,id_kendaraan',
            'id_alamat_mitra' => 'required|exists:alamat_mitra,id_alamat',
            'plat_nomor' => 'required|unique:unit_kendaraan,plat_nomor|max:20',
        ]);

        UnitKendaraan::create([
            'id_kendaraan' => $request->id_kendaraan,
            'id_alamat_mitra' => $request->id_alamat_mitra,
            'plat_nomor' => $request->plat_nomor,
            'status_unit_kendaraan' => 'tersedia',
        ]);

        return redirect()->route('mitra.unitKendaraan.index')->with(['type' => 'success', 'message' => 'Unit kendaraan berhasil ditambahkan!']);
    }

    public function destroy($uuid)
    {
        $user = Auth::user();
        $mitra = $user->mitra;
    
        if (!$mitra) {
            abort(404);
        }
    
        $unitKendaraan = UnitKendaraan::findOrFail($uuid);
    
        if (!$mitra->alamatMitra->pluck('id_alamat')->contains($unitKendaraan->id_alamat_mitra)) {
            abort(404);
        }
    
        $unitKendaraan->delete();
    
        return redirect()->route('mitra.unitKendaraan.index')->with(['type' => 'success', 'message' => 'Unit kendaraan berhasil dihapus!']);
    }
    
}
