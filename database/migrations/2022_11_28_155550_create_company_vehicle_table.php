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
        Schema::create('company_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->timestamp('inspection_expire')->nullable();
            $table->string('insurance_number',50)->nullable();
            $table->timestamp('insurance_expire')->nullable();
            $table->string('color')->nullable();
            $table->bigInteger('brand_code')->nullable();
            $table->string('brand_title',50)->nullable();
            $table->bigInteger('type_code')->nullable();
            $table->string('type_title',255)->nullable();
            $table->integer('number_of_allowed_draft')->default(0)->unsigned();
            $table->integer('day_of_allowed_draft')->default(0)->unsigned();
            $table->integer('number_of_allowed_bill_of_lading')->default(0)->unsigned();
            $table->integer('day_of_allowed_bill_of_lading')->default(0)->unsigned();
            $table->integer('number_of_unconfirmed_draft')->default(0)->unsigned();
            $table->integer('number_of_unconfirmed_bill_of_lading')->default(0)->unsigned();
            $table->integer('capacity')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('loading_length')->nullable();
            $table->integer('loading_width')->nullable();
            $table->tinyInteger('has_roll')->default(0)->unsigned();
            $table->string('chassis_number',50)->nullable();
            $table->string('document_number',50)->nullable();
            $table->tinyInteger('violation')->default(0)->unsigned();
            $table->text('description')->nullable();
            $table->string('engine_number',50)->nullable();
            $table->timestamp('document_date')->nullable();
            $table->tinyInteger('owner_status')->default(0)->unsigned();
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
        Schema::dropIfExists('company_vehicle');
    }
};
