<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class EntitasPenyewa extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'entitas_penyewa'; // Define table name

    protected $primaryKey = 'id_entitas_penyewa'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_user',
        'tipe_entitas',
        'nama_entitas',
        'no_identitas',
        'npwp',
        'alamat',
        'is_active',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            if (empty($user->{$user->getKeyName()})) {
                $user->{$user->getKeyName()} = (string) Str::uuid();
            }
        });
    }


    // Relasi ke User (Setiap entitas penyewa dimiliki oleh 1 user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi ke Pemesanan (Setiap entitas penyewa bisa memiliki banyak pemesanan)
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_entitas_penyewa', 'id_entitas');
    }
}
