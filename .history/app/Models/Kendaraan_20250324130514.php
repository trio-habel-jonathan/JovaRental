<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kendaraan'; // Define table name

    protected $primaryKey = 'id_kendaraan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_kendaraan',
        'id_mitra',
        'id_kategori',
        'nama_kendaraan',
        'plat_nomor',
        'tahun_produksi',
        'warna',
        'transmisi',
        'jumlah_kursi',
        'harga_sewa_per_jam',
        'deskripsi',
        'status_kendaraan',
        'fotos',
        'is_active',
    ];
}
