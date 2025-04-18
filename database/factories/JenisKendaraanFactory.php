<?php

namespace Database\Factories;
// database/seeders/JenisKendaraanSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\JenisKendaraan;

class JenisKendaraanSeeder extends Seeder
{
    public function run(): void
    {
        JenisKendaraan::insert([
            [
                'id_jenis' => Str::uuid(),
                'nama_jenis' => 'Mobil',
                'deskripsi' => 'Kendaraan roda empat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jenis' => Str::uuid(),
                'nama_jenis' => 'Motor',
                'deskripsi' => 'Kendaraan roda dua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
