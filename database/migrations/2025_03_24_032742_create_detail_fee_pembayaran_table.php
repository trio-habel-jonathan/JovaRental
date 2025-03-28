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
        Schema::create('detail_fee_pembayaran', function (Blueprint $table) {
            $table->uuid('id_detail_fee')->primary();
            $table->uuid('id_pembayaran');
            $table->uuid('id_fee');
            $table->text('keterangan')->nullable();
            $table->decimal('jumlah_fee', 10, 2);
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
            $table->foreign('id_fee')->references('id_fee')->on('fee_setting')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_fee_pembayaran');
    }
};
