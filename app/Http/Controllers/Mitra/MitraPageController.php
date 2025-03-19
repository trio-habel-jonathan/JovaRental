<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraPageController extends Controller
{
    public function kendaraanmitraView()
    {
        return view('mitra.kendaraan.index');
    }

    public function tambahkendaraan()
    {
        return view('mitra.kendaraan.create');
    }

    public function editkendaraan()
    {
        return view('mitra.kendaraan.edit');
    }
}
