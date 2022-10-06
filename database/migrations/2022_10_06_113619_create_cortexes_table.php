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
        Schema::create('cortexes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code')->index();
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->unsignedBigInteger('cortex_number')->nullable();
            $table->timestamp('cortex_date')->nullable();
            $table->unsignedBigInteger('order_number')->nullable();
            $table->unsignedBigInteger('order_item')->nullable();
            $table->string('cargo_title')->nullable();
            $table->text('cargo_description')->nullable();
            $table->unsignedBigInteger('package_code')->nullable();
            $table->string('package_title')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_last_name')->nullable();
            $table->string('loading_location')->nullable();
            $table->boolean('traffic')->default(false);
            $table->boolean('incendiary')->default(false);
            $table->boolean('traffic_zone')->default(false);
            $table->unsignedInteger('ramainder_order')->nullable();
            $table->unsignedBigInteger('sender_code')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_last_name')->nullable();
            $table->string('sender_city')->nullable();
            $table->string('sender_national_code',20)->nullable();
            $table->unsignedBigInteger('sender_storage_code')->nullable();
            $table->string('sender_postal_code',10)->nullable();
            $table->unsignedBigInteger('receiver_code')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_last_name')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_national_code',20)->nullable();
            $table->unsignedBigInteger('receiver_storage_code')->nullable();
            $table->string('receiver_postal_code',10)->nullable();
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
        Schema::dropIfExists('cortexes');
    }
};
