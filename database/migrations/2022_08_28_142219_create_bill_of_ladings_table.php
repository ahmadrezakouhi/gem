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
            $table->string('Bill_TC', 50)->nullable();
            $table->unsignedBigInteger('Bill_Number')->nullable();
            $table->string('Bill_Series', 10)->nullable();
            $table->dateTimeTz('Bill_ApplyTime')->nullable();
            $table->string('Bill_Description', 500)->nullable();
            $table->unsignedSmallInteger('Bill_Status')->nullable();
            $table->boolean('Bill_IsAfterDelivered')->deflate(false);
            $table->unsignedBigInteger('Bill_UserId')->nullable();
            $table->string('Bill_UserName', 100)->nullable();
            $table->unsignedBigInteger('S_OriginCode')->nullable();
            $table->unsignedBigInteger('R_DestinationCode')->nullable();
            $table->unsignedBigInteger('Bill_CheckListSerial')->nullable();
            $table->unsignedSmallInteger('Bill_BranchCode')->nullable();
            $table->unsignedBigInteger('Bill_ContractNumber')->nullable();
            $table->string('Bill_ContractTitle')->nullable();
            $table->unsignedInteger('Bill_SendToServer')->nullable();
            $table->boolean('Bill_IsRobari')->default(false);
            $table->string('Bill_CvInsuranceContractNumber', 50)->nullable();
            $table->unsignedBigInteger('Bill_CvInsuranceCompanyCode')->nullable();
            $table->unsignedBigInteger('Bill_CvInsuranceContractId')->nullable();
            $table->string('Bill_CgInsuranceContractNumber', 50)->nullable();
            $table->unsignedBigInteger('Bill_CgInsuranceCompanyCode')->nullable();
            $table->unsignedBigInteger('Bill_CgInsuranceContractId')->nullable();
            $table->string('Bill_MasterBillOfLadingTraceCode', 50)->nullable();
            $table->unsignedSmallInteger('Haab_AnbTypeCode')->nullable();
            $table->string('Haab_AnbTypeTitle', 100)->nullable();
            $table->string('Haab_BargirPlateNo', 20)->nullable();
            $table->string('Haab_BargirPlateSerial', 20)->nullable();
            $table->string('Haab_ShomareSanad')->nullable(); //
            $table->date('Haab_TarikheSanad')->nullable();
            $table->string('Haab_TC', 50)->nullable();
            $table->string('Haab_AnbCode', 10)->nullable();
            $table->string('Haab_TechnicalManager', 100)->nullable();
            $table->boolean('Bill_IsReturned')->default(false);
            $table->string('Bill_SignatureUser')->nullable();
            $table->date('Bill_ArrivalDate')->nullable();
            $table->unsignedSmallInteger('Bill_Type')->nullable();
            $table->unsignedBigInteger('S_Id')->nullable();
            $table->string('S_TitleName', 100)->nullable();
            $table->string('S_Name')->nullable();
            $table->string('S_LastName')->nullable();
            $table->string('S_NationalCode', 11)->nullable();
            $table->string('S_PostCode', 10)->nullable();
            $table->string('S_OriginTitle')->nullable();
            $table->string('S_Address', 500)->nullable();
            $table->string('S_EconomicNumber', 20)->nullable();
            $table->string('S_Tel')->nullable();
            $table->unsignedBigInteger('R_Id')->nullable();
            $table->string('R_TitleName', 100)->nullable();
            $table->string('R_Name')->nullable();
            $table->string('R_LastName')->nullable();
            $table->string('R_NationalCode', 11)->nullable();
            $table->string('R_PostCode', 10)->nullable();
            $table->string('R_DestinationTitle')->nullable();
            $table->string('R_Address', 500)->nullable();
            $table->string('R_EconomicNumber', 20)->nullable();
            $table->string('R_Tel')->nullable();
            $table->unsignedBigInteger('D1_Inttcard')->nullable();
            $table->string('D1_Name')->nullable();
            $table->string('D1_LastName')->nullable();
            $table->string('D1_NationalCode', 10)->nullable();
            $table->string('D1_Tel')->nullable();
            $table->string('D1_Address', 500)->nullable();
            $table->string('D1_City')->nullable();
            $table->date('D1_SalamatExpDate')->nullable();
            $table->string('D1_CertificateNumber', 20)->nullable();
            $table->unsignedBigInteger('D1_PersonalCode')->nullable();
            $table->unsignedBigInteger('D2_Inttcard')->nullable();
            $table->string('D2_Name')->nullable();
            $table->string('D2_LastName')->nullable();
            $table->string('D2_NationalCode', 10)->nullable();
            $table->string('D2_Tel')->nullable();
            $table->string('D2_Address', 500)->nullable();
            $table->string('D2_City')->nullable();
            $table->date('D2_SalamatExpDate')->nullable();
            $table->string('D2_CertificateNumber', 20)->nullable();
            $table->unsignedBigInteger('D2_PersonalCode')->nullable();
            $table->unsignedBigInteger('N_InttCard')->nullable();
            $table->string('N_Pelak', 10)->nullable();
            $table->string('N_PelakSeries', 5)->nullable();
            $table->string('N_NumberLocation')->nullable();
            $table->unsignedBigInteger('N_NumberLocationCode')->nullable();
            $table->string('N_VehicleTypes')->nullable();
            $table->unsignedInteger('N_VehicleTypeCode')->nullable();
            $table->string('N_Model')->nullable();
            $table->unsignedInteger('N_ModelCode')->nullable();
            $table->string('N_Color')->nullable();
            $table->string('N_VIN', 30)->nullable();
            $table->unsignedSmallInteger('N_BuildYear')->nullable();
            $table->date('N_MoayenehExpDate')->nullable();
            $table->date('N_InsuranceExpDate')->nullable();
            $table->string('N_InsuranceNumber', 50)->nullable();
            $table->unsignedSmallInteger('N_OwnerStatus')->nullable();
            $table->unsignedBigInteger('Fee_BaseFreight')->nullable();
            $table->unsignedBigInteger('Fee_PreFreight')->nullable();
            $table->unsignedBigInteger('Fee_RemFreight')->nullable();
            $table->unsignedBigInteger('Fee_Sleep')->nullable();
            $table->unsignedBigInteger('Fee_Commission')->nullable();
            $table->unsignedBigInteger('Fee_Storage')->nullable();
            $table->unsignedBigInteger('Fee_Terminal')->nullable();
            $table->unsignedBigInteger('Fee_Scale')->nullable();
            $table->unsignedBigInteger('Fee_Insurance')->nullable();
            $table->unsignedBigInteger('Fee_Tonnage')->nullable();
            $table->unsignedBigInteger('Fee_Loading')->nullable();
            $table->unsignedBigInteger('Fee_Tax')->nullable();
            $table->unsignedBigInteger('Fee_InsuranceTax')->nullable();
            $table->unsignedBigInteger('Fee_TakeFromDriver')->nullable();
            $table->unsignedBigInteger('Fee_Stamp')->nullable();
            $table->unsignedBigInteger('Fee_TraceCode')->nullable();
            $table->unsignedBigInteger('Fee_Deductions')->nullable();
            $table->unsignedBigInteger('Fee_Antiseptic')->nullable();
            $table->unsignedBigInteger('Fee_Elambar')->nullable();
            $table->unsignedBigInteger('Fee_Unload')->nullable();
            $table->unsignedBigInteger('Fee_Complementary')->nullable();
            $table->string('Bill_D1OneTimePassword')->nullable();
            $table->string('Bill_NOneTimePassword')->nullable();
            $table->unsignedBigInteger('Bill_ElambarPermission')->nullable();
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
