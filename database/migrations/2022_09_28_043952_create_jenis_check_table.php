<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_check', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jenis_check')->autoIncrement();
            $table->string('jenis_check', 10)->nullable($value=false);
            $table->string('tipe_check', 10)->nullable($value=false);
        });

        Schema::table('jenis_check', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jenis_maintenance');
            $table->foreign('id_jenis_maintenance')->references('id_jenis_maintenance')->on('jenis_maintenance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_check');
    }
}
