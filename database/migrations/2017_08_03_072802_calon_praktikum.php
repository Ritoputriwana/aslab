<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CalonPraktikum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_praktikum', function (Blueprint $table) {
            $table->increments('id_calprak');
            $table->string('nama_calprak');
            $table->string('id_reg');
            $table->string('id_prak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calon_praktikum');
    }
}
