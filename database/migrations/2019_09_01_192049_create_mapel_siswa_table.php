<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->Increments('id_nilai');
            $table->string('siswa_nis', 9);
            $table->string('mapel_id', 11);
            $table->integer('nilai');
            $table->foreign('siswa_nis')->references('nis')->on('siswa')->onDelete('cascade');
            $table->foreign('mapel_id')->references('id_mapel')->on('mapel')->onDelete('cascade');
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
        Schema::dropIfExists('nilai_siswa');
    }
}
