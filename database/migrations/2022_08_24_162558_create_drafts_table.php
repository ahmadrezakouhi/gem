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
        Schema::create('drafts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('draft_number',10)->nullable();
            $table->string('bill_of_lading_number',10)->nullable();
            $table->string('licence_number',10)->nullable();
            $table->unsignedBigInteger('cargo_code')->nullable();
            $table->string('cargo_title',100)->nullable();
            $table->unsignedBigInteger('packing_code')->nullable();
            $table->string('packing_title',100)->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->string('owner')->nullable();
            $table->string('location_loading')->nullable();
            $table->tinyInteger('traffic')->default(0);
            $table->tinyInteger('incendiary')->default(0);
            $table->tinyInteger('traffic_zone')->default(0);
            $table->unsignedInteger('remained_order')->nullable();
            $table->unsignedInteger('remained_cortex')->nullable();
            $table->string('sender_national_code',20)->nullable();
            $table->string('sender_postal_code',20)->nullable();
            $table->string('sender_fullname',255)->nullable();
            $table->string('sender_economic_code',20)->nullable();
            $table->string('sender_city',100)->nullable();
            $table->string('sender_phones')->nullable();
            $table->text('sender_address')->nullable();
            $table->string('receiver_national_code',20)->nullable();
            $table->string('receiver_postal_code',20)->nullable();
            $table->string('receiver_fullname',255)->nullable();
            $table->string('receiver_economic_code',20)->nullable();
            $table->string('receiver_city',100)->nullable();
            $table->string('receiver_phones')->nullable();
            $table->text('receiver_address')->nullable();
            $table->string('first_driver_fullname',255)->nullable();
            $table->string('first_driver_national_code',20)->nullable();
            $table->string('first_driver_smart_number',10)->nullable();
            $table->timestamp('first_driver_health_card_expire')->nullable();
            $table->string('first_driver_phones')->nullable();
            $table->string('second_driver_fullname',255)->nullable();
            $table->string('second_driver_national_code',20)->nullable();
            $table->string('second_driver_smart_number',10)->nullable();
            $table->timestamp('second_driver_health_card_expire')->nullable();
            $table->string('second_driver_phones',255)->nullable();
            $table->string('vehicle_smart_number',10)->nullable();
            $table->string('vehicle_number_plate',10)->nullable();
            $table->string('vehicle_number_plate_zone',2)->nullable();
            $table->timestamp('vehicle_insurance_expire')->nullable();
            $table->timestamp('vehicle_inspection_expire')->nullable();
            $table->string('vehicle_brand_title',50)->nullable();
            $table->string('vehicle_loading_type',50)->nullable();
            $table->tinyInteger('vehicle_status')->default(0);
            $table->string('field_1')->nullable();
            $table->string('field_2')->nullable();
            $table->string('field_3')->nullable();
            $table->string('field_4')->nullable();
            $table->string('field_5')->nullable();
            $table->string('field_6')->nullable();
            $table->string('field_7')->nullable();
            $table->string('field_8')->nullable();
            $table->string('field_9')->nullable();
            $table->string('field_10')->nullable();
            $table->string('field_11')->nullable();
            $table->string('field_12')->nullable();
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
        Schema::dropIfExists('drafts');
    }
};
