<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class PendapatanMitra extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pendapatan_mitra'; // Nama tabel

    protected $primaryKey = 'id_pendapatan'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_mitra',
        'id_pemesanan',
        'jumlah_pendapatan',
        'keterangan',
        'tanggal_pendapatan',
    ];

    /**
     * Override boot method untuk generate UUID secara otomatis.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_pendapatan)) {
                $model->id_pendapatan = (string) Str::uuid();
            }
        });
    }
}
