<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sekolah')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('kurikulum')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->string('jam_belajar')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('email')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::drop('Sekolah');
    }
}
