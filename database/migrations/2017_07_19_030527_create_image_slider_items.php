<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageSliderItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_slider_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_slider_id')->unsigned()->index();
            $table->string('path');
            $table->timestamps();

            $table->foreign('image_slider_id')->references('id')->on('image_slider')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_slider_items');
    }
}
