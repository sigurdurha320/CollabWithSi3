<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('userID')->references('id')->on('users')->onDelete('cascade');
            $table->binary('image');
            $table->tinyInteger('privacy');
            $table->timestamps();
        });

        Schema::create('article_viewable', function (Blueprint $table) {
            $table->integer('userID')->references('id')->on('users')->onDelete('cascade');
            $table->integer('articleID')->references('id')->on('article')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_viewable');
        Schema::dropIfExists('article');
    }
}
