<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Pemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pemesanan'; // Define table name

    protected $primaryKey = 'id_pemesanan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_entitas_penyewa',
        'id_mitra',
        'perwakilan_penyewa',
        'kontak_perwakilan',
        'tanggal_pemesanan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi_pengambilan',
        'lokasi_pengembalian',
        'total_harga',
        'status_pemesanan',
        'catatan',
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

    public function hitungTotalHargaKendaraan()
    {
        return $this->detailPemesanans->sum(function ($detail) {
            $lamaSewa = max(1, (strtotime($detail->tanggal_selesai) - strtotime($detail->tanggal_mulai)) / 86400);
            return $detail->kendaraan->harga_sewa_perhari * $lamaSewa;
        });
    }

    public function getBiayaLayananPersen()
    {
        return FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440000')->value('nilai_fee') ?? 0;
    }

    public function getPajakPersen()
    {
        return FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440002')->value('nilai_fee') ?? 0;
    }

    public function hitungBiayaLayanan()
    {
        $biayaLayananPersen = FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440000')->value('nilai_fee');
        return ($this->hitungTotalHargaKendaraan() * $biayaLayananPersen) / 100;
    }

    public function hitungPajak()
    {
        $pajakPersen = FeeSetting::where('id_fee', '550e8400-e29b-41d4-a716-446655440002')->value('nilai_fee');
        return ($this->hitungTotalHargaKendaraan() * $pajakPersen) / 100;
    }

    public function hitungTotalBayar()
    {
        return $this->hitungTotalHargaKendaraan() + $this->hitungBiayaLayanan() + $this->hitungPajak();
    }


    // Relasi ke EntitasPenyewa (Setiap pemesanan dimiliki oleh 1 entitas penyewa)
    public function entitasPenyewa()
    {
        return $this->belongsTo(EntitasPenyewa::class, 'id_entitas_penyewa', 'id_entitas_penyewa');
    }

    // Relasi ke Mitra (Setiap pemesanan dimiliki oleh 1 mitra)
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id_mitra');
    }

    // Relasi ke DetailPemesanan (Setiap pemesanan bisa memiliki banyak detail pemesanan)
    public function detailPemesanans()
    {
        return $this->hasMany(DetailPemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }

    // Relasi ke Pembayaran (Setiap pemesanan bisa memiliki banyak pembayaran)
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_pemesanan', 'id_pemesanan');
    }

    // Relasi ke Denda (Setiap pemesanan bisa memiliki banyak denda)
    public function dendas()
    {
        return $this->hasMany(Denda::class, 'id_pemesanan', 'id_pemesanan');
    }

    // Relasi ke PendapatanMitra (Setiap pemesanan bisa memiliki banyak pendapatan mitra)
    public function pendapatanMitras()
    {
        return $this->hasMany(PendapatanMitra::class, 'id_pemesanan', 'id_pemesanan');
    }
}
