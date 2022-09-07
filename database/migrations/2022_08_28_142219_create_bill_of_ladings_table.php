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
        Schema::create('bill_of_ladings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->unsignedBigInteger('bill_of_lading_serial')->nullable();
            $table->unsignedBigInteger('bill_of_lading_number')->nullable();
            $table->unsignedBigInteger('draft_number')->nullable();
            $table->unsignedBigInteger('draft_serial')->nullable();
            $table->boolean('overburden')->default(false);
            $table->timestamp('estimate_receive_date')->nullable();
            $table->unsignedBigInteger('warehouse_code')->nullable();
            $table->unsignedBigInteger('warehouse_type_code')->nullable();
            $table->string('warehouse_type_title',50)->nullable();
            $table->unsignedBigInteger('warehouse_fee')->nullable();
            $table->unsignedBigInteger('loading_code')->nullable();
            $table->string('loading_title',50)->nullable();
            $table->unsignedBigInteger('scale_fee')->nullable();
            $table->unsignedBigInteger('sleep_fee')->nullable();
            $table->unsignedBigInteger('insurance_tax')->nullable();
            $table->unsignedBigInteger('insurance_fee')->nullable();
            $table->unsignedBigInteger('overload_fee')->nullable();
            $table->unsignedBigInteger('commission')->nullable();
            $table->unsignedBigInteger('advance_freight')->nullable();
            $table->unsignedBigInteger('add_valorem_tax')->nullable();
            $table->unsignedBigInteger('unload_fee')->nullable();
            $table->unsignedBigInteger('terminal_fee')->nullable();
            $table->unsignedBigInteger('cost')->nullable();
            $table->unsignedBigInteger('driver_insurance_fee')->nullable();
            $table->unsignedBigInteger('freight_collect')->nullable();
            $table->unsignedBigInteger('freight_insurance')->nullable();
            $table->unsignedBigInteger('fixed_cost')->nullable();
            $table->text('description')->nullable();
            $table->string('sender_national_code',20)->nullable();
            $table->string('sender_postal_code',20)->nullable();
            $table->string('sender_economic_code',20)->nullable();
            $table->string('sender_fullname',255)->nullable();
            $table->string('sender_city',50)->nullable();
            $table->text('sender_address')->nullable();
            $table->string('sender_phones',255)->nullable();
            $table->string('receiver_national_code',20)->nullable();
            $table->string('receiver_postal_code',20)->nullable();
            $table->string('receiver_economic_code',20)->nullable();
            $table->string('receiver_fullname',255)->nullable();
            $table->string('receiver_city',50)->nullable();
            $table->text('receiver_address')->nullable();
            $table->string('receiver_phones',255)->nullable();
            $table->string('first_driver_fullname',255)->nullable();
            $table->string('first_driver_national_code',20)->nullable();
            $table->string('first_driver_smart_number',20)->nullable();
            $table->timestamp('first_driver_health_card_expire')->nullable();
            $table->string('first_driver_phones',255)->nullable();
            $table->string('second_driver_fullname',255)->nullable();
            $table->string('second_driver_national_code',20)->nullable();
            $table->string('second_driver_smart_number',20)->nullable();
            $table->timestamp('second_driver_health_card_expire')->nullable();
            $table->string('second_driver_phones',255)->nullable();
            $table->string('vehicle_smart_number',10)->nullable();
            $table->string('vehicle_number_plate',10)->nullable();
            $table->string('vehicle_number_plate_zone',2)->nullable();
            $table->timestamp('vehicle_insurance_expire')->nullable();
            $table->timestamp('vehicle_inspection_expire')->nullable();
            $table->string('vehicle_brand_title',50)->nullable();
            $table->string('vehicle_loading_type',50)->nullable();
            $table->boolean('vehicle_status')->default(false);
            $table->string('field_1',255)->nullable();
            $table->string('field_2',255)->nullable();
            $table->string('field_3',255)->nullable();
            $table->string('field_4',255)->nullable();
            $table->string('field_5',255)->nullable();
            $table->string('field_6',255)->nullable();
            $table->string('field_7',255)->nullable();
            $table->string('field_8',255)->nullable();
            $table->string('field_9',255)->nullable();
            $table->string('field_10',255)->nullable();
            $table->string('field_11',255)->nullable();
            $table->string('field_12',255)->nullable();
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


        Schema::dropIfExists('bill_of_ladings');

    }
};
