<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'name' => 'required|max:100',
            'no_telepon' => 'required|min:10|max:15',
            'role' => 'required|in:admin,penyewa,mitra',
            'foto_profil' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['id_user'] = Str::uuid()->toString(); // Manually generate UUID

        // Handle file upload for profile picture
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $path = $file->store('profile_pictures', 'public');
            $data['foto_profil'] = $path;
        }

        // Set verified status based on radio button
        $data['is_verified'] = $request->input('verified') == 1 ? now() : null;

        User::create($data);

        return redirect()->route('admin.user.userView')->with('success', 'User berhasil ditambahkan.');
    }
}