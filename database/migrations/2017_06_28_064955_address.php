<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('address', function (Blueprint $table) {
          $table->increments('id');
          $table->string('street');
          $table->string('city');
          $table->string('zipcode');
          $table->unsignedInteger('state_id');
          $table->unsignedInteger('country_id');
          $table->foreign('state_id')->references('id')->on('state');
          $table->foreign('country_id')->references('id')->on('country');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
