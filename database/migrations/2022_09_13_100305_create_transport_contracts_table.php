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
            $table->string('ContractNumber',20)->nullable();
            $table->string('ContractTitle')->nullable();
            $table->timestamp('ContractDate')->nullable();
            $table->double('CommissionPercent',5,2)->nullable();
            $table->string('Customer')->nullable();
            $table->double('ComplementaryPercent',5,2)->nullable();
            $table->text('Description')->nullable();
            $table->boolean('IsActive')->default(false);
            $table->boolean('IsContractDefault')->default(false);
            $table->boolean('IsDefault_N0')->default(false);
            $table->boolean('IsDefault_N1')->default(false);
            $table->boolean('IsDefault_N2')->default(false);
            $table->boolean('IsDefault_N3')->default(false);
            $table->unsignedBigInteger('AfterDelivered')->nullable();
            $table->unsignedBigInteger('N0_BaseFreight')->nullable();
            $table->unsignedBigInteger('N0_PreFreight')->nullable();
            $table->unsignedBigInteger('N0_RemFreight')->nullable();
            $table->unsignedBigInteger('N0_Sleep')->nullable();
            $table->unsignedBigInteger('N0_commission')->nullable();
            $table->unsignedBigInteger('N0_Storage')->nullable();
            $table->unsignedBigInteger('N0_Terminal')->nullable();
            $table->unsignedBigInteger('N0_Scale')->nullable();
            $table->unsignedBigInteger('N0_Insurance')->nullable();
            $table->unsignedBigInteger('N0_Tonnage')->nullable();
            $table->unsignedBigInteger('N0_Loading')->nullable();
            $table->unsignedBigInteger('N0_Tax')->nullable();
            $table->unsignedBigInteger('N0_InsuranceTax')->nullable();
            $table->unsignedBigInteger('N0_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('N0_Stamp')->nullable();
            $table->unsignedBigInteger('N0_TraceCode')->nullable();
            $table->unsignedBigInteger('N0_Deductions')->nullable();
            $table->unsignedBigInteger('N0_Antiseptic')->nullable();
            $table->unsignedBigInteger('N0_Elambar')->nullable();
            $table->unsignedBigInteger('N0_Unload')->nullable();
            $table->unsignedBigInteger('N0_Complementary')->nullable();
            $table->unsignedBigInteger('N1_BaseFreight')->nullable();
            $table->unsignedBigInteger('N1_PreFreight')->nullable();
            $table->unsignedBigInteger('N1_RemFreight')->nullable();
            $table->unsignedBigInteger('N1_Sleep')->nullable();
            $table->unsignedBigInteger('N1_commission')->nullable();
            $table->unsignedBigInteger('N1_Storage')->nullable();
            $table->unsignedBigInteger('N1_Terminal')->nullable();
            $table->unsignedBigInteger('N1_Scale')->nullable();
            $table->unsignedBigInteger('N1_Insurance')->nullable();
            $table->unsignedBigInteger('N1_Tonnage')->nullable();
            $table->unsignedBigInteger('N1_Loading')->nullable();
            $table->unsignedBigInteger('N1_Tax')->nullable();
            $table->unsignedBigInteger('N1_InsuranceTax')->nullable();
            $table->unsignedBigInteger('N1_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('N1_Stamp')->nullable();
            $table->unsignedBigInteger('N1_TraceCode')->nullable();
            $table->unsignedBigInteger('N1_Deductions')->nullable();
            $table->unsignedBigInteger('N1_Antiseptic')->nullable();
            $table->unsignedBigInteger('N1_Elambar')->nullable();
            $table->unsignedBigInteger('N1_Unload')->nullable();
            $table->unsignedBigInteger('N1_Complementary')->nullable();
            $table->unsignedBigInteger('N2_BaseFreight')->nullable();
            $table->unsignedBigInteger('N2_PreFreight')->nullable();
            $table->unsignedBigInteger('N2_RemFreight')->nullable();
            $table->unsignedBigInteger('N2_Sleep')->nullable();
            $table->unsignedBigInteger('N2_commission')->nullable();
            $table->unsignedBigInteger('N2_Storage')->nullable();
            $table->unsignedBigInteger('N2_Terminal')->nullable();
            $table->unsignedBigInteger('N2_Scale')->nullable();
            $table->unsignedBigInteger('N2_Insurance')->nullable();
            $table->unsignedBigInteger('N2_Tonnage')->nullable();
            $table->unsignedBigInteger('N2_Loading')->nullable();
            $table->unsignedBigInteger('N2_Tax')->nullable();
            $table->unsignedBigInteger('N2_InsuranceTax')->nullable();
            $table->unsignedBigInteger('N2_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('N2_Stamp')->nullable();
            $table->unsignedBigInteger('N2_TraceCode')->nullable();
            $table->unsignedBigInteger('N2_Deductions')->nullable();
            $table->unsignedBigInteger('N2_Antiseptic')->nullable();
            $table->unsignedBigInteger('N2_Elambar')->nullable();
            $table->unsignedBigInteger('N2_Unload')->nullable();
            $table->unsignedBigInteger('N2_Complementary')->nullable();
            $table->unsignedBigInteger('N3_BaseFreight')->nullable();
            $table->unsignedBigInteger('N3_PreFreight')->nullable();
            $table->unsignedBigInteger('N3_RemFreight')->nullable();
            $table->unsignedBigInteger('N3_Sleep')->nullable();
            $table->unsignedBigInteger('N3_commission')->nullable();
            $table->unsignedBigInteger('N3_Storage')->nullable();
            $table->unsignedBigInteger('N3_Terminal')->nullable();
            $table->unsignedBigInteger('N3_Scale')->nullable();
            $table->unsignedBigInteger('N3_Insurance')->nullable();
            $table->unsignedBigInteger('N3_Tonnage')->nullable();
            $table->unsignedBigInteger('N3_Loading')->nullable();
            $table->unsignedBigInteger('N3_Tax')->nullable();
            $table->unsignedBigInteger('N3_InsuranceTax')->nullable();
            $table->unsignedBigInteger('N3_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('N3_Stamp')->nullable();
            $table->unsignedBigInteger('N3_TraceCode')->nullable();
            $table->unsignedBigInteger('N3_Deductions')->nullable();
            $table->unsignedBigInteger('N3_Antiseptic')->nullable();
            $table->unsignedBigInteger('N3_Elambar')->nullable();
            $table->unsignedBigInteger('N3_Unload')->nullable();
            $table->unsignedBigInteger('N3_Complementary')->nullable();
            $table->unsignedBigInteger('def_Sleep')->nullable();
            $table->unsignedBigInteger('def_Storage')->nullable();
            $table->unsignedBigInteger('def_Scale')->nullable();
            $table->unsignedBigInteger('def_Insurance')->nullable();
            $table->unsignedBigInteger('def_Tonnage')->nullable();
            $table->unsignedBigInteger('def_Loading')->nullable();
            $table->unsignedBigInteger('def_InsuranceTax')->nullable();
            $table->unsignedBigInteger('def_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('def_Stamp')->nullable();
            $table->unsignedBigInteger('def_TraceCode')->nullable();
            $table->unsignedBigInteger('def_Antiseptic')->nullable();
            $table->unsignedBigInteger('def_Elambar')->nullable();
            $table->unsignedBigInteger('def_Unload')->nullable();
            // $table->unsignedBigInteger('fixed_cost')->nullable();
            // $table->set('fixed_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_fixed_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('loading_cost')->nullable();
            // $table->set('loading_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_loading_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('weighbridge_price')->nullable();
            // $table->set('weighbridge_price_for_driver',$set_values)->nullable();
            // $table->boolean('is_weighbridge_price_for_receiver')->default(false);
            // $table->unsignedBigInteger('storage_cost')->nullable();
            // $table->set('storage_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_storage_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('unloading_cost')->nullable();
            // $table->set('unloading_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_unloading_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('online_cost')->nullable();
            // $table->set('online_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_online_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('overload_cost')->nullable();
            // $table->set('overload_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_overload_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('stamp_cost')->nullable();
            // $table->set('stamp_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_stamp_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('sleep_cost')->nullable();
            // $table->set('sleep_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_sleep_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('commission')->nullable();
            // $table->set('commission_for_driver',$set_values)->nullable();
            // $table->boolean('is_commission_for_receiver')->default(false);
            // $table->unsignedBigInteger('excess_baggage_fee')->nullable();
            // $table->set('excess_baggage_fee_for_driver',$set_values)->nullable();
            // $table->boolean('is_excess_baggage_fee_for_receiver')->default(false);
            // $table->unsignedBigInteger('insurance_cost')->nullable();
            // $table->set('insurance_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_insurance_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('disinfectant_cost')->nullable();
            // $table->set('disinfectant_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_disinfectant_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('driver_insurance_cost')->nullable();
            // $table->set('driver_insurance_cost_for_driver',$set_values)->nullable();
            // $table->boolean('is_driver_insurance_cost_for_receiver')->default(false);
            // $table->unsignedBigInteger('tax')->nullable();
            // $table->set('tax_for_driver',$set_values)->nullable();
            // $table->boolean('is_tax_for_receiver')->default(false);
            // $table->unsignedBigInteger('insurance_tax')->nullable();
            // $table->set('insurance_tax_for_driver',$set_values)->nullable();
            // $table->boolean('is_insurance_tax_for_receiver')->default(false);
            // $table->boolean('is_default')->default(false);
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
