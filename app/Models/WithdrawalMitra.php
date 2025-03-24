<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class WithdrawalMitra extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'withdrawal_mitra'; // Nama tabel

    protected $primaryKey = 'id_withdrawal'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_mitra',
        'id_rekening_mitra',
        'jumlah',
        'status_withdrawal',
        'tanggal_withdrawal',
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

    // Relasi ke Mitra (Setiap withdrawal dimiliki oleh 1 mitra)
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke RekeningMitra (Setiap withdrawal dimiliki oleh 1 rekening mitra)
    public function rekeningMitra()
    {
        return $this->belongsTo(RekeningMitra::class, 'id_rekening_mitra', 'id_rekening_mitra');
    }
}
