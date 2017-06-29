<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('doctor', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('fee');
          $table->unsignedInteger('doctor_id');
          $table->string('availability_status');
          $table->unsignedInteger('timing_id');
          $table->timestamps();
          $table->foreign('doctor_id')->references('id')->on('users');
          $table->foreign('timing_id')->references('id')->on('timing');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}
