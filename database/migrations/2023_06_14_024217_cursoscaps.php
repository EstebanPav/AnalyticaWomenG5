<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursoscaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cursoscaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned();
            $table->string('nombre_cursoscaps');
            $table->string('descipcion_cursoscaps');
            $table->string('publicacion_cursoscaps');
            $table->integer('edadmin_cursoscaps');
            $table->integer('edadmax_cursoscaps');
            $table->string('link_cursoscaps');
            $table->integer('cupos_cursoscaps');
            $table->decimal('costo_cursoscaps');
            $table->timestamps();
            $table->foreign('cliente_id')->references('id_cli')->on('clientes')->onDelete("cascade");
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
