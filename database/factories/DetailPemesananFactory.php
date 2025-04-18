<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPemesanan>
 */
class DetailPemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_detail' => Str::uuid(),
            'id_pemesanan' => \App\Models\Pemesanan::factory(),
            'id_unit' => \App\Models\UnitKendaraan::factory(),
            'id_unit_kendaraan' => Str::uuid(),
            'id_sopir' => null,
            'metode_pengantaran' => $this->faker->randomElement(['diantar', 'ambil_di_tempat']),
            'tipe_penggunaan_sopir' => $this->faker->randomElement(['tanpa_sopir', 'dengan_sopir']),
            'tanggal_mulai' => $this->faker->dateTimeBetween('now', '+1 week'),
            'tanggal_kembali' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'lokasi_pengambilan' => $this->faker->address,
            'lat_pengambilan' => $this->faker->latitude,
            'long_pengambilan' => $this->faker->longitude,
            'lokasi_pengembalian' => $this->faker->address,
            'lat_pengembalian' => $this->faker->latitude,
            'long_pengembalian' => $this->faker->longitude,
            'biaya_pengantaran' => $this->faker->randomFloat(2, 0, 100000),
            'subtotal_harga' => $this->faker->randomFloat(2, 200000, 1000000),
            'biaya_layanan' => 0,
            'pajak' => 0,
            'biaya_supir' => 0,
            'created_at' => now(),
        ];
    }
}
