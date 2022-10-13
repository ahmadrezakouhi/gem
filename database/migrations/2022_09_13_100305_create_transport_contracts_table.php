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
        Schema::create('transport_contracts', function (Blueprint $table) {
            $set_values = ['unknown','rental','own','independent'];
            $table->id();
            $table->unsignedBigInteger('panel_code')->index();
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('contract_number',20)->nullable();
            $table->string('contract_title')->nullable();
            $table->timestamp('contract_date')->nullable();
            $table->double('commission_persent',5,2)->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_last_name')->nullable();
            $table->double('driver_insurance_commission',5,2)->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_carriage_forward')->default(false);
            $table->boolean('is_unknown')->default(false);
            $table->boolean('is_rental')->default(false);
            $table->boolean('is_own')->default(false);
            $table->boolean('is_independent')->default(false);
            $table->unsignedBigInteger('fixed_cost')->nullable();
            $table->set('fixed_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_fixed_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('loading_cost')->nullable();
            $table->set('loading_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_loading_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('weighbridge_price')->nullable();
            $table->set('weighbridge_price_for_driver',$set_values)->nullable();
            $table->boolean('is_weighbridge_price_for_receiver')->default(false);
            $table->unsignedBigInteger('storage_cost')->nullable();
            $table->set('storage_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_storage_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('unloading_cost')->nullable();
            $table->set('unloading_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_unloading_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('online_cost')->nullable();
            $table->set('online_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_online_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('overload_cost')->nullable();
            $table->set('overload_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_overload_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('stamp_cost')->nullable();
            $table->set('stamp_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_stamp_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('sleep_cost')->nullable();
            $table->set('sleep_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_sleep_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('commission')->nullable();
            $table->set('commission_for_driver',$set_values)->nullable();
            $table->boolean('is_commission_for_receiver')->default(false);
            $table->unsignedBigInteger('excess_baggage_fee')->nullable();
            $table->set('excess_baggage_fee_for_driver',$set_values)->nullable();
            $table->boolean('is_excess_baggage_fee_for_receiver')->default(false);
            $table->unsignedBigInteger('insurance_cost')->nullable();
            $table->set('insurance_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_insurance_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('disinfectant_cost')->nullable();
            $table->set('disinfectant_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_disinfectant_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('driver_insurance_cost')->nullable();
            $table->set('driver_insurance_cost_for_driver',$set_values)->nullable();
            $table->boolean('is_driver_insurance_cost_for_receiver')->default(false);
            $table->unsignedBigInteger('tax')->nullable();
            $table->set('tax_for_driver',$set_values)->nullable();
            $table->boolean('is_tax_for_receiver')->default(false);
            $table->unsignedBigInteger('insurance_tax')->nullable();
            $table->set('insurance_tax_for_driver',$set_values)->nullable();
            $table->boolean('is_insurance_tax_for_receiver')->default(false);
            $table->boolean('is_default')->default(false);
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
        Schema::dropIfExists('transport_contracts');
    }
};
