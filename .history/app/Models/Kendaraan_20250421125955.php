<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Kendaraan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kendaraan'; // Define table name

    protected $primaryKey = 'id_kendaraan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_mitra',
        'id_kategori',
        'nama_kendaraan',
        'plat_nomor',
        'tahun_produksi',
        'warna',
        'transmisi',
        'cubic_centimeter',
        'jumlah_kursi',
        'harga_sewa_perhari',
        'deskripsi',
        'status_kendaraan',
        'fotos',
        'is_active',
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

    // Relasi ke Mitra (Setiap kendaraan dimiliki oleh 1 mitra)
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }

    public function jenisKendaraan()
    {
        return $this->belongsTo(JenisKendaraan::class, 'id_jenis', 'id_jenis');
    }

    // Relasi ke KategoriKendaraan (Setiap kendaraan dimiliki oleh 1 kategori kendaraan)
    public function kategoriKendaraan()
    {
        return $this->belongsTo(KategoriKendaraan::class, 'id_kategori', 'id_kategori');
    }


    // Relasi ke DetailPemesanan (Setiap kendaraan bisa memiliki banyak detail pemesanan)
    public function detailPemesanans()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_kendaraan', 'id_kendaraan');
    }

    // Relasi ke PenggantianKendaraan (Sebagai kendaraan lama)
    public function penggantianKendaraanLama()
    {
        return $this->hasMany(PenggantianKendaraan::class, 'id_kendaraan_lama', 'id_kendaraan');
    }

    // Relasi ke PenggantianKendaraan (Sebagai kendaraan baru)
    public function penggantianKendaraanBaru()
    {
        return $this->hasMany(PenggantianKendaraan::class, 'id_kendaraan_baru', 'id_kendaraan');
    }

    this
}
