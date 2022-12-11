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
            // $table->unsignedBigInteger('panel_code');
            // $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->char('national_code',20)->nullable();            // NationalId
            $table->string('name')->nullable();                      // Name
            $table->string('last_name')->nullable();                 // Family
            $table->string('father_name')->nullable();               // FatherName
            $table->string('birth_city_code')->nullable();           // BirthCityCode
            $table->string('birth_city_title')->nullable();          // BirthCityName
            $table->char('smart_number',10)->nullable();             // CardNumber
            $table->string('birth_certificate_code',20)->nullable(); // IdentificationNumber
            $table->string('insurance_branch')->nullable();          // InsuranceBranch
            $table->string('insurance_id',20)->nullable();           // InsuranceId
            $table->string('driver_licence_number',20)->nullable();  // CertificateNumber
            $table->timestamp('smart_number_expire')->nullable();    // TARIKH_ETEBAR_KART_SALAMAT
            $table->string('driver_type')->nullable();               // Driver_Type
            $table->tinyInteger('driver_licence_type')->nullable();  // NOVE_GAVEHINAMEH
            $table->char('driver_licence_city_code',10)->nullable(); // CertificateIssueCityCode
            $table->string('driver_licence_city_title')->nullable(); // CertificateIssueCityName
            $table->boolean('is_active')->default(0);                // IsActive
            $table->string('organization_phone',50)->nullable();     // Mobile
            $table->dateTime('health_card_expire')->nullable();      // TARIKH_ETEBAR_KART_SALAMAT
            // $table->timestamp('last_inquiry_date')->nullable();
            // $table->string('personal_code',50)->nullable();
            // $table->string('health_card_number',20)->nullable();
            // $table->timestamp('health_card_expire')->nullable();
            // $table->string('insurance_number',20)->nullable();
            // $table->integer('vehicle_smart_number')->nullable();
            // $table->timestamp('birth_date')->nullable();
            // $table->string('city_of_driver_licence')->nullable();
            // $table->tinyInteger('allowed_vehicle_type')->nullable();
            // $table->string('birth_city_title')->nullable();
            // $table->boolean('status')->default(0);
            // $table->integer('country_code')->nullable();
            // $table->string('country')->nullable();
            // $table->string('phones')->nullable();
            // $table->string('postal_code',20)->nullable();
            // $table->timestamp('start_activity')->nullable();
            // $table->text('address')->nullable();
            // $table->string('province')->nullable();
            // $table->string('city')->nullable();
            // $table->string('education')->nullable();
            // $table->string('IBAN',50)->nullable();
            // $table->text('description')->nullable();
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
