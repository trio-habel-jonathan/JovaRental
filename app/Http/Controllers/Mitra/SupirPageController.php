<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Sopir;
use Illuminate\Http\Request;

class SupirPageController extends Controller
{
    public function supirmitraView()
    {
        $allSopir = Sopir::withCount([
            'detailPemesanans as total_mengemudi' => function($query){
                $query->where('tipe_penggunaan_sopir', 'dengan_sopir');
            },
            'detailPemesanans as total_mengantar' => function($query) {
                $query->where('metode_pengantaran', 'diantar');
            }
        ])->get();
        return view('mitra.supir.index', compact('allSopir'));
    }

    public function tambahsupir()
    {
        return view('mitra.supir.create');
    }

    public function editsupir()
    {
        return view('mitra.supir.edit');
    }

    public function editsupirView($id)
    {
        $sopir = Sopir::where('id_sopir', $id)->first();
        if (!$sopir) {
            return redirect()->route('mitra.supir.index')->with('error', 'Data supir tidak ditemukan');
        }
        return view('mitra.supir.edit', compact('sopir'));
    }
}
