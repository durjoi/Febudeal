<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->unsignedBigInteger('saler_id');
            $table->string('products_name');
            $table->string('info');
            $table->string('quantity');
            $table->integer('price');
            $table->string('products_image');
            $table->string('catagory');
            $table->string('action');
            $table->timestamps();

            $table->foreign('saler_id')->references('id')->on('salers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
