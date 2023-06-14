<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ciudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ciudades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('provincia_id')->unsigned();
            $table->string('nombre_ciu');
            $table->timestamps();
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
