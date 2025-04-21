<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory


class UnitKendaraan extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_unit";
    public $incrementing = false; // UUID is not auto-incrementing
    
    protected $table = "unit_kendaraan";
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_kendaraan',
        'id_alamat_mitra',
        'status_unit_kendaraan',
        'plat_nomor'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class, "id_kendaraan", 'id_kendaraan');
    }

    public function alamatMitra(){
        return $this->belongsTo(AlamatMitra::class, "id_alamat_mitra", 'id_alamat_mitra');
    }

    public function mitra(){
        return $this->belongsTo(Mitra::class, "id_mitra", 'id_mitra');
    }

    public function UnitkendaraanToDetail(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }

}
