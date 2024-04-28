<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rombel')->nullable();
            $table->string('nama')->nullable();
            $table->string('nipd')->nullable();
            $table->string('jk')->nullable();
            $table->string('nisn')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('nik')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('hp')->nullable();
            $table->string('data_ayah')->nullable();
            $table->string('data_ibu')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
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
        Schema::drop('Siswa');
    }
}
