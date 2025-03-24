<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function registerMitraView()
    {
        return view('auth.registerMitra');
    }


    public function passwordView()
    {
        return view('auth.confirmPassword');
    }

    public function forgotPasswordView()
    {
        return view('auth.forgotPassword');
    }

    public function sewaSebagai()
    {
        return view("auth.sewaSebagai");
    }

    public function entityForm(Request $request)
    {
        // $validation = $request->validate([
        //     'nama_entitas' => 'required|string',
        //     'no_indentitas' => 'required|numeric',
        //     'no_telepon' => 'required|string|min:11|max:13',
        //     'alamat' => 'reqiured|string'
        // ]);

        return view('auth.enitityForm');
    }
}
