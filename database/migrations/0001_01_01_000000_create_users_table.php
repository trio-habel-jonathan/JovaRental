<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel users dengan UUID sebagai primary key
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id_user')->primary(); // UUID sebagai primary key
            $table->string('name', 100); // Menambahkan kolom nama pengguna
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('no_telepon', 15);
            $table->enum('role', ['admin', 'penyewa', 'mitra']);
            $table->string('foto_profil', 255)->nullable();
            $table->timestamps();
            $table->date('is_verified')->nullable();

        });

        // Tabel sessions dengan user_id berbasis UUID
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('user_id')->nullable()->index(); // Menggunakan UUID
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();

            // Foreign key ke users
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('users');
    }
};
