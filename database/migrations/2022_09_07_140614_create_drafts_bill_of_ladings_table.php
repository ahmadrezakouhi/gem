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
        Schema::create('drafts_bill_of_ladings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panel_code');
            $table->foreign('panel_code')->references('panel_code')->on('companies');
            $table->timestamp('issue_date')->nullable();
            $table->string('draft_bill_of_lading_number',20)->nullable();
            $table->unsignedBigInteger('from_number')->nullable();
            $table->unsignedBigInteger('to_number')->nullable();
            $table->string('serial',10)->nullable();
            $table->string('status_code',50)->nullable();
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
        Schema::dropIfExists('drafts_bill_of_ladings');
    }
};
