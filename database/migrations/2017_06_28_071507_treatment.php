<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Treatment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('treatment', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('image');
          $table->unsignedInteger('parent_id');
          $table->foreign('parent_id')->references('id')->on('treatment');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment');
    }
}
