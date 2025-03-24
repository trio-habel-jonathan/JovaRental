<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class MetodePembayaranMitra extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'metode_pembayaran_mitra'; // Nama tabel

    protected $primaryKey = 'id_metode_pembayaran_mitra'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'nama_metode',
        'deskripsi',
        'is_active',
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

    public function rekeningMitras()
    {
        return $this->hasMany(RekeningMitra::class, 'id_metode_pembayaran_mitra', 'id_metode_pembayaran_mitra');
    }
}
