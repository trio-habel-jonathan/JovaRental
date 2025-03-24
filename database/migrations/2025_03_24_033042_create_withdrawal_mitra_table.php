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
        Schema::create('withdrawal_mitra', function (Blueprint $table) {
            $table->uuid('id_withdrawal')->primary();
            $table->uuid('id_mitra');
            $table->uuid('id_rekening_mitra');
            $table->decimal('jumlah', 10, 2);
            $table->enum('status_withdrawal', ['pending', 'success', 'failed'])->default('pending');
            $table->timestamp('tanggal_withdrawal')->useCurrent();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_mitra')->references('id_mitra')->on('mitra')->onDelete('cascade');
            $table->foreign('id_rekening_mitra')->references('id_rekening_mitra')->on('rekening_mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawal_mitra');
    }
};
