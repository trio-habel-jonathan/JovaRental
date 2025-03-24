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
        Schema::create('rekening_mitra', function (Blueprint $table) {
            $table->uuid('id_rekening_mitra')->primary();
            $table->uuid('id_mitra');
            $table->uuid('id_metode_pembayaran_mitra');
            $table->string('nomor_rekening', 50);
            $table->string('nama_pemilik', 100);
            $table->boolean('is_default')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
            $table->foreign('id_metode_pembayaran_mitra')->references('id_metode_pembayaran_mitra')->on('metode_pembayaran_mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekening_mitra');
    }
};
