<?php

namespace App\Http\Controllers;

use App\Models\AlamatMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlamatMitraController extends Controller
{
    public function index()
    {
        $alamatMitra = AlamatMitra::all();
        return view('mitra.alamat.index', compact('alamatMitra'));
    }

    public function create()
    {
        return view('mitra.alamat.create');
    }

    public function store(Request $request)
    {
    $request->merge(['id_mitra' => Auth::user()->mitra->id_mitra]);
    $request->validate([
        'alamat' => 'required|string|max:255',
        'no_telepon' => 'required|string|max:15',
        'kota' => 'required|string|max:100',
        'kecamatan' => 'required|string|max:100',
        'provinsi' => 'required|string|max:100',
        'kode_pos' => 'required|string|max:10',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    try {
        AlamatMitra::create($request->only(['id_mitra', 'alamat', 'no_telepon', 'kota', 'kecamatan', 'provinsi', 'kode_pos', 'latitude', 'longitude']));

        return redirect()->route('mitra.alamat.MitraView')->with(['type' => 'success', 'message' => "Alamat baru telah ditambah!"]);
    } catch (\Throwable $th) {
        return redirect()->route('mitra.alamat.MitraView')->with(['type' => 'error', 'message' => $th->getMessage()]);
    }
    }

    public function edit(AlamatMitra $alamatMitra)
    {
        return view('mitra.alamat.edit', compact('alamatMitra'));
    }

    public function destroy(AlamatMitra $uuid)
    {
        $uuid->delete();

        return redirect()->back()->with(['type' => 'success', 'message' => "Alamat telah dihapus!"]);
    }

    public function update(Request $request, AlamatMitra $alamatMitra)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'kota' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        
        $alamatMitra->update($request->only(['alamat', 'no_telepon', 'kota', 'kecamatan', 'provinsi', 'kode_pos', 'latitude', 'longitude']));

        return redirect()->route('mitra.alamat.MitraView')->with(['type' => 'success', 'message' => "Alamat baru telah ditambah!"]);
    }
}
