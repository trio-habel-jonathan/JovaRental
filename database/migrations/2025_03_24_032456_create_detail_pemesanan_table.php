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
            $table->uuid('id_kendaraan');
            $table->uuid('id_sopir')->nullable();
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->enum('metode_pengantaran', ['diantar', 'ambil_di_tempat']);
            $table->enum('tipe_penggunaan_sopir', ['mengantar_saja', 'tanpa_sopir', 'sepanjang_hari'])->nullable();
            $table->string('lokasi_pengantaran', 255)->nullable();
            $table->decimal('biaya_pengantaran', 10, 2)->default(0.00);
            $table->decimal('subtotal_harga', 10, 2);
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan')->onDelete('cascade');
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
