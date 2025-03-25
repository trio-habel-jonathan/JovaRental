<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Menggunakan UUID sebagai primary key.
     */
    protected $primaryKey = 'id_user'; // Menentukan primary key
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Mass assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'no_telepon',
        'role',
        'foto_profil',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    /**
     * Boot function untuk mengisi UUID saat user dibuat.
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

    // Relasi ke Mitra (Setiap user bisa menjadi 1 mitra)
    public function mitra()
    {
        return $this->hasOne(Mitra::class, 'id_user', 'id_user');
    }

    // Relasi ke EntitasPenyewa (Setiap user bisa menjadi 1 entitas penyewa)
    public function entitasPenyewa()
    {
        return $this->hasOne(EntitasPenyewa::class, 'id_user', 'id_user');
    }
}
