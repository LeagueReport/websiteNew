<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ItemSet', function (Blueprint $table) {
           $table->increments('userID')->unique();
           $table->string('itemSetID');
           $table->string('championID');
           $table->string('item1ID');
           $table->string('item2ID');
           $table->string('item3ID');
           $table->string('item4ID');
           $table->string('item5ID');
           $table->string('item6ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ItemSet');
    }
}
