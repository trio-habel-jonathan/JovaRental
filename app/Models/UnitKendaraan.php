<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UnitKendaraan extends Model
{
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

}
