<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Pemesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pemesanan'; // Define table name

    protected $primaryKey = 'id_pemesanan'; // UUID as primary key
    public $incrementing = false; // UUID is not auto-incrementing
    protected $keyType = 'string'; // UUID is stored as string

    protected $fillable = [
        'id_pemesanan',
        'id_entitas_penyewa',
        'id_mitra',
        'perwakilan_penyewa',
        'kontak_perwakilan',
        'tanggal_pemesanan',
        'lokasi_pengambilan',
        'lokasi_pengembalian',
        'total_harga',
        'status_pemesanan',
        'catatan',
    ];
}
