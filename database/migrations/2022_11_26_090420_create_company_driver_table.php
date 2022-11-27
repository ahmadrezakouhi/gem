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
        Schema::create('company_driver', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->string('personal_code',50)->nullable();
            $table->string('health_card_number',20)->nullable();
            $table->timestamp('health_card_expire')->nullable();
            $table->string('insurance_number',20)->nullable();
            $table->integer('vehicle_smart_number')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->string('city_of_driver_licence')->nullable();
            $table->tinyInteger('allowed_vehicle_type')->nullable();
            $table->string('birth_city_title')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('country_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phones')->nullable();
            $table->string('postal_code',20)->nullable();
            $table->timestamp('start_activity')->nullable();
            $table->text('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('education')->nullable();
            $table->string('IBAN',50)->nullable();
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
        Schema::dropIfExists('company_driver');
    }
};
