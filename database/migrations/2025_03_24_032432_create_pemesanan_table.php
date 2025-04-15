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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->uuid('id_pemesanan')->primary();
            $table->uuid('id_entitas_penyewa');
            $table->uuid('id_mitra');
            $table->string('perwakilan_penyewa', 255)->nullable();
            $table->string('kontak_perwakilan', 50)->nullable();
            $table->timestamp('tanggal_pemesanan')->useCurrent();
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_kembali');

            $table->text('lokasi_pengambilan');
            $table->decimal('lat_pengambilan', 10, 7);
            $table->decimal('long_pengambilan', 10, 7);

            $table->text('lokasi_pengembalian');
            $table->decimal('lat_pengembalian', 10, 7);
            $table->decimal('long_pengembalian', 10, 7);
            
            $table->decimal('total_harga', 10, 2);
            $table->enum('status_pemesanan', ['pending', 'confirmed', 'canceled', 'completed'])->default('pending');
            $table->text('catatan')->nullable();

            $table->timestamps();

            $table->foreign('id_entitas_penyewa')->references('id_entitas_penyewa')->on('entitas_penyewa')->onDelete('cascade');
            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
