<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupirPageController extends Controller
{
    public function supirmitraView()
    {
        return view('mitra.supir.index');
    }

    public function tambahsupir()
    {
        return view('mitra.supir.create');
    }

    public function editsupir()
    {
        return view('mitra.supir.edit');
    }
}
