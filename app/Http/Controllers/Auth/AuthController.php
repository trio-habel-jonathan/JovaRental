<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EntitasPenyewa;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Mitra;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => ' required|string|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            $entity = EntitasPenyewa::where('id_user', '=', $user->id_user)->first();

            if ($user->role == 'admin') {
                return redirect()->route('admin.indexView')->with('success', "Welcome admin");
            } elseif ($user->role == 'mitra') {
                return redirect()->route('mitra.indexView')->with('success', "Welcome mitra");
            } else {
                if ($entity) {
                    return redirect()->route('home')->with('success', "Welcome mitra");
                }
                return redirect()->route('sewaSebagai')->with('success', "Welcome mitra");
            }
        }
    }
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
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
        ]);

        return redirect()->route('login')->with('success', 'Your account successfuly registered, please login');
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
            'password' => Hash::make($request->password),
            'role' => 'penyewa',
        ]);

        return redirect()->route('sewaSebagai')->with('success', 'Akun mitra berhasil dibuat! Silakan login.');
    }

    public function entitas(Request $request)
    {
        $validation = $request->validate([
            'nama_entitas' => 'required|string',
            'no_identitas' => 'required|string',
            'npwp' => 'string',
            'alamat' => 'required|string',
        ]);

        $entitas = EntitasPenyewa::create([
            'id_user' => auth()->user()->id_user,
            'tipe_entitas' => $request->tipe_entitas,
            'nama_entitas' => $request->nama_entitas,
            'no_identitas' => $request->no_identitas,
            'npwp' => $request->npwp,
            'alamat' => $request->alamat,
            'is_active' => True,
        ]);

        if ($entitas) {
            return redirect()->route('home')->with('success', 'Your account data completed');
        }
        return back()->with('success', 'Your account data completed');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('success', 'Logout Berhasil');
    }
}
