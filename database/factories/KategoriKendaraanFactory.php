<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JenisKendaraan;
use App\Models\KategoriKendaraan;

class KategoriKendaraanSeeder extends Seeder
{
    public function run(): void
    {
        $idJenis = JenisKendaraan::first()?->id_jenis;

        KategoriKendaraan::insert([
            [
                'id_kategori' => Str::uuid(),
                'id_jenis' => $idJenis,
                'nama_kategori' => 'SUV',
                'deskripsi' => 'Sport Utility Vehicle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
