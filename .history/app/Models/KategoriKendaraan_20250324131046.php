<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class KategoriKendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kategori_kendaraan'; // Define table name

    protected $primaryKey = 'id_kategori'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_jenis',
        'nama_kategori',
        'deskripsi',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_kategori)) {
                $model->id_kategori = (string) Str::uuid();
            }
        });
    }
}
