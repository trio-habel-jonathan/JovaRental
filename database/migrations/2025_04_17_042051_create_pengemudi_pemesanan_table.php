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
        Schema::create('pengemudi_pemesanan', function (Blueprint $table) {
            $table->uuid('id_pengemudi')->primary();
            $table->uuid('id_detail_pemesanan');
            $table->string('nama_pengemudi', 255);
            $table->string('no_telepon', 20);

            $table->foreign('id_detail_pemesanan')->references('id_detail')->on('detail_pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengemudi_pemesanan');
    }
};
