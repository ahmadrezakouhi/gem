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
            $table->string('bill_of_lading_serial',10)->nullable();
            $table->unsignedBigInteger('bill_of_lading_number')->nullable();
            $table->unsignedBigInteger('draft_number')->nullable();
            $table->unsignedBigInteger('draft_serial')->nullable();
            $table->boolean('overburden')->default(false);
            $table->timestamp('estimate_receive_date')->nullable();
            $table->unsignedBigInteger('storage_code')->nullable();
            $table->unsignedBigInteger('storage_type_code')->nullable();
            $table->string('storage_type_title',50)->nullable();
            $table->unsignedBigInteger('storage_cost')->nullable();
            $table->unsignedBigInteger('loading_code')->nullable();
            $table->string('loading_title',50)->nullable();
            $table->unsignedBigInteger('loading_cost')->nullable();
            $table->unsignedBigInteger('scale_cost')->nullable();
            $table->unsignedBigInteger('sleep_cost')->nullable();
            $table->unsignedBigInteger('insurance_tax')->nullable();
            $table->unsignedBigInteger('insurance_cost')->nullable();
            $table->unsignedBigInteger('overload_cost')->nullable();
            $table->unsignedBigInteger('commission')->nullable();
            $table->unsignedBigInteger('advance_rent')->nullable();
            $table->unsignedBigInteger('unload_cost')->nullable();
            $table->unsignedBigInteger('terminal_cost')->nullable();
            $table->unsignedBigInteger('online_cost')->nullable();
            $table->unsignedBigInteger('cost')->nullable();
            $table->unsignedBigInteger('driver_insurance_cost')->nullable();
            $table->unsignedBigInteger('freight_collect')->nullable();
            $table->unsignedBigInteger('freight_insurance')->nullable();
            $table->unsignedBigInteger('fixed_cost')->nullable();
            $table->unsignedBigInteger('stamp_cost')->nullable();
            $table->unsignedBigInteger('tax')->nullable();
            $table->unsignedBigInteger('disinfectant_cost')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('register_date')->nullable();
            $table->boolean('receipt')->default(false);
            $table->string('hub_code',255)->nullable();
            $table->string('document_number',20)->nullable();
            $table->timestamp('document_date')->nullable();
            $table->string('cottage_number',20)->nullable();
            $table->timestamp('cottage_date')->nullable();
            $table->string('cortex_number',20)->nullable();
            $table->string('order_number',20)->nullable();
            $table->string('item',255)->nullable();
            $table->string('status_code',20)->nullable();
            $table->string('status_title',255)->nullable();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->string('sender_national_code',20)->nullable();
            $table->string('sender_postal_code',20)->nullable();
            $table->string('sender_economic_code',20)->nullable();
            $table->string('sender_name',255)->nullable();
            $table->string('sender_last_name',255)->nullable();
            $table->string('sender_province_code',20)->nullable();
            $table->string('sender_province_title',255)->nullable();
            $table->string('sender_city_code',20)->nullable();
            $table->string('sender_city_title',50)->nullable();
            $table->text('sender_address')->nullable();
            $table->string('sender_phones',255)->nullable();
            $table->unsignedBigInteger('receiver_id')->nullable();
            $table->string('receiver_national_code',20)->nullable();
            $table->string('receiver_postal_code',20)->nullable();
            $table->string('receiver_economic_code',20)->nullable();
            $table->string('receiver_name',255)->nullable();
            $table->string('receiver_last_name',255)->nullable();
            $table->string('receiver_province_code',20)->nullable();
            $table->string('receiver_province_title',255)->nullable();
            $table->string('receiver_city_code',20)->nullable();
            $table->string('receiver_city_title',50)->nullable();
            $table->text('receiver_address')->nullable();
            $table->string('receiver_phones',255)->nullable();
            $table->string('first_driver_name',255)->nullable();
            $table->string('first_driver_last_name',255)->nullable();
            $table->string('first_driver_personal_code',20)->nullable();
            $table->string('first_driver_national_code',20)->nullable();
            $table->string('first_driver_smart_number',20)->nullable();
            $table->timestamp('first_driver_health_card_expire')->nullable();
            $table->string('first_driver_phones',255)->nullable();
            $table->text('first_driver_address')->nullable();
            $table->string('first_driver_one_time_password')->nullable();
            $table->string('second_driver_name',255)->nullable();
            $table->string('second_driver_last_name',255)->nullable();
            $table->string('second_driver_personal_code',20)->nullable();
            $table->string('second_driver_national_code',20)->nullable();
            $table->string('second_driver_smart_number',20)->nullable();
            $table->timestamp('second_driver_health_card_expire')->nullable();
            $table->string('second_driver_phones',255)->nullable();
            $table->text('second_driver_address')->nullable();
            $table->string('vehicle_smart_number',10)->nullable();
            $table->string('vehicle_number_plate',10)->nullable();
            $table->string('vehicle_number_plate_zone',2)->nullable();
            $table->timestamp('vehicle_insurance_expire')->nullable();
            $table->timestamp('vehicle_inspection_expire')->nullable();
            $table->string('vehicle_brand_title')->nullable();
            $table->unsignedBigInteger('vehicle_loading_type_code')->nullable();
            $table->string('vehicle_loading_type_title')->nullable();
            $table->boolean('vehicle_status')->default(false);
            $table->string('vehicle_one_time_password')->nullable();
            $table->string('sc_cargo_title',255)->nullable();
            $table->unsignedInteger('sc_cargo_weight')->nullable();
            $table->unsignedInteger('sc_cargo_quantity')->nullable();
            $table->unsignedBigInteger('sc_cargo_value')->nullable();
            $table->unsignedBigInteger('insurance_id')->nullable();
            $table->string('insurance_title')->nullable();
            $table->unsignedBigInteger('transport_contract_id')->nullable();
            $table->string('transport_contract_title')->nullable();
            $table->string('sc_field_1',255)->nullable();
            $table->string('sc_field_2',255)->nullable();
            $table->string('sc_field_3',255)->nullable();
            $table->string('sc_field_4',255)->nullable();
            $table->string('sc_field_5',255)->nullable();
            $table->string('sc_field_6',255)->nullable();
            $table->string('sc_field_7',255)->nullable();
            $table->string('sc_field_8',255)->nullable();
            $table->string('sc_field_9',255)->nullable();
            $table->string('sc_field_10',255)->nullable();
            $table->string('sc_field_11',255)->nullable();
            $table->string('sc_field_12',255)->nullable();
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
