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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('panel_code');
            // $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('number_plate',10)->nullable();
            $table->string('number_plate_zone',10)->nullable();
            $table->tinyInteger('number_plate_type')->nullable();
            $table->string('VIN',50)->nullable();
            $table->tinyInteger('allowed_driver_licence')->nullable();
            $table->string('vehicle_type',50)->nullable();
            $table->date('driver_licence')->nullable();
            $table->string('owner_phone')->nullable();
            $table->unsignedBigInteger('numbering_location_code')->nullable();
            $table->string('numbering_location')->nullable();
            $table->string('smart_number',10)->nullable();
            $table->timestamp('smart_number_expire')->nullable();
            $table->string('owner_mobile',20)->nullable();
            $table->integer('production')->nullable();
            $table->integer('loading_type_code')->nullable();
            $table->string('loading_type_title',255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('inspection_number',50)->nullable();
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
        Schema::dropIfExists('vehicles');
    }
};
