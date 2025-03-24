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
        Schema::create('sopir', function (Blueprint $table) {
            $table->uuid('id_sopir')->primary();
            $table->uuid('id_mitra');
            $table->string('nama_sopir', 100);
            $table->string('no_identitas', 255);
            $table->string('no_telepon', 15);
            $table->string('alamat', 255);
            $table->enum('status', ['tersedia', 'bertugas'])->default('tersedia');
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sopir');
    }
};
