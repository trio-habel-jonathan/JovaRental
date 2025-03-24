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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->uuid('id_pengembalian')->primary();
            $table->uuid('id_detail');
            $table->dateTime('tanggal_pengembalian');
            $table->text('kondisi_kendaraan')->nullable();
            $table->integer('kilometer')->nullable();
            $table->text('foto_sebelum')->nullable();
            $table->text('foto_sesudah')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('id_detail')->references('id_detail')->on('detail_pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};
