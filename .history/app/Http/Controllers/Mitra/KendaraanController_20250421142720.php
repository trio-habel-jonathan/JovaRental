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

    // Pass the relevant data to the view
    return view('mitra.pengembalian_kendaraan.form', compact('kendaraan', 'unitDetails'));
}

    

    
public function storePengembalian(Request $request, $id_unit)
{
    // Cari unit
    $unit = \App\Models\UnitKendaraan::findOrFail($id_unit);

    // Ambil detail pemesanan TERBARU (atau yang masih aktif, sesuaikan)
    $detail = $unit->UnitkendaraanToDetailPemesanan()->latest()->first();

    if (!$detail) {
        return response()->json([
            'status' => 'error',
            'message' => 'Tidak ditemukan detail pemesanan untuk unit ini.'
        ]);
    }

    $id_detail = $detail->id;
    $id_pemesanan = $detail->pemesanan->id; // kalau perlu

    // Validasi input
    $validated = $request->validate([
        'kondisi_kendaraan' => 'required|string',
        'kilometer' => 'required|numeric',
        'foto_sebelum' => 'nullable|image|mimes:jpg,jpeg,png|max:8048',
        'foto_sesudah' => 'nullable|image|mimes:jpg,jpeg,png|max:8048',
        'catatan' => 'nullable|string',
    ]);

    // Cek existing pengembalian
    $existing = \App\Models\Pengembalian::where('id_detail', $id_detail)->first();

    if ($existing) {
        $existing->delete(); // Hapus data lama
        return response()->json([
            'status' => 'success',
            'message' => 'Data pengembalian lama berhasil dihapus.'
        ]);
    }

    // Simpan foto jika ada
    $fotoSebelum = $request->hasFile('foto_sebelum') ? $request->file('foto_sebelum')->store('foto_pengembalian') : null;
    $fotoSesudah = $request->hasFile('foto_sesudah') ? $request->file('foto_sesudah')->store('foto_pengembalian') : null;

    // Simpan data
    $pengembalian = new \App\Models\Pengembalian([
        'id_detail' => $id_detail,
        'tanggal_pengembalian' => now(),
        'kondisi_kendaraan' => $validated['kondisi_kendaraan'],
        'kilometer' => $validated['kilometer'],
        'foto_sebelum' => $fotoSebelum,
        'foto_sesudah' => $fotoSesudah,
        'catatan' => $validated['catatan'],
    ]);

    $pengembalian->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Pengembalian berhasil disimpan.',
        'data' => $pengembalian
    ]);
}


      
    
}
