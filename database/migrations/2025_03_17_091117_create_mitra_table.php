<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id('id_mitra');
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_company', 100);
            $table->string('no_company', 15);
            $table->string('location', 255);
            $table->text('deskripsi')->nullable();
            $table->enum('status_verifikasi', ['pending', 'verified', 'rejected'])->default('pending');
            $table->string('foto_company', 255)->nullable();
            $table->timestamps();
            $table->boolean('is_active')->default(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mitra');
    }
};

