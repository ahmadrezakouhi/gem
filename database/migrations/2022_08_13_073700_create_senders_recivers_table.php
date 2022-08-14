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
        Schema::create('senders_recivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('national_code',20)->nullable();
            $table->string('title',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('economic_code',20)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('tel',50)->nullable();
            $table->string('mobile',50)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('email',100)->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('senders_recivers');
    }
};
