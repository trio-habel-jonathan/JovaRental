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
        Schema::create('alamat_mitra', function (Blueprint $table) {
            $table->uuid('id_alamat')->primary();
            $table->uuid('id_mitra');
            $table->string('alamat', 255);
            $table->string('no_telepon', 20)->unique(); // Nomor telepon alamat mitra
            $table->string('kota', 50);
            $table->string('kecamatan', 50);
            $table->string('provinsi', 50);
            $table->string('kode_pos', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_mitra');
    }
};
