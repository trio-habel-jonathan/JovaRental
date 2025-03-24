<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class JenisDenda extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'jenis_denda'; // Nama tabel

    protected $primaryKey = 'id_jenis_denda'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'nama_denda',
        'deskripsi',
        'nilai_denda_per_jam',
        'is_active',
    ];

    /**
     * Override boot method untuk generate UUID secara otomatis.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function dendas()
    {
        return $this->hasMany(Denda::class, 'id_jenis_denda', 'id_jenis_denda');
    }
}
