<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function home()
    {
        return view('home');
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
        return view("profile");
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
