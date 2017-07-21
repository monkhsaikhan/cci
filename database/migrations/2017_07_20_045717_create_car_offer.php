<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_offer', function (Blueprint $table) {
            $table->integer('page_item_id')->unsigned()->index();
            $table->integer('car_id')->unsigned()->index();

            $table->foreign('page_item_id')->references('id')->on('page_item')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('car')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['page_item_id', 'car_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_offer');
    }
}
