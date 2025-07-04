<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class FeeSetting extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'fee_setting'; // Nama tabel

    protected $primaryKey = 'id_fee'; // Primary key UUID
    public $incrementing = false; // UUID tidak auto-increment
    protected $keyType = 'string'; // UUID disimpan sebagai string

    protected $fillable = [
        'jenis_fee',
        'nama_fee',
        'nilai_fee',
        'deskripsi',
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

    public function detailFeePembayarans()
    {
        return $this->hasMany(DetailFeePembayaran::class, 'id_fee', 'id_fee');
    }
}
