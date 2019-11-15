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
            $table->increments('id');
            $table->string('slug')->unique();
            $table->unsignedInteger('author_id');
            $table->string('title');
            $table->text('excerpt');
            $table->longText('content');
            $table->integer('status')->default(1);
            $table->unsignedInteger('type')->default(1);
            $table->unsignedBigInteger('comment_count')->default(0);
            $table->dateTime('published_at');
            $table->timestamps();

            // $table->foreign('author_id')
            //       ->references('id')->on('users')
            //       ->onDelete('cascade');
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
}
