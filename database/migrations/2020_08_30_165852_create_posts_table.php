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
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->longText('post_content');
            $table->string('feature_image', 255)->nullable();
            $table->enum('type', ['post', 'page'])->default(null);
            $table->enum('status', [0, 1, 2])->default(0); // 0: Unpublished, 1:Published, 2: Draft
            $table->tinyInteger('show_in_header_menu')->default(0);
            $table->tinyInteger('show_in_footer_menu')->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
}
