<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Mitra;

class AuthController extends Controller
{
  
public function register(Request $request)
{
    // Validasi input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|max:100|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
        'no_telepon' => 'required|string|max:15',
    ]);

    // Jika validasi gagal, kembalikan ke halaman register dengan error
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Simpan user ke database dengan UUID otomatis
    $user = User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash password
        'no_telepon' => $request->no_telepon,
        'role' => 'penyewa', // Default role = penyewa
        'is_active' => true
    ]);

    // Jika berhasil, redirect ke halaman login dengan pesan sukses
    return redirect()->route('loginView')->with('success', 'Registrasi berhasil! Silakan login.');
}

    public function registerMitra(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
        ]);

        // Jika validasi gagal, kembalikan ke halaman register dengan error
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan user ke database dengan UUID otomatis
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'no_hp' => $request->no_hp,
            'role' => 'penyewa', // Default role = user
            'is_active' => true
        ]);

        // Jika berhasil, redirect ke halaman login dengan pesan sukses
        return redirect()->route('loginView')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // public function registerMitra(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'nama_lengkap' => 'required|string|max:100',
    //         'email' => 'required|email|max:100|unique:users,email',
    //         'password' => 'required|string|min:6|confirmed',
    //         'no_hp' => 'required|string|max:15',
    //     ]);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     $user = User::create([
    //         'nama_lengkap' => $request->nama_lengkap,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'no_hp' => $request->no_hp,
    //         'role' => 'mitra',
    //         'is_active' => true
    //     ]);

    //     return redirect()->route('loginView')->with('success', 'Akun mitra berhasil dibuat! Silakan login.');
    // }
}
