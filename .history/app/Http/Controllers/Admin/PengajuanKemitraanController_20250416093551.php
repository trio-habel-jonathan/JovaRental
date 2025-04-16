<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Mitra, User};

class PengajuanKemitraanController extends Controller
{
    public function index(){
        $mitraPenyewa = Mitra::whereHas('user', function ($query) {
            $query->where('role', 'penyewa');
        })->with('user')->get();
        

        return view ('admin.mitra.pengajuan', 'compact');
    }
}
