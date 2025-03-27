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
        // Log all request data for debugging
        \Log::info('Full Request Data', [
            'all' => $request->all(),
            'id_user' => $id_user,
        ]);
    
        try {
            $user = User::where('id_user', $id_user)->firstOrFail();
    
            // Log user data before update
            \Log::info('User Data Before Update', [
                'user' => $user->toArray(),
            ]);
    
            // Validate the request
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users,email,' . $user->id_user . ',id_user',
                'name' => 'required|max:100',
                'no_telepon' => 'required|min:10|max:15',
                'role' => 'required|in:penyewa,admin,mitra',
                'foto_profil' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
                'password' => 'nullable|min:6|confirmed',
                'is_verified' => 'nullable|in:0,1'
            ]);
    
            // Prepare data for update
            $data = $request->except(['password', 'password_confirmation', 'foto_profil']);
    
            // Password update with confirmation
            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->password);
            }
    
            // Profile picture handling
            if ($request->hasFile('foto_profil')) {
                // Delete old profile picture
                if ($user->foto_profil) {
                    Storage::disk('public')->delete($user->foto_profil);
                }
    
                $file = $request->file('foto_profil');
                $path = $file->store('profile_pictures', 'public');
                $data['foto_profil'] = $path;
            }
    
            // Verification status
            $data['is_verified'] = $request->input('is_verified') == 1 ? now() : null;
    
            // Log data to be updated
            \Log::info('Update Data', $data);
    
            // Perform the update
            $updateResult = $user->update($data);
    
            // Log update result
            \Log::info('Update Result', [
                'result' => $updateResult,
                'updated_user' => $user->fresh()->toArray()
            ]);
    
            return redirect()->route('admin.user.userView')
                ->with('success', 'User successfully updated.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            \Log::error('Validation Error', [
                'errors' => $e->errors(),
                'request_data' => $request->all()
            ]);
    
            return back()
                ->withErrors($e->errors())
                ->withInput();
    
        } catch (\Exception $e) {
            // Log any other unexpected errors
            \Log::error('Update Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);
    
            return back()
                ->with('error', 'An error occurred: ' . $e->getMessage());
        }
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