<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            // SISWA
            $table->id();
            $table->string('nama');
            $table->enum('kelas', ['xmm1', 'xmm2', 'xrpl1', 'xrpl2', 'xpftv1', 'xpftv2', 'ximm', 'xirpl', 'xipftv', 'xiimm', 'xiirpl', 'xiipftv']);
            $table->enum('jurusan', ['mm', 'rpl', 'pftv']);
            $table->string('email')->unique();
            $table->string('nis')->unique();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('password');
            $table->integer('pelanggaran')->nullable();
            $table->integer('prestasi')->nullable();

            // WALI
            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('alamatWali')->nullable();
            $table->string('teleponWali')->nullable();

            // General
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
