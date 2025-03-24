    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up()
        {
            Schema::create('mitra', function (Blueprint $table) {
                $table->uuid('id_mitra')->primary();
                $table->uuid('id_user');
                $table->enum('tipe_mitra', ['individu', 'perusahaan'])->default('individu');
                $table->string('nama_mitra', 100);
                $table->string('nama_pemilik', 100);
                $table->string('no_identitas_pemilik', 50)->unique();
                $table->string('npwp', 50)->nullable()->unique();
                $table->enum('status_verifikasi', ['pending', 'verified', 'rejected'])->default('pending');
                $table->string('foto_mitra', 255)->nullable();
                $table->decimal('saldo', 10, 2)->default(0.00);
                $table->boolean('is_active')->default(1);
                $table->timestamps();

                $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            });
        }

        public function down()
        {
            Schema::dropIfExists('mitra');
        }
    };
