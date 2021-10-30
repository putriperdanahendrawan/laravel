<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTables extends Migration
{
        public function up()
        {
            Schema::create('post', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->unique();
                $table->string('content');
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
        Schema::dropIfExists('posts_tables');
    }
}
