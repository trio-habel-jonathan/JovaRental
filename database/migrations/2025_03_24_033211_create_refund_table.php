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
        Schema::create('refund', function (Blueprint $table) {
            $table->uuid('id_refund')->primary();
            $table->uuid('id_pembayaran');
            $table->uuid('id_mitra');
            $table->decimal('jumlah_refund', 10, 2);
            $table->text('alasan_refund');
            $table->enum('status_refund', ['pending', 'processed', 'completed', 'rejected'])->default('pending');
            $table->timestamp('tanggal_refund')->useCurrent();
            $table->string('bukti_refund', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund');
    }
};
