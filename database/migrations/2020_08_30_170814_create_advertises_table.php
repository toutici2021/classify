<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->integer('sub_category_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->enum('ad_condition', ['new', 'used']);
            $table->string('model')->nullable();
            $table->decimal('price', 12, 2);
            $table->enum('is_negotiable', [0, 1])->default(0);
            $table->string('seller_name');
            $table->string('seller_email');
            $table->string('seller_phone');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->integer('city_id')->nullable();
            $table->string('address');
            $table->string('video_url')->nullable();
            $table->enum('status', [0, 1, 2, 3])->default(0)->comment('0 =pending for review, 1= published, 2=blocked, 3=archived');
            $table->enum('price_plan', ['regular', 'premium'])->default('regular');
            $table->enum('mark_ad_urgent', ['0', '1'])->default(0);
            $table->integer('view')->default(0);
            $table->integer('max_impression')->default(0);
            $table->string('payment_status', 10)->nullable()->comment('due, paid');
            $table->date('approved_date')->nullable();
            $table->date('move_to_regular')->nullable()->comment('move premium to regular after this date');
            $table->date('expire_date')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
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
        Schema::dropIfExists('advertises');
    }
}
