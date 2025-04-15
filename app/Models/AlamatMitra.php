<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlamatMitra extends Model
{
    //
    protected $table = 'alamat_mitra';
    protected $primaryKey = 'id_alamat'; // Menentukan primary key
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_alamat',
        'id_mitra',
        'alamat',
        'no_telepon',
        'kota',
        'kecamatan',
        'provinsi',
        'kode_pos',
        'latitude',
        'longitude',
    ];
    

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($alamatMitra) {
            if (empty($alamatMitra->{$alamatMitra->getKeyName()})) {
                $alamatMitra->{$alamatMitra->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }
}
