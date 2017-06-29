<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HospitalAccessories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hospital_accessories', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('hospital_id');
          $table->unsignedInteger('accessorie_id');
          $table->foreign('hospital_id')->references('id')->on('users');
          $table->foreign('accessorie_id')->references('id')->on('accessories');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_accessories');
    }
}
