<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\MetodePembayaranMitra;
use App\Models\RekeningMitra;
use Illuminate\Http\Request;

class RekeningMitraController extends Controller
{
    public function index()
    {
        $rekeningMitra = RekeningMitra::with('metodePembayaranMitra')->get();
        return view("mitra.rekening_mitra.index", compact('rekeningMitra'));
    }
    public function create()
    {
        $metodePembayaranMitra = MetodePembayaranMitra::all();

        return view("mitra.rekening_mitra.create", compact('metodePembayaranMitra'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_metode_pembayaran_mitra' => 'required',
            'nomor_rekening' => 'required',
            'nama_pemilik' => 'required|string',
        ]);

        RekeningMitra::create([
            'id_mitra' => auth()->user()->mitra->id_mitra,
            'id_metode_pembayaran_mitra' => $request->id_metode_pembayaran_mitra,
            'nomor_rekening' => $request->nomor_rekening,
            'nama_pemilik' => $request->nama_pemilik,
        ]);

        return redirect()->route('mitra.rekeningMitra.RekeningView')->with(['type' => 'success', 'message' => "Rekening berhasil ditambahkan"]);
    }

    public function edit($uuid)
    {
        $rekeningMitra = RekeningMitra::with('metodePembayaranMitra')
            ->where('id_rekening_mitra', $uuid)
            ->first();
        $metodePembayaranMitra = MetodePembayaranMitra::all();
        return view("mitra.rekening_mitra.edit", compact('rekeningMitra', 'metodePembayaranMitra'));
    }

    public function update(Request $request, $uuid)
    {
        $rekeningMitra = RekeningMitra::findOrFail($uuid);
        $request->validate([
            'id_metode_pembayaran_mitra' => 'required',
            'nomor_rekening' => 'required',
            'nama_pemilik' => 'required|string',
        ]);

        $rekeningMitra->id_metode_pembayaran_mitra = $request->id_metode_pembayaran_mitra;
        $rekeningMitra->nomor_rekening = $request->nomor_rekening;
        $rekeningMitra->nama_pemilik = $request->nama_pemilik;
        $rekeningMitra->save();

        return redirect()->route('mitra.rekeningMitra.RekeningView')->with(['type' => 'success', 'message' => "Rekening berhasil diupdate"]);
    }

    public function destroy(Request $request)
    {
        $request->validate(['uuid' => 'required']);

        $rekening = RekeningMitra::findOrFail($request->uuid);

        $rekening->delete();

        return redirect()->back()->with(['type' => 'success', 'message' => "Rekening Berhasil dihapus"]);
    }
}
