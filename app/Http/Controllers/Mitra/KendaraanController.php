<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{

    public function tambahkendaraan()
    {
        return view('mitra.kendaraan.create');
    }

    public function editkendaraan()
    {
        return view('mitra.kendaraan.edit');
    }
}
