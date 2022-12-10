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
            $table->string('ContractNumber',30)->nullable();
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
            $table->boolean('N0_BaseFreight')->default(false);
            $table->boolean('N0_PreFreight')->default(false);
            $table->boolean('N0_RemFreight')->default(false);
            $table->boolean('N0_Sleep')->default(false);
            $table->boolean('N0_commission')->default(false);
            $table->boolean('N0_Storage')->default(false);
            $table->boolean('N0_Terminal')->default(false);
            $table->boolean('N0_Scale')->default(false);
            $table->boolean('N0_Insurance')->default(false);
            $table->boolean('N0_Tonnage')->default(false);
            $table->boolean('N0_Loading')->default(false);
            $table->boolean('N0_Tax')->default(false);
            $table->boolean('N0_InsuranceTax')->default(false);
            $table->boolean('N0_TakeFromDriver')->default(false);
            $table->boolean('N0_Stamp')->default(false);
            $table->boolean('N0_TraceCode')->default(false);
            $table->boolean('N0_Deductions')->default(false);
            $table->boolean('N0_Antiseptic')->default(false);
            $table->boolean('N0_Elambar')->default(false);
            $table->boolean('N0_Unload')->default(false);
            $table->boolean('N0_Complementary')->default(false);
            $table->boolean('N1_BaseFreight')->default(false);
            $table->boolean('N1_PreFreight')->default(false);
            $table->boolean('N1_RemFreight')->default(false);
            $table->boolean('N1_Sleep')->default(false);
            $table->boolean('N1_commission')->default(false);
            $table->boolean('N1_Storage')->default(false);
            $table->boolean('N1_Terminal')->default(false);
            $table->boolean('N1_Scale')->default(false);
            $table->boolean('N1_Insurance')->default(false);
            $table->boolean('N1_Tonnage')->default(false);
            $table->boolean('N1_Loading')->default(false);
            $table->boolean('N1_Tax')->default(false);
            $table->boolean('N1_InsuranceTax')->default(false);
            $table->boolean('N1_TakeFromDriver')->default(false);
            $table->boolean('N1_Stamp')->default(false);
            $table->boolean('N1_TraceCode')->default(false);
            $table->boolean('N1_Deductions')->default(false);
            $table->boolean('N1_Antiseptic')->default(false);
            $table->boolean('N1_Elambar')->default(false);
            $table->boolean('N1_Unload')->default(false);
            $table->boolean('N1_Complementary')->default(false);
            $table->boolean('N2_BaseFreight')->default(false);
            $table->boolean('N2_PreFreight')->default(false);
            $table->boolean('N2_RemFreight')->default(false);
            $table->boolean('N2_Sleep')->default(false);
            $table->boolean('N2_commission')->default(false);
            $table->boolean('N2_Storage')->default(false);
            $table->boolean('N2_Terminal')->default(false);
            $table->boolean('N2_Scale')->default(false);
            $table->boolean('N2_Insurance')->default(false);
            $table->boolean('N2_Tonnage')->default(false);
            $table->boolean('N2_Loading')->default(false);
            $table->boolean('N2_Tax')->default(false);
            $table->boolean('N2_InsuranceTax')->default(false);
            $table->boolean('N2_TakeFromDriver')->default(false);
            $table->boolean('N2_Stamp')->default(false);
            $table->boolean('N2_TraceCode')->default(false);
            $table->boolean('N2_Deductions')->default(false);
            $table->boolean('N2_Antiseptic')->default(false);
            $table->boolean('N2_Elambar')->default(false);
            $table->boolean('N2_Unload')->default(false);
            $table->boolean('N2_Complementary')->default(false);
            $table->boolean('N3_BaseFreight')->default(false);
            $table->boolean('N3_PreFreight')->default(false);
            $table->boolean('N3_RemFreight')->default(false);
            $table->boolean('N3_Sleep')->default(false);
            $table->boolean('N3_commission')->default(false);
            $table->boolean('N3_Storage')->default(false);
            $table->boolean('N3_Terminal')->default(false);
            $table->boolean('N3_Scale')->default(false);
            $table->boolean('N3_Insurance')->default(false);
            $table->boolean('N3_Tonnage')->default(false);
            $table->boolean('N3_Loading')->default(false);
            $table->boolean('N3_Tax')->default(false);
            $table->boolean('N3_InsuranceTax')->default(false);
            $table->boolean('N3_TakeFromDriver')->default(false);
            $table->boolean('N3_Stamp')->default(false);
            $table->boolean('N3_TraceCode')->default(false);
            $table->boolean('N3_Deductions')->default(false);
            $table->boolean('N3_Antiseptic')->default(false);
            $table->boolean('N3_Elambar')->default(false);
            $table->boolean('N3_Unload')->default(false);
            $table->boolean('N3_Complementary')->default(false);
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
            $table->boolean('R_BaseFreight')->default(false);
            $table->boolean('R_PreFreight')->default(false);
            $table->boolean('R_RemFreight')->default(false);
            $table->boolean('R_Sleep')->default(false);
            $table->boolean('R_Commission')->default(false);
            $table->boolean('R_Storage')->default(false);
            $table->boolean('R_Terminal')->default(false);
            $table->boolean('R_Scale')->default(false);
            $table->boolean('R_Insurance')->default(false);
            $table->boolean('R_Tonnage')->default(false);
            $table->boolean('R_Loading')->default(false);
            $table->boolean('R_Tax')->default(false);
            $table->boolean('R_InsuranceTax')->default(false);
            $table->boolean('R_TakeFromDriver')->default(false);
            $table->boolean('R_Stamp')->default(false);
            $table->boolean('R_TraceCode')->default(false);
            $table->boolean('R_Deductions')->default(false);
            $table->boolean('R_Antiseptic')->default(false);
            $table->boolean('R_Elambar')->default(false);
            $table->boolean('R_Unload')->default(false);
            $table->boolean('R_Complementary')->default(false);
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
