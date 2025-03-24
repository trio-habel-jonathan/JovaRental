<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Pembayaran extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pembayaran'; // Define table name

    protected $primaryKey = 'id_pembayaran'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_pemesanan',
        'id_metode_pembayaran_platform',
        'total_bayar',
        'status_pembayaran',
        'tanggal_pembayaran',
        'bukti_pembayaran',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_pembayaran)) {
                $model->id_pembayaran = (string) Str::uuid();
            }
        });
    }


}
