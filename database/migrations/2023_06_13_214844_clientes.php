<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('genero_id')->unsigned();
            $table->string('nombre_cli');
            $table->date('fecha_nac_cli');
            $table->string('telefono1_cli');
            $table->string('telefono2_cli');
            $table->string('email_cli');
            $table->string('titulo_cli');
            $table->string('rol_cli');
            $table->string('experiencia_cli');
            $table->timestamps();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete("cascade");
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
