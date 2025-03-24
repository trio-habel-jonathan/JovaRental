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
        Schema::create('pendapatan_mitra', function (Blueprint $table) {
            $table->uuid('id_pendapatan')->primary();
            $table->uuid('id_mitra');
            $table->uuid('id_pemesanan');
            $table->decimal('jumlah_pendapatan', 10, 2);
            $table->text('keterangan')->nullable();
            $table->timestamp('tanggal_pendapatan')->useCurrent();
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendapatan_mitra');
    }
};
