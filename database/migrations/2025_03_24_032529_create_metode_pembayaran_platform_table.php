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
        Schema::create('metode_pembayaran_platform', function (Blueprint $table) {
            $table->uuid('id_metode_pembayaran_platform')->primary();
            $table->enum('jenis_metode', ['E-Wallet', 'Transfer Bank', 'Virtual Account']);
            $table->string('nama_metode', 50);
            $table->string('nomor_rekening_platform', 50);
            $table->string('nama_pemilik_platform', 100);
            $table->text('deskripsi')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembayaran_platform');
    }
};
