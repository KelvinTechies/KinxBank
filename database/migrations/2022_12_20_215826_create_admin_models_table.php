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
        Schema::create('admin_models', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('UserName');
            $table->string("Account_Number");
            $table->string('otp');
            $table->string('UserType');
            $table->string('zipcode');
            $table->string('Country');
            $table->string('HomeAddress');
            $table->string('PhoneNumber');
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
        Schema::dropIfExists('admin_models');
    }
};