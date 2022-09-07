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
            $table->unsignedBigInteger('packing_code')->nullable();
            $table->string('packing_title',100)->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->string('owner',100)->nullable();
            $table->string('location_loading',100)->nullable();
            $table->boolean('traffic')->default(false);
            $table->boolean('incendiary')->default(false);
            $table->boolean('traffic_zone')->default(false);
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
