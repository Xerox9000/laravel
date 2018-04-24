<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->timestamps();
            $table->integer('lesartivle_id')->unsigned();
            $table->foreign('lesartivle_id')->references('id')->on('lesartivles');
            $table->integer('user_id')->unsigned() ;
            $table->foreign('user_id')->references('id')->on('users');
          


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
