<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Denda extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'denda'; // Nama tabel

    protected $primaryKey = 'id_denda'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'id_pemesanan',
        'id_jenis_denda',
        'jumlah_denda',
        'deskripsi',
        'status_pembayaran',
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

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }

    public function jenisDenda()
    {
        return $this->belongsTo(JenisDenda::class, 'id_jenis_denda', 'id_jenis_denda');
    }
}
