<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};

use App\Models\Mitra;

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
        return view('admin.clasifications.index');
    }

    public function createKategoriView()
    {
        return view('admin.clasifications.createKategori');
    }
    public function editKategoriView()
    {
        return view('admin.clasifications.editKategori');
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
