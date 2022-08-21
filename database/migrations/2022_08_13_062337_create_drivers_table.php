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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('personal_code',50)->nullable();
            $table->string('name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('father_name',100)->nullable();
            $table->string('national_code',20)->nullable();
            $table->string('birth_certificate_code',20)->nullable();
            $table->string('driver_licence_number',20)->nullable();
            $table->timestamp('driver_licence_expire')->nullable();
            $table->tinyInteger('driver_licence_type')->nullable();
            $table->string('health_card_number',20)->nullable();
            $table->timestamp('health_card_expire')->nullable();
            $table->string('insurance_number',20)->nullable();
            $table->string('smart_number',10)->nullable();
            $table->timestamp('smart_number_expire')->nullable();
            $table->integer('vehicle_smart_number')->nullable();
            $table->timestamp('birth_date')->nullable();
            $table->string('city_of_birth',100)->nullable();
            $table->string('city_of_driver_licence',100)->nullable();
            $table->tinyInteger('allowed_vehicle_type')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->integer('country_code')->nullable();
            $table->string('country',100)->nullable();
            $table->string('organization_phone',50)->nullable();
            $table->string('phones',50)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->timestamp('start_activity')->nullable();
            $table->text('address')->nullable();
            $table->string('province',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('education',50)->nullable();
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
        Schema::dropIfExists('drivers');
    }
};
