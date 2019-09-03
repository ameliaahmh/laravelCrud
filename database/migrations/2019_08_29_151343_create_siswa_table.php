<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('id', 9)->primary();
            $table->string('nama_siswa', 30);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Konghuchu']);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('no_telepon', 13);
            $table->string('asal_sekolah', 30); 
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
        Schema::dropIfExists('siswa');
    }
}
