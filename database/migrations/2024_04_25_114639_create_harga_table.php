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
            $table->biginteger('pengembangan')->nullable();;
            $table->biginteger('pemeliharaan_gedung')->nullable();
            $table->biginteger('peningkatan_mutu')->nullable();
            $table->biginteger('kegiatan_belajar')->nullable();
            $table->biginteger('buku_paket')->nullable();
            $table->biginteger('seragam_putra')->nullable();
            $table->biginteger('seragam_putri')->nullable();
            $table->biginteger('spp')->nullable();
            $table->biginteger('total_putra')->nullable();
            $table->biginteger('total_putri')->nullable();
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
