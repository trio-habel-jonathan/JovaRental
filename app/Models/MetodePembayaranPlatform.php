<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class MetodePembayaranPlatform extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'metode_pembayaran_platform'; // Define table name

    protected $primaryKey = 'id_metode_pembayaran_platform'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'jenis_metode',
        'nama_metode',
        'nomor_rekening_platform',
        'nama_pemilik_platform',
        'deskripsi',
        'is_active',
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

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_metode_pembayaran_platform', 'id_metode_pembayaran_platform');
    }
}
