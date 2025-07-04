<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class DetailPemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detail_pemesanan'; // Define table name

    protected $primaryKey = 'id_detail'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_pemesanan',
        'id_unit',
        'id_sopir',
        'tanggal_mulai',
        'tanggal_selesai',
        'metode_pengantaran',
        'tipe_penggunaan_sopir',

        'lokasi_pengambilan',
        'lokasi_pengambilan_detail',
        'lat_pengambilan',
        'long_pengambilan',

        'lokasi_pengembalian',
        'lokasi_pengembalian_detail',
        'lat_pengembalian',
        'long_pengembalian',

        'biaya_pengantaran',
        'biaya_pengembalian',

        'jarak_pengantaran',
        'jarak_pengembalian',
        'tarif_per_km',
        'lokasi_pengembalian',
        'subtotal_harga',
        'biaya_layanan',
        'pajak',
        'biaya_sopir',
        'subtotal_dengan_fee',
    ];


    /**
     * Override boot method to generate UUID for primary key.
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

    public function unitKendaraan()
    {
        return $this->belongsTo(UnitKendaraan::class, 'id_unit', 'id_unit');
    }

    // public function kendaraan()
    // {
    //     return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id_kendaraan');
    // }

    public function sopir()
    {
        return $this->belongsTo(Sopir::class, 'id_sopir', 'id_sopir');
    }

    // Relasi ke Pengembalian (Setiap detail pemesanan bisa memiliki 1 pengembalian)
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class, 'id_detail', 'id_detail');
    }

    // Relasi ke PengemudiPemesanan (Setiap detail pemesanan bisa memiliki banyak pengemudi)
    public function pengemudiPemesanan()
    {
        return $this->belongsTo(PengemudiPemesanan::class, 'id_detail', 'id_detail');
    }

    // Relasi ke PenggantianKendaraan (Setiap detail pemesanan bisa memiliki banyak penggantian kendaraan)
    public function penggantianKendaraans()
    {
        return $this->hasMany(PenggantianKendaraan::class, 'id_detail', 'id_detail');
    }

    public function detailFeePembayarans()
    {
        return $this->hasMany(detailFeePembayaran::class, 'id_detail', 'id_detail');
    }
}
