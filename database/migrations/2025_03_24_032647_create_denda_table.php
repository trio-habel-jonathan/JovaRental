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
        Schema::create('denda', function (Blueprint $table) {
            $table->uuid('id_denda')->primary();
            $table->uuid('id_pemesanan');
            $table->uuid('id_jenis_denda');
            $table->decimal('jumlah_denda', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->enum('status_pembayaran', ['unpaid', 'paid'])->default('unpaid');
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
            $table->foreign('id_jenis_denda')->references('id_jenis_denda')->on('jenis_denda')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
