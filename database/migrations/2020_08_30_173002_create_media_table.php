<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('advertise_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->string('media_name');
            $table->enum('type', ['image', 'file']);
            $table->enum('is_feature', [0, 1])->default(0);
            $table->enum('storage', ['local', 'public', 's3']);
            $table->string('ref');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('advertise_id')->references('id')->on('advertises')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('media');
    }
}
