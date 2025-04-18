<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin Account
        User::create([
            'id_user' => Str::uuid(),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'admin',
            'no_telepon' => $this->generatePhoneNumber(),
        ]);

        // Mitra Account
        User::create([
            'id_user' => Str::uuid(),
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'mitra',
        ]);

        // Penyewa Account
        User::create([
            'id_user' => Str::uuid(),
            'email' => 'habel@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'penyewa',
        ]);
    }
}
