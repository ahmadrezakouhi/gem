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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('panel_code')->unique()->unsigned();
            $table->string('name',100)->nullable();
            $table->string('company_code',20)->nullable();
            $table->string('tel',50)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('manager_name',100)->nullable();
            $table->string('manager_last_name',100)->nullable();
            $table->string('presentor_name',100)->nullable();
            $table->string('presentor_last_name',100)->nullable();
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
        Schema::dropIfExists('companies');
    }
};
