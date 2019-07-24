<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepageSectionNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_section_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section_one');
            $table->string('section_two');
            $table->string('section_three');
            $table->string('section_four');
            $table->string('section_five');
            $table->string('section_six');
            $table->string('section_seven');
            $table->string('section_eight');
            $table->string('section_nine');
            $table->string('section_ten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepage_section_names');
    }
}
