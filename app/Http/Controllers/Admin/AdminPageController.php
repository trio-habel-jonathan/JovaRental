<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.user.index');
    }

    public function adduserView()
    {
        return view('admin.user.add');
    }

    public function edituserView()
    {
        return view('admin.user.edit');
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
