<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('red_id')->unsigned();
            $table->bigInteger('cont_id')->unsigned();
            $table->string('mision_inf');
            $table->string('vision_inf');
            $table->string('cultural_inf');
            $table->timestamps();
            $table->foreign('red_id')->references('id')->on('redsocials')->onDelete("cascade");
            $table->foreign('cont_id')->references('id')->on('contactos')->onDelete("cascade");
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
