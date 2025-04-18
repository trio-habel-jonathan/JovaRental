<?php
namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntitasPenyewa>
 */
class EntitasPenyewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipeEntitas = $this->faker->randomElement(['individu', 'perusahaan']);
        
        return [
            'id_entitas_penyewa' => Str::uuid(),
            'id_user' => \App\Models\User::factory(),
            'tipe_entitas' => $tipeEntitas,
            'nama_entitas' => $this->faker->company,
            'no_identitas' => $tipeEntitas === 'individu'
                ? $this->faker->numerify('################') // 16 digit NIK
                : $this->faker->numerify('###########'),    // 13 digit NIB
            'npwp' => $this->faker->optional()->numerify('##.###.###.#-###.###'),
            'alamat' => $this->faker->address,
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

