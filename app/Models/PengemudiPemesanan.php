<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class PengemudiPemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pengemudi_pemesanan'; // Nama tabel

    protected $primaryKey = 'id_pengemudi'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_detail_pemesanan',
        'nama_pengemudi',
        'no_telepon',
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

    public function detailPemesanan()
    {
        return $this->belongsTo(DetailPemesanan::class, 'id_detail_pemesanan', 'id_detail');
    }
}

