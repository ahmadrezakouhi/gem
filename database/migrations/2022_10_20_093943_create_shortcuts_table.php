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
        Schema::create('shortcuts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            // $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('short_cut')->nullable();
            $table->unsignedBigInteger('sender_code')->nullable();
            $table->unsignedBigInteger('receiver_code')->nullable();
            $table->unsignedBigInteger('cargo_code')->nullable();
            $table->string('cargo_description')->nullable();
            $table->unsignedBigInteger('package_code')->nullable();
            $table->unsignedBigInteger('owner_code')->nullable();
            $table->unsignedBigInteger('location_loading_code')->nullable();
            $table->unsignedBigInteger('weight')->nullable();
            $table->unsignedBigInteger('quantity')->nullable();
            $table->unsignedBigInteger('value')->nullable();
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
        Schema::dropIfExists('shortcuts');
    }
};
