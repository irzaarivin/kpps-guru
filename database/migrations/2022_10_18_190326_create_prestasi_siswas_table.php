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
        Schema::create('prestasi_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('prestasi');
            $table->string('author');
            $table->timestamps();
            $table->foreign('nis')->references('nis')->on('students');
            $table->foreign('prestasi')->references('prestasi')->on('achievements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_siswas');
    }
};
