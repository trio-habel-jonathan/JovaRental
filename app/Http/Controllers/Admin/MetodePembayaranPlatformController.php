<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MetodePembayaranPlatform;
use Illuminate\Http\Request;

class MetodePembayaranPlatformController extends Controller
{
    public function index()
    {
        $metodePembayaran = MetodePembayaranPlatform::all();
        return view('admin.metode_pembayaran_platform.index', compact('metodePembayaran'));
    }

    public function create()
    {
        return view('admin.metode_pembayaran_platform.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_metode' => 'required|in:E-Wallet,Transfer Bank,Virtual Account',
            'nama_metode' => 'required|string|max:50',
            'nomor_rekening_platform' => 'required|string|max:50',
            'nama_pemilik_platform' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        MetodePembayaranPlatform::create($request->all());

        return redirect()->route('admin.metodePembayaran.index')->with(['type' => 'success', 'message' => 'Metode pembayaran berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $metode = MetodePembayaranPlatform::findOrFail($id);
        return view('admin.metode_pembayaran_platform.edit', compact('metode'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_metode' => 'required|in:E-Wallet,Transfer Bank,Virtual Account',
            'nama_metode' => 'required|string|max:50',
            'nomor_rekening_platform' => 'required|string|max:50',
            'nama_pemilik_platform' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

        $metodePembayaran = MetodePembayaranPlatform::findOrFail($id);
        $metodePembayaran->update($request->all());

        return redirect()->route('admin.metodePembayaran.index')->with(['type' => 'success', 'message' => 'Metode pembayaran berhasil diperbarui.']);
    }

    public function destroy($id)
    {
        $metodePembayaran = MetodePembayaranPlatform::findOrFail($id);
        $metodePembayaran->delete();

        return redirect()->route('admin.metodePembayaran.index')->with(['type' => 'success', 'message' => 'Metode pembayaran berhasil dihapus.']);
    }
}
