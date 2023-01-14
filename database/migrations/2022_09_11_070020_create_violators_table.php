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
        Schema::create('violators', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('pelanggaran');
            $table->string('author');
            $table->timestamps();
            $table->foreign('nis')->references('nis')->on('students');
            $table->foreign('pelanggaran')->references('pelanggaran')->on('violations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('violators');
    }
};
