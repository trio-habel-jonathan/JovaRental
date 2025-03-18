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


        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
            'foto_profil' => 'nullable|image|mimes:jpg,png,jpeg|max:2048' // Maksimal 2MB
        ]);

        // Jika validasi gagal, kembali ke halaman register dengan error
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Upload foto profil jika ada
        $fotoProfilPath = null;
        if ($request->hasFile('foto_profil')) {
            $fotoProfilPath = $request->file('foto_profil')->store('profile_pictures', 'public');
        }

        // Simpan user ke database dengan role default 'user'
        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'no_hp' => $request->no_hp,
            'role' => 'user', // Default role = user
            'alamat' => $request->alamat,
            'foto_profil' => $fotoProfilPath,
            'is_active' => true
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('loginView')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function registerMitra(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'no_hp' => 'required|string|max:15',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'role' => 'mitra',
            'is_active' => true
        ]);
    
        return redirect()->route('loginView')->with('success', 'Akun mitra berhasil dibuat! Silakan login.');
    }
    

}
