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
        Schema::create('jenis_denda', function (Blueprint $table) {
            $table->uuid('id_jenis_denda')->primary();
            $table->string('nama_denda', 100);
            $table->text('deskripsi')->nullable();
            $table->decimal('nilai_denda_per_jam', 10, 2)->default(0.00);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_denda');
    }
};
