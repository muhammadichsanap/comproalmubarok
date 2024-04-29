<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Harga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengembangan');
            $table->integer('pemeliharaan_gedung');
            $table->integer('peningkatan_mutu');
            $table->integer('kegiatan_belajar');
            $table->integer('buku_paket');
            $table->integer('seragam_putra');
            $table->integer('seragam_putri');
            $table->integer('spp');
            $table->integer('total_putra');
            $table->integer('total_putri');
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
        Schema::drop('Harga');
    }
}
