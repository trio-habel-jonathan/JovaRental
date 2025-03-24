<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class JenisKendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'jenis_kendaraan'; // Define table name

    protected $primaryKey = 'id_jenis'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_jenis',
        'nama_jenis',
        'deskripsi',
    ];
}
