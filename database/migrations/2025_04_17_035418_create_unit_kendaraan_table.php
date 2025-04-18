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
        Schema::create('unit_kendaraan', function (Blueprint $table) {
            $table->uuid('id_unit')->primary();
            $table->uuid('id_kendaraan');
            $table->uuid('id_alamat_mitra');
            $table->string('plat_nomor', 20)->unique();
            $table->enum('status_unit_kendaraan', ['tersedia', 'disewa', 'maintenance'])->default('tersedia');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan')->onDelete('cascade');
            $table->foreign('id_alamat_mitra')->references('id_alamat')->on('alamat_mitra')->onDelete('cascade');


            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_kendaraan');
    }
};
