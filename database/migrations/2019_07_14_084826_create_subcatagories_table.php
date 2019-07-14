<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcatagories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subcatagories');
            $table->unsignedBigInteger('catagories_id');
            $table->timestamps();

            $table->foreign('catagories_id')->references('id')->on('catagories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcatagories');
    }
}
