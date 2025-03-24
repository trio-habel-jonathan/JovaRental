    <?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up()
        {
            Schema::create('mitra', function (Blueprint $table) {
                $table->uuid('id_mitra');
                $table->uuid('id_user');
                $table->string('nama_company', 100);
                $table->string('no_company', 15);
                $table->string('kota', 50);
                $table->text('location');
                $table->text('deskripsi')->nullable();
                $table->enum('status_verifikasi', ['pending', 'verified', 'rejected'])->default('pending');
                $table->string('foto_company', 255)->nullable();
                $table->timestamps();
                $table->boolean('is_active')->default(true);
                // Foreign key dan referensi ke users.id
                $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        public function down()
        {
            Schema::dropIfExists('mitra');
        }
    };

