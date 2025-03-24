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
        Schema::create('entitas_penyewa', function (Blueprint $table) {
            $table->uuid('id_entitas_penyewa')->primary();
            $table->uuid('id_user');
            $table->enum('tipe_entitas', ['individu', 'perusahaan']);
            $table->string('nama_entitas', 100);
            $table->string('no_identitas', 255); // KTP (Individu) / NIB (Perusahaan)
            $table->string('npwp', 255)->nullable(); // NPWP (opsional, hanya untuk perusahaan)
            $table->string('no_telepon', 20)->unique();
            $table->text('alamat');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entitas_penyewa');
    }
};
