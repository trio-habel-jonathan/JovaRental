<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';

    protected $primaryKey = 'id_mitra';


    protected $fillable = [
        'id_user',
        'nama_company',
        'no_company',
        'location',
        'deskripsi',
        'foto_company',
        'status_verifikasi',
        'is_active',
    ];



    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relasi ke User (Setiap mitra punya 1 user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
