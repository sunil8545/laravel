<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Experience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('experience', function (Blueprint $table) {
          $table->increments('id');
          $table->string('designation');
          $table->string('department');
          $table->string('year');
          $table->unsignedInteger('hospital_id');
          $table->unsignedInteger('doctor_id');
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
        Schema::dropIfExists('experience');
    }
}
