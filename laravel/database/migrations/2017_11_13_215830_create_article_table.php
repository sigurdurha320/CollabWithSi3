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
         Schema::create('image', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('img');
        });

        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->integer('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('image_id')->references('id')->on('image')->onDelete('set null')->nullable();
            $table->text('textContent')->nullable();
            $table->tinyInteger('privacy');
            $table->timestamps();
        });

        Schema::create('article_viewable', function (Blueprint $table) {
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('article_id')->references('id')->on('article')->onDelete('cascade');
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
        Schema::dropIfExists('image');
    }
}
