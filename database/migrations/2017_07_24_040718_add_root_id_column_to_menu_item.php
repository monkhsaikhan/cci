<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRootIdColumnToMenuItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_item', function (Blueprint $table) {
            $table->integer('root_id')->after('sort')->unsigned()->index()->nullable()->default(null);
            $table->foreign('root_id')->references('id')->on('menu_item')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_item', function (Blueprint $table) {
            $table->dropColumn('root_id');
        });
    }
}
