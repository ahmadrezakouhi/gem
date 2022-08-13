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
            $table->string('name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('national_code');
            $table->string('personal_code');
            $table->string('birth_certificate_code');
            $table->string('driver_licence');
            $table->string('driver_licence_type');
            $table->date('driver_licence_expire');
            $table->string('health_card_number');
            $table->date('health_card_expire');
            $table->string('insurance_number');
            $table->string('smart_number');
            $table->date('smart_number_expire');
            $table->string('city_of_birth');
            $table->string('city_of_driver_licence');
            $table->date('birth_date');
            $table->string('country');
            $table->string('postal_code');
            $table->text('address');
            $table->string('province');
            $table->string('city');
            $table->string('education');
            $table->string('mobile');
            $table->string('IBAN');
            $table->tinyInteger('status');
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
