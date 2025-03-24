<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class mitra extends Model
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

    // Relasi ke User (Setiap mitra punya 1 user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
