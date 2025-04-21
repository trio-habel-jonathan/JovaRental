<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupirController extends Controller
{
    public function store(Request $request)
    {
        $request->merge(['id_mitra' => Auth::user()->mitra->id_mitra]);
        $request->validate([
            'id_mitra' => 'required|uuid|exists:mitra,id_mitra',
            'nama_sopir' => 'required|string|max:100',
            'no_identitas' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'status' => 'required|in:tersedia,bertugas',
            'is_active' => 'required|boolean',
        ]);

        Sopir::create($request->only(['id_mitra', 'nama_sopir', 'no_identitas', 'no_telepon', 'alamat', 'status', 'is_active']));

        return redirect()->route('mitra.supir.supirmitraView')->with(['type' => 'success', 'message' => "Supir baru telah ditambah!"]);
    }

    public function update(Request $request, Sopir $uuid)
    {
        $request->merge(['id_mitra' => Auth::user()->mitra->id_mitra]);
        $request->validate([
            'id_mitra' => 'required|exists:mitra,id_mitra',
            'nama_sopir' => 'required|string|max:100',
            'no_identitas' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'status' => 'required|in:tersedia,bertugas',
        ]);

        $uuid->update($request->only(['id_mitra', 'nama_sopir', 'no_identitas', 'no_telepon', 'alamat', 'status', 'is_active']));

        return redirect()->route('mitra.supir.supirmitraView')->with(['type' => 'success', 'message' => "Data supir berhasil diubah!"]);
    }

    public function destroy(Request $request)
    {
        $request->validate(['uuid' => 'required']);

        $sopir = Sopir::findOrFail($request->uuid);

        $sopir->delete();

        return redirect()->back()->with(['type' => 'success', 'message' => "Data supir berhasil dihapus!"]);
    }
}
