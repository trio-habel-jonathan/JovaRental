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
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    // Relasi ke Pemesanan (Setiap pembayaran dimiliki oleh 1 pemesanan)
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }

    // Relasi ke MetodePembayaranPlatform (Setiap pembayaran menggunakan 1 metode pembayaran platform)
    public function metodePembayaranPlatform()
    {
        return $this->belongsTo(MetodePembayaranPlatform::class, 'id_metode_pembayaran_platform', 'id_metode_pembayaran_platform');
    }

    // Relasi ke DetailFeePembayaran (Setiap pembayaran bisa memiliki banyak detail fee)
    public function detailFeePembayarans()
    {
        return $this->hasMany(DetailFeePembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }

    // Relasi ke Refund (Setiap pembayaran bisa memiliki banyak refund)
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'id_pembayaran', 'id_pembayaran');
    }
}
