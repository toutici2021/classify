<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('advertise_id');
            $table->integer('user_id');
            $table->decimal('amount', 8, 2);
            $table->string('payment_method');
            $table->enum('status', ['initial', 'pending', 'success', 'failed', 'declined', 'dispute']);
            $table->string('currency');
            $table->string('token_id');
            $table->string('card_last4');
            $table->string('card_id');
            $table->string('client_ip');
            $table->string('charge_id_or_token');
            $table->string('payer_email');
            $table->string('description');
            $table->string('local_transaction_id');
            $table->integer('payment_created');
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
        Schema::dropIfExists('payments');
    }
}
