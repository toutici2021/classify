<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_from');
            $table->unsignedBigInteger('user_to');
            $table->unsignedBigInteger('unseen_user');
            $table->bigInteger('advertise_id')->nullable();
            $table->string('subject')->nullable();
            $table->mediumText('message');
            $table->string('has_reply')->default('no')->comment('yes, no');
            $table->string('read_status')->default('no')->comment('yes, no');
            $table->timestamps();
            $table->foreign('user_from')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_to')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
}
