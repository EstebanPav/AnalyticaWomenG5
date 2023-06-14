<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comentario_id')->unsigned();
            $table->bigInteger('blog_id')->unsigned();
            $table->string('nombre_cat');
            $table->timestamps();
            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete("cascade");
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete("cascade");
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
