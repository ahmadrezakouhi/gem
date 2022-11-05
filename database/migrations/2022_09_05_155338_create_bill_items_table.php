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
        Schema::create('bill_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Bill_Id');
            $table->foreign('Bill_Id')->references('id')->on('bill_of_ladings');
            $table->unsignedBigInteger('Draft_Number')->nullable();
            $table->string('Draft_Serial',20)->nullable();
            $table->unsignedBigInteger('Order_Number')->nullable();
            $table->unsignedBigInteger('Kartex_Number')->nullable();
            $table->string('M_Name')->nullable();
            $table->unsignedBigInteger('M_NameCode')->nullable();
            $table->unsignedInteger('M_OriginWeigth')->nullable();
            $table->unsignedInteger('M_PackCount')->nullable();
            $table->string('M_LoadLocation')->nullable();
            $table->unsignedBigInteger('M_LoadLocationCode')->nullable();
            $table->unsignedBigInteger('M_Value')->nullable();
            $table->string('M_Description',500)->nullable();
            $table->boolean('M_TraficStatus')->default(false);
            $table->boolean('M_FireStatus')->default(false);
            $table->boolean('M_PlanStatus')->default(false);
            $table->string('M_PacketType')->nullable();
            $table->unsignedBigInteger('M_PacketTypeCode')->nullable();
            $table->string('M_LoadOwner')->nullable();
            $table->unsignedBigInteger('M_LoadingOwnerCode')->nullable();
            $table->string('M_IranCode')->nullable();
            $table->unsignedBigInteger('M_DestinationWeigth')->nullable();
            $table->string('BI_Field1')->nullable();
            $table->string('BI_Field2')->nullable();
            $table->string('BI_Field3')->nullable();
            $table->string('BI_Field4')->nullable();
            $table->string('BI_Field5')->nullable();
            $table->string('BI_Field6')->nullable();
            $table->string('BI_Field7')->nullable();
            $table->string('BI_Field8')->nullable();
            $table->string('BI_Field9')->nullable();
            $table->string('BI_Field10')->nullable();
            $table->string('BI_Field11')->nullable();
            $table->string('BI_Field12')->nullable();
            $table->unsignedInteger('BI_ItemNumber')->nullable();
            $table->boolean('BI_Delivered')->default(false);
            $table->datetime('BI_DeliveredTime')->nullable();
            $table->unsignedBigInteger('BI_DeliverUserId')->nullable();
            $table->string('BI_DeliverUserName')->nullable();

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
        Schema::dropIfExists('bill_items');
    }
};
