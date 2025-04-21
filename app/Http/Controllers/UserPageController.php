<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\EntitasPenyewa;
use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $user = auth()->user();
        $entitas = EntitasPenyewa::where('id_user', $user->id_user)->first();

        return view('profile', [
            'user' => $user,
            'entitas' => $entitas
        ]);
    }

    public function history()
    {
        $user = Auth::user();
        
        $entitasPenyewa = EntitasPenyewa::where('id_user', $user->id_user)->first();
        
        $pemesanan = $entitasPenyewa 
            ? Pemesanan::where('id_entitas_penyewa', $entitasPenyewa->id_entitas_penyewa)->get()
            : collect();
        
        return view("profile", compact('pemesanan'));
    }
    public function settings()
    {
        $user = Auth::user();
        return view("profile", compact('user'));
    }

    public function daftarKendaraan()
    {
        return view("listKendaraan");
    }

    public function searchJadwal()
    {
      
        return view("search");
    }
    
    public function daftarMitra()
    {
        $allMitra = Mitra::all();
        return view("listMitra", compact('allMitra'));
    }

    public function pemesanan()
    {
        return view("pemesanan");
    }

    public function pesanKendaraan()
    {
        return view("pesanKendaraan");
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
