<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('users', function (Blueprint $table){
            // $permissions = '';
            // for ($i=0; $i < 70; $i++) {
            //     $permissions.='0';
            // }
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('national_code')->nullable();
            $table->string('username_maha')->unique()->nullable();
            $table->string('password_maha')->nullable();
            $table->string('personal_code',20)->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('mobile',20)->nullable();
            $table->unsignedSmallInteger('role_code')->nullable();
            $table->string('role_title',255)->nullable();
            $table->string('permissions',500)->nullable()->unique();
            $table->boolean('is_active')->default(false);
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
