<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\JenisKendaraan;
use App\Models\KategoriKendaraan;
use App\Models\Pengembalian;
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

    

    public function pengembalianKendaraan(){
        $userId = Auth::user()->id_user;
    
        $mitra = \App\Models\Mitra::where('id_user', $userId)->first();
    
        if (!$mitra) {
            return redirect()->back()->with('error', 'Mitra tidak ditemukan.');
        }
    
        $unitIds = [];
        $kendaraanDetails = [];
    
        // Iterate through the kendaraan and unit relationships
        foreach ($mitra->kendaraans as $kendaraan) {
            foreach ($kendaraan->KendaraanToUnitKendaraan as $unitKendaraan) {
                foreach ($unitKendaraan->UnitkendaraanToDetailPemesanan as $detailPemesanan) {
                    $unitIds[] = $detailPemesanan->id_unit;
                    
                    // Retrieve the corresponding 'nama_kendaraan' if exists
                    $kendaraanDetails[] = [
                        'id_unit' => $detailPemesanan->id_unit,
                        'nama_kendaraan' => $kendaraan->nama_kendaraan,
                        'id_pemesanan' => $detailPemesanan->id_pemesanan
                    ];
                }
            }
        }
    
        // Return the view with the unit IDs and kendaraan details
        return view('mitra.pengembalian_kendaraan.index', compact('kendaraanDetails'));
    }

    public function PengembalianKendaraanView($id_unit)
    {
        $userId = Auth::user()->id_user;
    
        // Find the Mitra associated with the authenticated user
        $mitra = \App\Models\Mitra::where('id_user', $userId)->first();
    
        if (!$mitra) {
            return redirect()->back()->with('error', 'Mitra tidak ditemukan.');
        }
    
        // Check if the unit exists in the Mitra's vehicles (kendaraans)
        $kendaraan = $mitra->kendaraans()->whereHas('KendaraanToUnitKendaraan', function ($query) use ($id_unit) {
            $query->whereHas('UnitkendaraanToDetailPemesanan', function ($query) use ($id_unit) {
                $query->where('id_unit', $id_unit);
            });
        })->first();
    
        if (!$kendaraan) {
            return redirect()->back()->with('error', 'Kendaraan tidak ditemukan untuk pengembalian.');
        }
    
        // Fetch the unit details for the selected kendaraan
        $unitDetails = $kendaraan->KendaraanToUnitKendaraan->first()->UnitkendaraanToDetailPemesanan;
    
        // Pass the relevant data to the view, including id_unit
        return view('mitra.pengembalian_kendaraan.form', compact('kendaraan', 'unitDetails', 'id_unit'));
    }
    

    

    
    public function storePengembalian(Request $request, $id_unit)
    {
        // Validasi input
        $request->validate([
            'id_unit' => 'required|string',
            'id_pemesanan' => 'required|string',
            'kondisi_kendaraan' => 'required|string',
            'kilometer' => 'required|numeric',
            'foto_sebelum' => 'nullable|image|mimes:jpg,jpeg,png|max:8048',
            'foto_sesudah' => 'nullable|image|mimes:jpg,jpeg,png|max:8048',
            'catatan' => 'nullable|string',
        ]);
    
        // Debug: Show input data
        return response()->json([
            'status' => 'debug',
            'input_data' => $request->all()
        ]);
    
        // Cek apakah sudah ada pengembalian untuk id_detail ini
        $existing = \App\Models\Pengembalian::where('id_detail', $request->id_pemesanan)->first();
    
        if ($existing) {
            $existing->delete(); // Hapus data lama
            return response()->json([
                'status' => 'success',
                'message' => 'Data pengembalian lama berhasil dihapus.'
            ]);
        }
    
        // Fetch the related id_detail (through relationships)
        $detailPemesanan = \App\Models\DetailPemesanan::where('id_unit', $id_unit)
            ->where('id_pemesanan', $request->id_pemesanan)
            ->first();
    
        // Debug: Check if detailPemesanan is found
        if (!$detailPemesanan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Detail pemesanan tidak ditemukan.',
                'id_unit' => $id_unit,
                'id_pemesanan' => $request->id_pemesanan
            ]);
        }
    
        // Debug: Check the value of id_detail
        $id_detail = $detailPemesanan->id_detail;
    
        // Return the id_detail for debugging
        return response()->json([
            'status' => 'debug',
            'id_detail' => $id_detail
        ]);
    
        // Simpan file jika ada
        $fotoSebelum = $request->hasFile('foto_sebelum') ? $request->file('foto_sebelum')->store('foto_pengembalian') : null;
        $fotoSesudah = $request->hasFile('foto_sesudah') ? $request->file('foto_sesudah')->store('foto_pengembalian') : null;
    
        // Debug: Check if files are being uploaded
        return response()->json([
            'status' => 'debug',
            'foto_sebelum' => $fotoSebelum,
            'foto_sesudah' => $fotoSesudah
        ]);
    
        // Buat entri pengembalian baru
        $pengembalian = new \App\Models\Pengembalian([
            'id_detail' => $id_detail, // Set the id_detail here
            'tanggal_pengembalian' => now(),
            'kondisi_kendaraan' => $request->kondisi_kendaraan,
            'kilometer' => $request->kilometer,
            'foto_sebelum' => $fotoSebelum,
            'foto_sesudah' => $fotoSesudah,
            'catatan' => $request->catatan,
        ]);
    
        // Debug: Check the data before saving
        return response()->json([
            'status' => 'debug',
            'pengembalian_data' => $pengembalian
        ]);
    
        $pengembalian->save(); // Simpan ke database
    
        return response()->json([
            'status' => 'success',
            'message' => 'Pengembalian kendaraan berhasil disimpan.',
            'pengembalian' => $pengembalian
        ]);
    }
    


      
    
}
