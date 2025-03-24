<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class DetailPemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detail_pemesanan'; // Define table name

    protected $primaryKey = 'id_detail'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_pemesanan',
        'id_kendaraan',
        'id_sopir',
        'tanggal_mulai',
        'tanggal_selesai',
        'metode_pengantaran',
        'tipe_penggunaan_sopir',
        'lokasi_pengantaran',
        'biaya_pengantaran',
        'subtotal_harga',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
