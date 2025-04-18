<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlamatMitra>
 */
class AlamatMitraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_alamat' => Str::uuid(),
            'id_mitra' => \App\Models\Mitra::factory(),
            'alamat' => $this->faker->address,
            'no_telepon' => $this->faker->unique()->phoneNumber,
            'kota' => $this->faker->city,
            'kecamatan' => $this->faker->citySuffix,
            'provinsi' => $this->faker->state,
            'kode_pos' => $this->faker->postcode,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
