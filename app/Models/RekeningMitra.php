<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class RekeningMitra extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'rekening_mitra'; // Nama tabel

    protected $primaryKey = 'id_rekening_mitra'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_mitra',
        'id_metode_pembayaran_mitra',
        'nomor_rekening',
        'nama_pemilik',
        'is_default',
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

    // Relasi ke Mitra (Setiap rekening mitra dimiliki oleh 1 mitra)
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke MetodePembayaranMitra (Setiap rekening mitra dimiliki oleh 1 metode pembayaran mitra)
    public function metodePembayaranMitra()
    {
        return $this->belongsTo(MetodePembayaranMitra::class, 'id_metode_pembayaran_mitra', 'id_metode_pembayaran_mitra');
    }

    // Relasi ke WithdrawalMitra (Setiap rekening mitra bisa memiliki banyak withdrawal)
    public function withdrawalMitras()
    {
        return $this->hasMany(WithdrawalMitra::class, 'id_rekening_mitra', 'id_rekening_mitra');
    }
}
