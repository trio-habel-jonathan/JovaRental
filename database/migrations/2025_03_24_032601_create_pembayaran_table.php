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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->uuid('id_pembayaran')->primary();
            $table->uuid('id_pemesanan');
            $table->uuid('id_metode_pembayaran_platform');
            $table->decimal('total_bayar', 10, 2);
            $table->enum('status_pembayaran', ['pending', 'paid', 'failed', 'refunded'])->default('pending');
            $table->timestamp('tanggal_pembayaran')->useCurrent()->useCurrentOnUpdate();
            $table->string('bukti_pembayaran', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
            $table->foreign('id_metode_pembayaran_platform')->references('id_metode_pembayaran_platform')->on('metode_pembayaran_platform')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
