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

}
