<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class EntitasPenyewa extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'entitas_penyewa'; // Define table name

    protected $primaryKey = 'id_entitas_penyewa'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_entitas_penyewa',
        'id_user',
        'tipe_entitas',
        'nama_entitas',
        'no_identitas',
        'npwp',
        'alamat',
        'is_active',
    ];
}
