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
            $table->string('name');
            $table->string('code');
            $table->string('tel');
            $table->string('fax');
            $table->string('mobile');
            $table->string('manager_name');
            $table->string('manager_last_name');
            $table->string('presentor_name');
            $table->string('presentor_last_name');
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
