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
        Schema::create('fee_setting', function (Blueprint $table) {
            $table->uuid('id_fee')->primary();
            $table->enum('jenis_fee', ['persentase', 'flat']);
            $table->string('nama_fee', 100);
            $table->decimal('nilai_fee', 10, 2);
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
        Schema::dropIfExists('fee_setting');
    }
};
