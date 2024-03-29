<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('akreditasi');
            $table->string('kurikulum');
            $table->string('jumlah_siswa');
            $table->string('jam_belajar');
            $table->integer('no_wa');
            $table->string('email');
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
        Schema::drop('sekolahs');
    }
}
