<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_pag');
            $table->string('metodo_pag');
            $table->date('fecha_pag');
            $table->double('monto_pag');
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
        //
    }
}
