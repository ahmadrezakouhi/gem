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
        Schema::create('bill_pays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Bill_Id');
            $table->foreign('Bill_Id')->references('id')->on('bill_of_ladings');
            $table->string('D_NationalCode',11)->nullable();
            $table->string('D_Name')->nullable();
            $table->string('D_LastName')->nullable();
            $table->string('D_AccountNumber')->nullable();
            $table->string('D_Shaba')->nullable();
            $table->string('D_AccountBank')->nullable();
            $table->string('D_Tel')->nullable();
            $table->string('Description',500)->nullable();
            $table->dateTime('ApplyTime')->nullable();
            $table->unsignedBigInteger('Fee')->nullable();
            $table->unsignedBigInteger('UserId')->nullable();
            $table->string('UserName')->nullable();
            $table->boolean('Status')->default(false);
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
        Schema::dropIfExists('bill_pays');
    }
};
