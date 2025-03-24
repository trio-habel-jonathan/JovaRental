<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Sopir extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'sopir'; // Define table name

    protected $primaryKey = 'id_sopir'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_mitra',
        'nama_sopir',
        'no_identitas',
        'no_telepon',
        'alamat',
        'status',
        'is_active',
    ];

    /**
     * Override boot method to generate UUID for primary key.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id_sopir)) {
                $model->id_sopir = (string) Str::uuid();
            }
        });
    }
}
