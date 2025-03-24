<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->uuid('id_mitra')->primary(); // UUID sebagai primary key
            $table->uuid('id_user'); // Hubungan dengan tabel users (UUID)
                    
            $table->enum('tipe_mitra', ['individu', 'perusahaan'])->default('individu'); // Bisa individu atau perusahaan
            $table->string('nama_mitra', 100); // Nama individu atau nama perusahaan
            $table->string('nama_pemilik', 100); // Nama pemilik (selalu nama orang)
                    
                    // Data untuk individu & perusahaan
            $table->string('no_identitas', 50)->unique(); // KTP (Individu) / NIB (Perusahaan)
            $table->string('npwp', 50)->nullable()->unique(); // NPWP (opsional, hanya untuk perusahaan)
            $table->string('no_telepon', 20)->unique(); // Nomor telepon mitra
            $table->text('alamat'); // Alamat mitra
                
            $table->enum('status_verifikasi', ['pending', 'verified', 'rejected'])->default('pending');
            $table->decimal('saldo', 10, 2)->default(0.00); // Saldo mitra dari hasil rental
            $table->string('foto_mitra', 255)->nullable(); 
                    
                    
            $table->timestamps();
                    
                
                    // Foreign Key
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    public function down()
    {
        Schema::dropIfExists('mitra');
    }
};

