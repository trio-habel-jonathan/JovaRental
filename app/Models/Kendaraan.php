<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Kendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kendaraan'; // Define table name

    protected $primaryKey = 'id_kendaraan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
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

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_kendaraan)) {
                $model->id_kendaraan = (string) Str::uuid();
            }
        });
    }
}
