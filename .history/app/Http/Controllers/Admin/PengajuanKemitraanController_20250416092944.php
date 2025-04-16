<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Mitra, User};

class PengajuanKemitraanController extends Controller
{
    public function index(){
        $mitra = Mitra::all();
        $user = where($mitra->id_user);
    }
}
