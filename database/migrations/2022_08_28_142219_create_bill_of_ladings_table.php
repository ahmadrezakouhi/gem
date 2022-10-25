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
            $table->string('Bill_TC', 30)->nullable();
            $table->unsignedBigInteger('Bill_Number')->nullable();
            $table->string('Bill_Series', 20)->nullable();
            $table->dateTimeTz('Bill_ApplyTime')->nullable();
            $table->text('Bill_Description')->nullable();
            $table->unsignedInteger('Bill_Status')->nullable();
            $table->unsignedBigInteger('Bill_AfterDelivered')->nullable();
            $table->unsignedBigInteger('Bill_UserId')->nullable();
            $table->string('Bill_UserName')->nullable();
            $table->unsignedBigInteger('Bill_OriginCode')->nullable();
            $table->unsignedBigInteger('Bill_DestinationCode')->nullable();
            $table->unsignedBigInteger('Bill_CheckListSerial')->nullable();
            $table->unsignedBigInteger('Bill_BranchCode')->nullable();
            $table->unsignedBigInteger('Bill_ContractNumber')->nullable();
            $table->string('Bill_ContractTitle')->nullable();
            $table->unsignedInteger('Bill_SendToServer')->nullable();
            $table->boolean('Bill_IsRobari')->default(false);
            $table->unsignedBigInteger('Bill_InsuranceContractNumber')->nullable();
            $table->unsignedBigInteger('Bill_InsuranceContractCode')->nullable();
            $table->unsignedBigInteger('Bill_InsuranceContractId')->nullable();
            $table->unsignedBigInteger('Bill_MasterBillOfLadingTraceCode')->nullable();
            $table->unsignedBigInteger('Haab_AnbTypeCode')->nullable();
            $table->string('Haab_AnbTypeTitle')->nullable();
            $table->string('Haab_BargirPlateNo')->nullable();
            $table->string('Haab_BargirPlateSerial')->nullable();
            $table->string('Haab_ShomareSanad')->nullable();
            $table->dateTime('Haab_TarikheSanad')->nullable();
            $table->unsignedBigInteger('Haab_TC')->nullable();
            $table->unsignedBigInteger('Haab_AnbCode')->nullable();
            $table->string('Haab_TechnicalManager')->nullable();
            $table->boolean('Bill_IsReturned')->default(false);
            $table->string('Bill_SignatureUser')->nullable();
            $table->dateTimeTz('Bill_ArrivalDate')->nullable();
            $table->string('Bill_Type')->nullable();
            $table->unsignedBigInteger('S_Id')->nullable();
            $table->string('S_TitleName')->nullable();
            $table->string('S_Name')->nullable();
            $table->string('S_LastName')->nullable();
            $table->string('S_NationalCode')->nullable();
            $table->string('S_PostCode')->nullable();
            $table->string('S_OriginCity')->nullable();
            $table->string('S_Address')->nullable();
            $table->string('S_EconomicNumber')->nullable();
            $table->string('S_Tel')->nullable();
            $table->unsignedBigInteger('R_Id')->nullable();
            $table->string('R_TitleName')->nullable();
            $table->string('R_Name')->nullable();
            $table->string('R_LastName')->nullable();
            $table->string('R_NationalCode',20)->nullable();
            $table->string('R_PostCode')->nullable();
            $table->string('R_DestinationCity')->nullable();
            $table->string('R_Address')->nullable();
            $table->string('R_EconomicNumber')->nullable();
            $table->string('R_Tel')->nullable();
            $table->string('D1_Inttcard')->nullable();
            $table->string('D1_Name')->nullable();
            $table->string('D1_LastName')->nullable();
            $table->string('D1_NationalCode')->nullable();
            $table->string('D1_Tel')->nullable();
            $table->string('D1_Address')->nullable();
            $table->string('D1_City')->nullable();
            $table->dateTime('D1_SalamatExpDate')->nullable();
            $table->string('D1_CertificateNumber')->nullable();
            $table->string('D1_PersonalCode')->nullable();
            $table->string('D2_Inttcard')->nullable();
            $table->string('D2_Name')->nullable();
            $table->string('D2_LastName')->nullable();
            $table->string('D2_NationalCode')->nullable();
            $table->string('D2_Tel')->nullable();
            $table->string('D2_Address')->nullable();
            $table->string('D2_City')->nullable();
            $table->dateTime('D2_SalamatExpDate')->nullable();
            $table->string('D2_CertificateNumber')->nullable();
            $table->string('D2_PersonalCode')->nullable();
            $table->string('N_InttCard')->nullable();
            $table->string('N_Pelak')->nullable();
            $table->string('N_NumberLocation')->nullable();
            $table->string('N_NumberLocationCode')->nullable();
            $table->string('N_VehicleTypes')->nullable();
            $table->string('N_Model')->nullable();
            $table->string('N_Color')->nullable();
            $table->string('N_VIN')->nullable();
            $table->unsignedSmallInteger('N_BuildYear')->nullable();
            $table->datetime('N_MoayenehExpDate')->nullable();
            $table->datetime('N_InsuranceExpDate')->nullable();
            $table->string('N_InsuranceNumber')->nullable();
            $table->unsignedTinyInteger('N_OwnerStatus')->nullable();
            $table->string('N_ModelCode')->nullable();
            $table->string('N_VehicleTypeCode')->nullable();
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
