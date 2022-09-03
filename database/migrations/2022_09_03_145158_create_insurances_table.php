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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('insurance_company',100)->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('default')->default(0);
            $table->enum('type',['بیمه مسئولیت مدنی','بیمه باربری'])->nullable();
            $table->string('insurance_company_national_code',20)->nullable();
            $table->string('insurance_company_phone',20)->nullable();
            $table->string('insurance_company_province',100)->nullable();
            $table->string('insurance_company_city',100)->nullable();
            $table->string('insurance_company_economic_code',20)->nullable();
            $table->string('insurance_company_postal_code',20)->nullable();
            $table->string('insurance_company_site',200)->nullable();
            $table->string('agent_name',100)->nullable();
            $table->string('agent_mobile',20)->nullable();
            $table->string('agent_phone',20)->nullable();
            $table->text('agent_address')->nullable();
            $table->string('agent_fax',20)->nullable();
            $table->string('agent_email',100)->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('insurances');
    }
};
