<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_offer', function (Blueprint $table) {
            $table->integer('page_item_id')->unsigned()->index();
            $table->integer('post_id')->unsigned()->index();

            $table->foreign('page_item_id')->references('id')->on('page_item')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('post')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['page_item_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_offer');
    }
}
