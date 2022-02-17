<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
            $table->text('content');
            $table->string('title');
            $table->json('image');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('cate_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('cate_id')->references('cate_id')->on('categories');
            $table->foreign('tag_id')->references('tag_id')->on('tags');
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
        Schema::dropIfExists('posts');
    }
};
