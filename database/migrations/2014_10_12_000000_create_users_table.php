<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name', 80)->nullable();
            $table->string('last_name', 80)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile', 30)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->mediumText('address')->nullable();
            $table->string('website', 255)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('photo', 255)->nullable();
            $table->mediumText('description')->nullable();
            $table->enum('photo_storage', ['s3', 'public'])->nullable();
            $table->enum('user_type', ['user', 'admin'])->nullable();
            $table->enum('active_status', [0, 1, 2])->nullable(); // 0: Pending, 1: active, 2: blocked
            $table->enum('is_email_verified', [0, 1])->nullable(); // 0: Unverified, 1: verified
            $table->string('activation_code')->nullable();
            $table->enum('is_online', [0, 1])->nullable();
            $table->string('password');
            $table->string('slug')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
