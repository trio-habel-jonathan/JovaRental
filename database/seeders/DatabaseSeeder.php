<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mitra;
use App\Models\AlamatMitra;
use App\Models\Kendaraan;
use App\Models\UnitKendaraan;
use App\Models\EntitasPenyewa;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\KategoriKendaraan;
use App\Models\JenisKendaraan;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // --- Jenis Kendaraan ---
        $idJenis = JenisKendaraan::create([
            'id_jenis' => Str::uuid(),
            'nama_jenis' => 'Mobil',
            'deskripsi' => 'Kendaraan roda empat',
            'created_at' => now(),
            'updated_at' => now(),
        ])->id_jenis;

        // --- Kategori Kendaraan ---
        $idKategori = KategoriKendaraan::create([
            'id_kategori' => Str::uuid(),
            'id_jenis' => $idJenis, // Pastikan id_jenis valid
            'nama_kategori' => 'SUV',
            'deskripsi' => 'Sport Utility Vehicle',
            'created_at' => now(),
            'updated_at' => now(),
        ])->id_kategori;

        // --- Users ---
        User::factory(10)->create();

        // --- Mitra, Kendaraan, Unit Kendaraan ---
        Mitra::factory(10)->create()->each(function ($mitra) use ($idKategori) {
            AlamatMitra::factory()->create([
                'id_mitra' => $mitra->id_mitra,
            ]);
            
            // 2 Kendaraan per Mitra
            Kendaraan::factory(2)->create([ 
                'id_mitra' => $mitra->id_mitra,
                'id_kategori' => $idKategori, // Pastikan id_kategori valid
            ])->each(function ($kendaraan) use ($mitra) {
                // Ambil alamat mitra secara acak
                $alamatMitra = $mitra->alamatMitra()->inRandomOrder()->first();

                // 2 Unit Kendaraan per kendaraan
                for ($i = 0; $i < 2; $i++) {
                    UnitKendaraan::factory()->create([
                        'id_kendaraan' => $kendaraan->id_kendaraan,
                        'id_alamat_mitra' => $alamatMitra ? $alamatMitra->id_alamat : AlamatMitra::inRandomOrder()->first()->id_alamat,
                    ]);
                }
            });
        });

        // --- Entitas Penyewa dan Pemesanan ---
        EntitasPenyewa::factory(10)->create()->each(function ($penyewa) {
            $mitra = Mitra::inRandomOrder()->first();

            $pemesanan = Pemesanan::factory()->create([
                'id_entitas_penyewa' => $penyewa->id_entitas_penyewa,
                'id_mitra' => $mitra->id_mitra,
            ]);

            // 2 detail pemesanan per pemesanan
            $unit = UnitKendaraan::inRandomOrder()->limit(2)->get();
            foreach ($unit as $u) {
                DetailPemesanan::factory()->create([
                    'id_pemesanan' => $pemesanan->id_pemesanan,
                    'id_unit' => $u->id_unit,
                    'id_unit_kendaraan' => $u->id_unit, // Pastikan ini sesuai
                ]);
            }
        });
    }
}

// namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      */
//     public function run(): void
//     {
//         // Admin Account
//         User::create([
//             'id_user' => Str::uuid(),
//             'email' => 'admin@gmail.com',
//             'password' => Hash::make('1234567890'),
//             'role' => 'admin',
//             'no_telepon' => $this->generatePhoneNumber(),
//         ]);

//         // Mitra Account
//         User::create([
//             'id_user' => Str::uuid(),
//             'email' => 'mitra@gmail.com',
//             'password' => Hash::make('1234567890'),
//             'role' => 'mitra',
//             'no_telepon' => $this->generatePhoneNumber(),
//         ]);

//         // Penyewa Account
//         User::create([
//             'id_user' => Str::uuid(),
//             'email' => 'habel@gmail.com',
//             'password' => Hash::make('1234567890'),
//             'role' => 'penyewa',
//             'no_telepon' => $this->generatePhoneNumber(),
//         ]);
//     }

//     /**
//      * Generate random Indonesian phone number starting with 08.
//      */
//     private function generatePhoneNumber(): string
//     {
//         return '08' . rand(1000000000, 9999999999);
//     }
// }
