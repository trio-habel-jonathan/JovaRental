<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class KategoriKendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kategori_kendaraan'; // Define table name

    protected $primaryKey = 'id_kategori'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_kategori',
        'id_jenis',
        'nama_kategori',
        'deskripsi',
    ];
}
