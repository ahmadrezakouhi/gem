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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bill_of_lading_id');
            $table->foreign('bill_of_lading_id')->references('id')->on('bill_of_ladings');
            $table->unsignedBigInteger('cargo_code')->nullable();
            $table->string('cargo_title',100)->nullable();
            $table->unsignedBigInteger('package_code')->nullable();
            $table->string('package_title',100)->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->string('owner',100)->nullable();
            $table->string('location_loading',100)->nullable();
            $table->boolean('traffic')->default(false);
            $table->boolean('incendiary')->default(false);
            $table->boolean('traffic_zone')->default(false);
            $table->string('order_number',20)->nullable();
            $table->string('order_row',20)->nullable();
            $table->string('cortex_number',20)->nullable();
            $table->string('field_1',255)->nullable();
            $table->string('field_2',255)->nullable();
            $table->string('field_3',255)->nullable();
            $table->string('field_4',255)->nullable();
            $table->string('field_5',255)->nullable();
            $table->string('field_6',255)->nullable();
            $table->string('field_7',255)->nullable();
            $table->string('field_8',255)->nullable();
            $table->string('field_9',255)->nullable();
            $table->string('field_10',255)->nullable();
            $table->string('field_11',255)->nullable();
            $table->string('field_12',255)->nullable();


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
        Schema::dropIfExists('cargos');
    }
};
