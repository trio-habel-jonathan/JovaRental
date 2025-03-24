<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class DetailFeePembayaran extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detail_fee_pembayaran'; // Nama tabel

    protected $primaryKey = 'id_detail_fee'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_pembayaran',
        'id_fee',
        'keterangan',
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

    // Relasi ke Pembayaran (Setiap detail fee pembayaran dimiliki oleh 1 pembayaran)
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }

    // Relasi ke FeeSetting (Setiap detail fee pembayaran dimiliki oleh 1 fee setting)
    public function feeSetting()
    {
        return $this->belongsTo(FeeSetting::class, 'id_fee', 'id_fee');
    }
}
