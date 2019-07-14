<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSub2catagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub2catagories', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('subcatagories2');
          $table->unsignedBigInteger('subcatagories_id');
          $table->timestamps();

          $table->foreign('subcatagories_id')->references('id')->on('subcatagories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub2catagories');
    }
}
