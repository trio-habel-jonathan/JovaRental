<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalMitraController extends Controller
{
    public function withdrawPage(){
        return view('mitra.with')
    }
}