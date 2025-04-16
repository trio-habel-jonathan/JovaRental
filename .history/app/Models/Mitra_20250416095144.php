<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Mitra extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'mitra';

    protected $primaryKey = 'id_mitra'; // Menentukan primary key
    public $incrementing = false;
    protected $keyType = 'string';


    protected $fillable = [
        'id_user',
        'tipe_mitra',
        'nama_mitra',
        'nama_pemilik',
        'no_identitas',
        'npwp',
        'no_telepon',
        'alamat',
        'status_verifikasi',
        'saldo',
        'foto_mitra',
        'is_active',
    ];



    protected $casts = [
        'is_active' => 'boolean',
    ];


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($mitra) {
            if (empty($mitra->{$mitra->getKeyName()})) {
                $mitra->{$mitra->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    // Relasi ke User (Setiap mitra dimiliki oleh 1 user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi ke Kendaraan (Setiap mitra bisa memiliki banyak kendaraan)
    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke Sopir (Setiap mitra bisa memiliki banyak sopir)
    public function sopirs()
    {
        return $this->hasMany(Sopir::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke Pemesanan (Setiap mitra bisa memiliki banyak pemesanan)
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke PendapatanMitra (Setiap mitra bisa memiliki banyak pendapatan)
    public function pendapatans()
    {
        return $this->hasMany(PendapatanMitra::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke WithdrawalMitra (Setiap mitra bisa memiliki banyak withdrawal)
    public function withdrawals()
    {
        return $this->hasMany(WithdrawalMitra::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke Refund (Setiap mitra bisa memiliki banyak refund)
    public function refunds()
    {
        return $this->hasMany(Refund::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke RekeningMitra (Setiap mitra bisa memiliki banyak rekening)
    public function rekenings()
    {
        return $this->hasMany(RekeningMitra::class, 'id_mitra', 'id_mitra');
    }
}
