<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->uuid('id_detail')->primary();
            $table->uuid('id_pemesanan');
            $table->uuid('id_unit');
            $table->uuid('id_unit_kendaraan');
            $table->uuid('id_sopir')->nullable();
            $table->enum('metode_pengantaran', ['diantar', 'ambil_di_tempat']);
            $table->enum('tipe_penggunaan_sopir', ['tanpa_sopir', 'dengan_sopir'])->nullable();
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_kembali');

            $table->text('lokasi_pengambilan');
            $table->text('lokasi_pengambilan_detail')->nullable();
            $table->decimal('lat_pengambilan', 10, 7);
            $table->decimal('long_pengambilan', 10, 7);

            $table->text('lokasi_pengembalian');
            $table->text('lokasi_pengembalian_detail')->nullable();
            $table->decimal('lat_pengembalian', 10, 7);
            $table->decimal('long_pengembalian', 10, 7);
            $table->decimal('biaya_pengantaran', 10, 2)->default(0.00);
            $table->decimal('biaya_pengembalian', 10, 2)->default(0.00);
            $table->decimal('jarak_pengantaran', 10, 2)->default(0.00);
            $table->decimal('jarak_pengembalian', 10, 2)->default(0.00);
            $table->decimal('tarif_per_km', 10, 2)->default(0.00);
            $table->decimal('subtotal_harga', 10, 2)->default(0.00);
            $table->decimal('biaya_layanan', 10, 2)->default(0.00); // Biaya layanan 2%
            $table->decimal('pajak', 10, 2)->default(0.00); // Pajak 3%
            $table->decimal('biaya_sopir', 10, 2)->default(0.00); // Biaya sopir
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
            $table->foreign('id_unit')->references('id_unit')->on('unit_kendaraan')->onDelete('cascade');   
            $table->foreign('id_sopir')->references('id_sopir')->on('sopir')->onDelete('set null');

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanan');
    }
};
