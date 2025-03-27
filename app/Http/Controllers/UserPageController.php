<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function home()
    {
        $limitedKendaraan = Kendaraan::limit(5)->get();
        return view('home', compact('limitedKendaraan'));
    }

    public function about()
    {
        return view("about");
    }

    public function contactus()
    {
        return view("contactus");
    }

    public function profile()
    {
        $user = Auth::user();
        return view("profile", compact('user'));
    }
    public function history()
    {
        return view("history");
    }

    public function daftarKendaraan()
    {
        return view("listKendaraan");
    }

    public function daftarMitra()
    {
        return view("listMitra");
    }

    public function pemesanan()
    {
        return view("pemesanan");
    }
    public function review()
    {
        return view("review");
    }
    public function pembayaran()
    {
        return view("pembayaran");
    }
    public function buktiPembayaran()
    {
        return view("buktiPembayaran");
    }
    public function petunjukPembayaranTransfer()
    {
        return view("petunjukPembayaranTransfer");
    }
    public function buktiPenyewaanKendaraan()
    {
        return view("buktiPenyewaanKendaraan");
    }
}
