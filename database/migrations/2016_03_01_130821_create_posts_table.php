<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('board_id');
            $table->integer('thread_timestamp');
            $table->string('posted_at');
            $table->string('name');
            $table->string('email');
            $table->string('author_hash');
            $table->string('message');
            $table->string('ip_addr');

            $table->index(['board_id', 'thread_timestamp'], 'post_board_thread');
            $table->index('author_hash', 'post_author_hash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
