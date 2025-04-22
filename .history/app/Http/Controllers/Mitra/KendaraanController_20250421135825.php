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
            'tahun_produksi' => 'required|integer|min:1900|max:2025',
            'transmisi' => 'required|in:automatic,manual,kopling',
            'cubic_centimeter' => 'required|integer',
            'harga_sewa_perhari' => 'required|numeric|min:0',
            'jumlah_kursi' => 'required|integer|min:1|max:50',
            'file_upload' => 'nullable|array|max:3',
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

    public function PengembalianKendaraanView()
    {
        $userId = Auth::user()->id_user;
    
        // Find the Mitra associated with the authenticated user
        $mitra = \App\Models\Mitra::where('id_user', $userId)->first();
    
        if (!$mitra) {
            return redirect()->back()->with('error', 'Mitra tidak ditemukan.');
        }
    
        $unitIds = [];
    
        // Collecting unitIds for which pengembalian can be done
        foreach ($mitra->kendaraans as $kendaraan) {
            foreach ($kendaraan->KendaraanToUnitKendaraan as $unitKendaraan) {
                foreach ($unitKendaraan->UnitkendaraanToDetailPemesanan as $detailPemesanan) {
                    $unitIds[] = $detailPemesanan->id_unit;  // Assuming `id_unit` is on `DetailPemesanan`
                }
            }
        }
    
        // Now we query based on the `unit_kendaraan` relation or a similar relation
        $kendaraans = \App\Models\Kendaraan::whereHas('unitKendaraan', function($query) use ($unitIds) {
            $query->whereIn('id_unit', $unitIds);
        })->get();
    
        // Passing the unitIds and the fetched kendaraan data to the view
        return view('mitra.pengembalian_kendaraan.form', compact('kendaraans'));
    }
    
    public function PengembalianKendaraanView()
    {
        $userId = Auth::user()->id_user;
    
        // Find the Mitra associated with the authenticated user
        $mitra = \App\Models\Mitra::where('id_user', $userId)->first();
    
        if (!$mitra) {
            return redirect()->back()->with('error', 'Mitra tidak ditemukan.');
        }
    
        $unitIds = [];
    
        // Collecting unitIds for which pengembalian can be done
        foreach ($mitra->kendaraans as $kendaraan) {
            foreach ($kendaraan->KendaraanToUnitKendaraan as $unitKendaraan) {
                foreach ($unitKendaraan->UnitkendaraanToDetailPemesanan as $detailPemesanan) {
                    $unitIds[] = $detailPemesanan->id_unit;
                }
            }
        }
    
        // Fetch the relevant data like nama_kendaraan
        $kendaraans = \App\Models\Kendaraan::whereIn('id_unit', $unitIds)->get();
    
        // Passing the unitIds and the fetched kendaraan data to the view
        return view('mitra.pengembalian_kendaraan.form', compact('kendaraans'));
    }
    

    
    public function storePengembalian(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_unit' => 'required|string',
            'id_pemesanan' => 'required|string',
            'kondisi_kendaraan' => 'required|string',
            'kilometer' => 'required|numeric',
            'foto_sebelum' => 'nullable|image',
            'foto_sesudah' => 'nullable|image',
            'catatan' => 'nullable|string',
        ]);

        // Cek apakah sudah ada data pengembalian untuk unit ini
        $pengembalian = Pengembalian::where('id_detail', $request->id_pemesanan)
            ->first();

        if ($pengembalian) {
            // Jika ada, hapus data pengembalian yang lama
            $pengembalian->delete();
            return redirect()->back()->with('success', 'Pengembalian kendaraan berhasil dihapus.');
        }

        // Jika tidak ada, buat pengembalian baru
        $pengembalian = new Pengembalian([
            'id_detail' => $request->id_pemesanan,
            'tanggal_pengembalian' => now(), // Waktu sekarang
            'kondisi_kendaraan' => $request->kondisi_kendaraan,
            'kilometer' => $request->kilometer,
            'foto_sebelum' => $request->hasFile('foto_sebelum') ? $request->file('foto_sebelum')->store('foto_pengembalian') : null,
            'foto_sesudah' => $request->hasFile('foto_sesudah') ? $request->file('foto_sesudah')->store('foto_pengembalian') : null,
            'catatan' => $request->catatan,
        ]);

        // Simpan data pengembalian
        $pengembalian->save();

        return redirect()->back()->with('success', 'Pengembalian kendaraan berhasil disimpan.');
    }
    
    
}
