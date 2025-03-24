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

        static::creating(function ($model) {
            if (empty($model->id_entitas_penyewa)) {
                $model->id_entitas_penyewa = (string) Str::uuid();
            }
        });
    }
}
