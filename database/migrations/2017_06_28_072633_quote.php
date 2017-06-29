<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quote', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('patient_id');
          $table->unsignedInteger('treatment_id');
          $table->unsignedInteger('hospital_id');
          $table->unsignedInteger('doctor_id');
          $table->timestamps();
          $table->foreign('patient_id')->references('id')->on('users');
          $table->foreign('treatment_id')->references('id')->on('treatment');
          $table->foreign('hospital_id')->references('id')->on('users');
          $table->foreign('doctor_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote');
    }
}
