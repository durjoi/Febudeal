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

            $table->bigIncrements('id');
            $table->unsignedBigInteger('saler_id');
            $table->unsignedBigInteger('sub2catagories_id');
            $table->string('title');
            $table->longText('description');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->integer('sizenumber')->nullable();
            $table->string('sizesymbol')->nullable();
            $table->string('color')->nullable();
            $table->string('action');
            $table->timestamps();

            $table->foreign('saler_id')->references('id')->on('salers')->onDelete('cascade');
            $table->foreign('sub2catagories_id')->references('id')->on('sub2catagories')->onDelete('cascade');


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
