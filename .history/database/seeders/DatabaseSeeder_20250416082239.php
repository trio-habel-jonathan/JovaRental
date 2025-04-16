<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin Account
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'admin',
        ]);

        // Mitra Account
        User::create([
            'name' => 'mitra_' . fake()->userName(),
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'mitra',
        ]);

        // Penyewa/User Account
        User::create([
            'name' => 'penyewa_' . fake()->userName(),
            'email' => 'habel@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'penyewa',
        ]);
    }
}
