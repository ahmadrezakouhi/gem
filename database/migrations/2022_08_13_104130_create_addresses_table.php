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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_receiver_id');
            $table->foreign('sender_receiver_id')->references('id')->on('senders_receivers');
            $table->unsignedInteger('province_code')->nullable();
            $table->string('province_title',255)->nullable();
            $table->unsignedInteger('city_code')->nullable();
            $table->string('city_title',255)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->unsignedBigInteger('warehouse_code')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->unsigned()->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
