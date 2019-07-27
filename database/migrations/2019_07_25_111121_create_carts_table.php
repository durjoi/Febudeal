<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('users_id')->nullable();
          $table->unsignedBigInteger('products_id');
          $table->string('ip_address')->nullable();
          $table->unsignedBigInteger('order_id')->nullable();
          $table->integer('products_quantity')->default(1);
          $table->timestamps();

          $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
          $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
