<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HospitalTreatment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hospital_treatment', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('fee');
          $table->unsignedInteger('hospital_id');
          $table->unsignedInteger('treatment_id');
          $table->foreign('hospital_id')->references('id')->on('users');
          $table->foreign('treatment_id')->references('id')->on('treatment');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_treatment');
    }
}
