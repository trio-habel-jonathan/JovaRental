<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Pemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pemesanan'; // Define table name

    protected $primaryKey = 'id_pemesanan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_entitas_penyewa',
        'id_mitra',
        'perwakilan_penyewa',
        'kontak_perwakilan',
        'tanggal_pemesanan',
        'lokasi_pengambilan',
        'lokasi_pengembalian',
        'total_harga',
        'status_pemesanan',
        'catatan',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_pemesanan)) {
                $model->id_pemesanan = (string) Str::uuid();
            }
        });
    }
}
