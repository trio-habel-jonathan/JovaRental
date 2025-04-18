<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnitKendaraan>
 */
class UnitKendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_unit' => Str::uuid(),
            'id_kendaraan' => \App\Models\Kendaraan::factory(),
            'id_alamat_mitra' => \App\Models\AlamatMitra::factory(),
            'plat_nomor' => strtoupper($this->faker->bothify('B #### ??')),
            'status_unit_kendaraan' => 'tersedia',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
