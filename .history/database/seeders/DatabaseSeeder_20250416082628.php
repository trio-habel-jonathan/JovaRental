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
            'id' => Str::uuid(),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'admin',
            'no_telepon' => $this->generatePhoneNumber(),
        ]);

        // Mitra Account
        User::create([
            'id' => Str::uuid(),
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'mitra',
            'no_telepon' => $this->generatePhoneNumber(),
        ]);

        // Penyewa Account
        User::create([
            'id' => Str::uuid(),
            'email' => 'habel@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'penyewa',
            'no_telepon' => $this->generatePhoneNumber(),
        ]);
    }

    /**
     * Generate random Indonesian phone number starting with 08.
     */
    private function generatePhoneNumber(): string
    {
        return '08' . rand(1000000000, 9999999999);
    }
}
