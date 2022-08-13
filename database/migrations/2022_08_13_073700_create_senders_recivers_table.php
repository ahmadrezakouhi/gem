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
            $table->string('code')->nullable();
            $table->string('national_code')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('economic_code')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('tel')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->tinyInteger('status')->default();
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
