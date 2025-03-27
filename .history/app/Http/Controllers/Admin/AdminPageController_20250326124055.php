<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};


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

    public function edituserView(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    

    public function mitraView()
    {
        return view('admin.mitra.index');
    }

    public function detailmitraView()
    {
        return view('admin.mitra.detail');
    }
}
