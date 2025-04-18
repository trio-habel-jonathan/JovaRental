<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kendaraan' => Str::uuid(),
            'id_mitra' => \App\Models\Mitra::factory(),
            'id_kategori' => Str::uuid(), // sementara dummy UUID, sesuaikan nanti
            'nama_kendaraan' => $this->faker->word,
            'tahun_produksi' => $this->faker->year,
            'transmisi' => $this->faker->randomElement(['manual', 'automatic']),
            'cubic_centimeter' => $this->faker->numberBetween(1000, 2500),
            'jumlah_kursi' => $this->faker->numberBetween(4, 8),
            'harga_sewa_perhari' => $this->faker->numberBetween(200000, 1000000),
            'deskripsi' => $this->faker->paragraph,
            'fotos' => null,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
