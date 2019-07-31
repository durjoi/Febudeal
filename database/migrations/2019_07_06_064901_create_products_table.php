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
            $table->unsignedBigInteger('sub2catagories_id')->nullable();
            $table->unsignedBigInteger('subcatagories_id')->nullable();
            $table->unsignedBigInteger('catagories_id');
            $table->string('title');
            $table->longText('description');
            // $table->integer('quantity');
            $table->string('link')->nullable();
            $table->integer('original_price');
            $table->integer('present_price');
            $table->integer('off_price');
            $table->integer('offer')->nullable();
            $table->string('brand');
            $table->string('brand_url');
            $table->string('action');
            $table->string('image1');
            // $table->string('image2');
            // $table->string('image3');
            // $table->string('image4');

            $table->timestamps();

            $table->foreign('saler_id')->references('id')->on('salers')->onDelete('cascade');
            $table->foreign('catagories_id')->references('id')->on('catagories')->onDelete('cascade');



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
