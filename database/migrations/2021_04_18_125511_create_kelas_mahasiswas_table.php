<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->foreignId('kelas_id');

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_mahasiswas');
    }
}
