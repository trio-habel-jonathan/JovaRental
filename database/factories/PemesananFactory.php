<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemesanan>
 */
class PemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pemesanan' => Str::uuid(),
            'id_entitas_penyewa' => \App\Models\EntitasPenyewa::factory(),
            'id_mitra' => \App\Models\Mitra::factory(),
            'perwakilan_penyewa' => $this->faker->name,
            'kontak_perwakilan' => $this->faker->phoneNumber,
            'tanggal_pemesanan' => now(),
            'total_harga' => 0,
            'status_pemesanan' => 'pending',
            'catatan' => $this->faker->optional()->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
