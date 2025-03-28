<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksiSaldo extends Model
{
    protected $table = 'riwayat_transaksi_saldo';
    protected $primaryKey = 'id_transaksi_saldo';
    
    public $incrementing = false;
    
    // Specify the key type as UUID
    protected $keyType = 'string';

    protected $fillable = [
        'id_transaksi_saldo',
        'id_pembayaran',
        'id_mitra',
        'nominal_transaksi',
        'status_transaksi',
        'waktu_transaksi',
    ];



    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }

    
}
