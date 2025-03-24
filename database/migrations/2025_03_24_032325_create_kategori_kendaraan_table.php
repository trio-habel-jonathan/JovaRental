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
        Schema::create('kategori_kendaraan', function (Blueprint $table) {
            $table->uuid('id_kategori')->primary();
            $table->uuid('id_jenis');
            $table->string('nama_kategori', 50);
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('id_jenis')->references('id_jenis')->on('jenis_kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_kendaraan');
    }
};
