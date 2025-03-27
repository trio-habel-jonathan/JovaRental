<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};
use App\Models\Mitra;
use App\Models\KategoriKendaraan;
use App\Models\JenisKendaraan;

class AdminPageController extends Controller
{
    public function indexView()
    {
        return view('admin.index');
    }

    public function settingsView()
    {
        return view('admin.settings');
    }

    public function userView()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.user.index', compact('users'));
    }

    public function adduserView()
    {
        return view('admin.user.add');
    }

    public function edituserView($id_user)
    {
        $user = User::where('id_user', $id_user)->firstOrFail();
        return view('admin.user.edit', compact('user'));
    }

    public function mitraView()
    {
        $allmitra = Mitra::all();
        return view('admin.mitra.index', compact('allmitra'));
    }

    public function detailmitraView()
    {
        return view('admin.mitra.detail');
    }

    public function clasificationsView()
    {
        $allKategori = KategoriKendaraan::all();
        $allJenis = JenisKendaraan::all();
        return view('admin.clasifications.index', compact('allKategori', 'allJenis'));
    }

    public function createKategoriView()
    {
        $allJenis = JenisKendaraan::all();
        return view('admin.clasifications.createKategori', compact('allJenis'));
    }
    public function editKategoriView($uuid)
    {
        $kategori = KategoriKendaraan::findOrFail($uuid);
        $allJenis = JenisKendaraan::all();
        return view('admin.clasifications.editKategori', compact('allJenis', 'kategori'));
    }

    public function createJenisView()
    {
        return view('admin.clasifications.createJenis');
    }

    public function editJenisView()
    {
        return view('admin.clasifications.editJenis');
    }
}
