<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check', function (Blueprint $table) {
            $table->unsignedBigInteger('id_check')->autoIncrement();
            $table->string('check', 10)->nullable($value=false);
            $table->string('kondisi', 10)->nullable($value=true);
            $table->string('informasi', 10)->nullable($value=true);
        });

        Schema::table('check', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jenis_check');
            $table->unsignedBigInteger('id_jenis_barang');
            $table->foreign('id_jenis_check')->references('id_jenis_check')->on('jenis_check');
            $table->foreign('id_jenis_barang')->references('id_jenis_barang')->on('jenis_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check');
    }
}
