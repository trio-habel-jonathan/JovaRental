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
        Schema::create('penggantian_kendaraan', function (Blueprint $table) {
            $table->uuid('id_penggantian')->primary();
            $table->uuid('id_detail');
            $table->uuid('id_kendaraan_lama');
            $table->uuid('id_kendaraan_baru');
            $table->timestamp('tanggal_penggantian')->useCurrent();
            $table->text('alasan_penggantian');
            $table->enum('status_penggantian', ['pending', 'approved', 'completed', 'rejected'])->default('pending');
            $table->timestamps();

            $table->foreign('id_detail')->references('id_detail')->on('detail_pemesanan')->onDelete('cascade');
            $table->foreign('id_kendaraan_lama')->references('id_kendaraan')->on('kendaraan')->onDelete('cascade');
            $table->foreign('id_kendaraan_baru')->references('id_kendaraan')->on('kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggantian_kendaraan');
    }
};
