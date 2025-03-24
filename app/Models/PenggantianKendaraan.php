<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class PenggantianKendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'penggantian_kendaraan'; // Nama tabel

    protected $primaryKey = 'id_penggantian'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_detail',
        'id_kendaraan_lama',
        'id_kendaraan_baru',
        'tanggal_penggantian',
        'alasan_penggantian',
        'status_penggantian',
    ];

    /**
     * Override boot method untuk generate UUID secara otomatis.
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
