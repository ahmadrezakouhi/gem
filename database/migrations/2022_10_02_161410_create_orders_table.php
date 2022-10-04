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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code')->index();
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->unsignedBigInteger('order_number')->nullable();
            $table->timestamp('order_date')->nullable();
            $table->unsignedBigInteger('transaction_number')->nullable();
            $table->timestamp('transaction_date')->nullable();
            $table->unsignedBigInteger('request_number')->nullable();
            $table->timestamp('request_date')->nullable();
            $table->string('buyer_agent_name')->nullable();
            $table->string('buyer_agent_last_name')->nullable();
            $table->string('seller_agent_name')->nullable();
            $table->string('seller_agent_last_name')->nullable();
            $table->unsignedBigInteger('sender_code')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_last_name')->nullable();
            $table->string('sender_city')->nullable();
            $table->text('sender_address')->nullable();
            $table->string('sender_national_code',20)->nullable();
            $table->string('sender_postal_code',10)->nullable();
            $table->string('sender_phones')->nullable();
            $table->unsignedBigInteger('receiver_code')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_last_name')->nullable();
            $table->string('receiver_city')->nullable();
            $table->text('receiver_address')->nullable();
            $table->string('receiver_national_code',20)->nullable();
            $table->string('receiver_postal_code',10)->nullable();
            $table->string('receiver_phones')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
