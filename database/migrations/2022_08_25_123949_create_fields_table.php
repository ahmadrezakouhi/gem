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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->string('title',50)->nullable();
            $table->text('description')->nullable();
            $table->string('font',100)->nullable();
            $table->tinyInteger('unique')->default(0);
            $table->string('separator',1)->nullable();
            $table->unsignedInteger('length')->nullable();
            $table->string('evaluated_field',50)->nullable();
            $table->tinyInteger('is_draft')->default(1);
            $table->tinyInteger('visible')->default(0);
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
        Schema::dropIfExists('fields');
    }
};
