<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Refund extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'refund'; // Nama tabel

    protected $primaryKey = 'id_refund'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_pembayaran',
        'id_mitra',
        'jumlah_refund',
        'alasan_refund',
        'status_refund',
        'tanggal_refund',
        'bukti_refund',
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


    // Relasi ke Pembayaran (Setiap refund dimiliki oleh 1 pembayaran)
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }

    // Relasi ke Mitra (Setiap refund dimiliki oleh 1 mitra)
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }
}
