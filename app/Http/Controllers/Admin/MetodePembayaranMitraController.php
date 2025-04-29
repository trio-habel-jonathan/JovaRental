<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MetodePembayaranMitra;

class MetodePembayaranMitraController extends Controller
{
    public function index()
    {
        $metodePembayaran = MetodePembayaranMitra::all();
        return view('admin.metode_pembayaran_mitra.index', compact('metodePembayaran'));
    }

    public function create()
    {
        return view('admin.metode_pembayaran_mitra.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_metode' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        MetodePembayaranMitra::create([
            'nama_metode' => $request->nama_metode,
            'deskripsi' => $request->deskripsi,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'success', 'message' => 'Metode pembayaran created successfully']);
    }

    public function show($id)
    {
        $metodePembayaran = MetodePembayaranMitra::find($id);

        if (!$metodePembayaran) {
            return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'error', 'message' => 'Metode pembayaran not found']);
        }

        return view('admin.metode_pembayaran_mitra.show', compact('metodePembayaran'));
    }

    public function edit($id)
    {
        $metodePembayaran = MetodePembayaranMitra::find($id);

        if (!$metodePembayaran) {
            return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'error', 'message' => 'Metode pembayaran not found']);
        }

        return view('admin.metode_pembayaran_mitra.edit', compact('metodePembayaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_metode' => 'required|string|max:50',
            'deskripsi' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $metodePembayaran = MetodePembayaranMitra::find($id);

        if (!$metodePembayaran) {
            return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'error', 'message' => 'Metode pembayaran not found']);
        }

        $metodePembayaran->update([
            'nama_metode' => $request->nama_metode,
            'deskripsi' => $request->deskripsi,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'success', 'message' => 'Metode pembayaran updated successfully']);
    }

    public function destroy($id)
    {
        $metodePembayaran = MetodePembayaranMitra::find($id);

        if (!$metodePembayaran) {
            return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'error', 'message' => 'Metode pembayaran not found']);
        }

        $metodePembayaran->delete();

        return redirect()->route('admin.metodePembayaranMitra.index')->with(['type' => 'success', 'message' => 'Metode pembayaran deleted successfully']);
    }
}
