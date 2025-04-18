<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitra>
 */
class MitraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $tipeMitra = $this->faker->randomElement(['individu', 'perusahaan']);
    
    return [
        'id_mitra' => Str::uuid(),
        'id_user' => \App\Models\User::factory(),
        'tipe_mitra' => $tipeMitra,
        'nama_mitra' => $this->faker->company,
        'nama_pemilik' => $this->faker->name,
        'no_identitas' => $tipeMitra === 'individu'
            ? $this->faker->numerify('################') // 16 digit NIK
            : $this->faker->numerify('###########'),    // 13 digit NIB contoh
        'npwp' => $this->faker->optional()->numerify('##.###.###.#-###.###'),
        'status_verifikasi' => 'verified',
        'saldo' => 0,
        'foto_mitra' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ];
}
    
}
