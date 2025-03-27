<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Add this line to import the Str class


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


    public function update(Request $request, $id_user)
    {
        $user = User::where('id_user', $id_user)->firstOrFail();

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id_user . ',id_user',
            'name' => 'required|max:100',
            'no_telepon' => 'required|min:10|max:15',
            'role' => 'required|in:admin,penyewa,mitra',
            'foto_profil' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->except(['password', 'foto_profil']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika ada
            if ($user->foto_profil) {
                \Storage::disk('public')->delete($user->foto_profil);
            }

            $file = $request->file('foto_profil');
            $path = $file->store('profile_pictures', 'public');
            $data['foto_profil'] = $path;
        }

        $data['is_verified'] = $request->input('verified') == 1 ? now() : null;

        $user->update($data);

        return redirect()->route('admin.user.userView')->with('success', 'User berhasil diperbarui.');
    }


    public function destroy($id_user)
    {
        try {
            $user = User::findOrFail($id_user);
            
            // Optional: Delete profile picture if it exists
            if ($user->foto_profil) {
                \Storage::disk('public')->delete($user->foto_profil);
            }
            
            $user->delete();

            return redirect()->route('admin.user.userView')
                ->with('success', 'User berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.user.userView')
                ->with('error', 'Gagal menghapus user: ' . $e->getMessage());
        }
    }
}