<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Sopir extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'sopir'; // Define table name

    protected $primaryKey = 'id_sopir'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_sopir',
        'id_mitra',
        'nama_sopir',
        'no_identitas',
        'no_telepon',
        'alamat',
        'status',
        'is_active',
    ];
}
