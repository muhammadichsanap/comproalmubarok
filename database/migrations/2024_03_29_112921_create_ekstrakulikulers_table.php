<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkstrakulikulersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstrakulikulers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama_ekstrakulikuler');
            $table->string('keterangan_ekstrakulikuler');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('sekolahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ekstrakulikulers');
    }
}
