<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaLivrosTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('livro_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });

        Schema::table('livros_tags', function (Blueprint $table) {
            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros_tags');
    }
}
