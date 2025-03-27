<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\JenisKendaraan;
use App\Models\KategoriKendaraan;
use App\Models\Mitra;
use Illuminate\Support\Facades\Auth;

class KendaraanController extends Controller
{
    public function tambahkendaraan()
    {
        $jenisKendaraan = JenisKendaraan::all();
        $kategoriKendaraan = KategoriKendaraan::all();
        return view('mitra.kendaraan.create', compact('jenisKendaraan', 'kategoriKendaraan'));
    }

    public function editkendaraanView($uuid)
    {
        $kendaraan = Kendaraan::findOrFail($uuid);
        $jenisKendaraan = JenisKendaraan::all();
        $kategoriKendaraan = KategoriKendaraan::all();

        return view('mitra.kendaraan.edit', compact('kendaraan', 'jenisKendaraan', 'kategoriKendaraan'));
    }

    public function editKendaraan(Request $request, Kendaraan $uuid)
    {
        try {
            $user = Auth::user();
            $mitra = Mitra::where('id_user', $user->id_user)->first();

            if (!$mitra) {
                return redirect()->route('kendaraan.kendaraanmitraView')->with('error', 'Anda bukan mitra yang terdaftar.');
            }

            $validated = $request->validate([
                'nama_kendaraan' => 'required|string|max:100',
                'id_kategori' => 'required|exists:kategori_kendaraan,id_kategori',
                'tahun_produksi' => 'required|integer|min:1900|max:2025',
                'warna' => 'required|string|max:50',
                'transmisi' => 'required|in:automatic,manual,kopling',
                'cubic_centimeter' => 'required|integer',
                'harga_sewa_perhari' => 'required|numeric|min:0',
                'jumlah_kursi' => 'required|integer|min:1|max:50',
                'file_upload.foto.*' => 'nullable|max:5120|mimetypes:image/jpeg,image/png,image/jpg,image/webp,video/mp4,video/mpeg',
                'file_upload' => 'nullable|array|max:3',
            ]);

            $fotoArray = json_decode($uuid->fotos);
            $paths = [];
            if ($request->file('file_upload')) {
                $arrayKeys = array_keys($request->file('file_upload'));
                foreach ($arrayKeys as $keyIndex) {
                    $file = $request->file('file_upload')[$keyIndex]['foto'];

                    $filename = time() . '_' . $file->getClientOriginalName();

                    $filePath = public_path('kendaraan/' . $fotoArray[$keyIndex]);

                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }

                    $fotoArray[$keyIndex] = $filename;

                    $file->move(public_path('kendaraan'), $filename);
                }
            }

            $validated['id_mitra'] = $mitra->id_mitra;
            $validated['fotos'] = json_encode($fotoArray);

            $uuid->update($validated);

            return redirect()->route('mitra.kendaraan.kendaraanmitraView')->with(['type' => 'success', 'message' => 'Kendaraan berhasil diperbarui']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['type' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function tambahkendaraanStore(Request $request)
    {
        $user = Auth::user();
        $mitra = Mitra::where('id_user', $user->id_user)->first();

        if (!$mitra) {
            return redirect()->route('kendaraan.kendaraanmitraView')->with('error', 'Anda bukan mitra yang terdaftar.');
        }

        $validated = $request->validate([
            'nama_kendaraan' => 'required|string|max:100',
            'id_kategori' => 'required|exists:kategori_kendaraan,id_kategori',
            'plat_nomor' => 'required|string|max:20|unique:kendaraan,plat_nomor',
            'tahun_produksi' => 'required|integer|min:1900|max:2025',
            'warna' => 'required|string|max:50',
            'transmisi' => 'required|in:automatic,manual,kopling',
            'cubic_centimeter' => 'required|integer',
            'harga_sewa_perhari' => 'required|numeric|min:0',
            'jumlah_kursi' => 'required|integer|min:1|max:50',
            'file_upload.*' => 'nullable|file|max:5120|mimetypes:image/jpeg,image/png,image/jpg,image/webp,video/mp4,video/mpeg',
        ]);


        $paths = [];

        if ($request->hasFile('file_upload')) {
            foreach ($request->file('file_upload') as $file) {
                // Simpan file ke folder "kendaraan" di dalam public
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('kendaraan'), $filename);

                // Simpan nama file ke dalam array
                $paths[] = $filename;
            }
        }

        $validated['id_mitra'] = $mitra->id_mitra;
        $validated['fotos'] = json_encode($paths);


        Kendaraan::create($validated);

        return redirect()->route('mitra.kendaraan.kendaraanmitraView')->with(['type' => 'success', 'message' => 'Kendaraan berhasil ditambahkan']);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'uuid' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($request->uuid);
        $fotos = json_decode($kendaraan->fotos);
        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                $filePath = public_path('kendaraan/' . $foto);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }
        $kendaraan->delete();
        // dd($request->input());

        return redirect()->back()->with(['type' => 'success', 'message' => 'Kendaraan Berhasil Dihapus']);
    }
}
