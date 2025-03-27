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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->uuid('id_kendaraan')->primary();
            $table->uuid('id_mitra');
            $table->uuid('id_kategori');
            $table->string('nama_kendaraan', 100);
            $table->string('plat_nomor', 20)->unique();
            $table->year('tahun_produksi');
            $table->string('warna', 50);
            $table->enum('transmisi', ['automatic', 'manual', 'kopling']);
            $table->integer('cubic_centimeter');
            $table->integer('jumlah_kursi');
            $table->decimal('harga_sewa_perhari', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->enum('status_kendaraan', ['tersedia', 'disewa', 'maintenance'])->default('tersedia');
            $table->text('fotos')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori_kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
