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
        Schema::create('user_deposit_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id');
            $table->string('Amount');
            $table->string('Email');
            $table->string('UserName');
            $table->string('UserAccount');
            $table->string('SentTo');
            $table->string('Status');
            $table->string('Method');
            $table->string('TrasactionId');
            $table->string('Time');
            $table->string('Date');
            $table->timestamps();
            $table->foreign('User_id')->references('id')->on('bankinfo_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_deposit_models');
    }
};
