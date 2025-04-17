<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Sopir;
use Illuminate\Http\Request;

class SupirPageController extends Controller
{
    public function supirmitraView()
    {
        $allSopir = Sopir::all();
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
