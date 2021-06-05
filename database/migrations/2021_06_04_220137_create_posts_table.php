<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //Se aumentara solo
            $table->bigIncrements('id');
            //Será el campo que se usará en la relacion, se coloca el unsignedInteger para que sea numeros positivos
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->foreign('user_id')->references('id')->on('users');
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
    }
}
