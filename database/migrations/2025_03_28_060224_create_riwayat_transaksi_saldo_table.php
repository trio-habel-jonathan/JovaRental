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
        Schema::create('riwayat_transaksi_saldo', function (Blueprint $table) {
            $table->char('id_transaksi_saldo', 36)->primary();
            $table->char('id_pembayaran', 36)->unique();
            $table->char('id_mitra', 36);
            $table->decimal('nominal_transaksi', 18, 2);
            $table->enum('status_transaksi', ['berhasil', 'gagal'])->default('berhasil');
            $table->timestamp('waktu_transaksi')->useCurrent();
            // Foreign Key Constraints
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksi_saldo');
    }
};
