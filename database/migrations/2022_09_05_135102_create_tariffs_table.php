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
        Schema::create('tariffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insurance_id');
            $table->foreign('insurance_id')->references('id')->on('insurances')->cascadeOnDelete();
            $table->unsignedBigInteger('min_value')->nullable();
            $table->unsignedBigInteger('max_value')->nullable();
            $table->unsignedInteger('cargo_group_code')->nullable();
            $table->string('cargo_group_title')->nullable();
            $table->unsignedInteger('variable_value')->nullable();
            $table->unsignedBigInteger('value_bigger_than')->nullable();
            $table->unsignedBigInteger('constant_value')->nullable();
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
        Schema::dropIfExists('tariffs');
    }
};
