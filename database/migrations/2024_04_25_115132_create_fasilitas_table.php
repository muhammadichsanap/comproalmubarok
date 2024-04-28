<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_fasilitas')->nullable();
            $table->string('keterangan_fasilitas')->nullable();
            $table->integer('jumlah_fasilitas')->nullable();
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
        Schema::drop('Fasilitas');
    }
}
