<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/*
  This file creates the table we use for storing item sets. When LeagueReport is freshly installed in a new machine
  a simple migrate command will create tables in the designated database (defined in the .env file) identical to the
  table defined below. This can also be used to reset the tables if we want to quickly delete all the information
  in the tables.
*/

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
           $table->increments('itemSetID')->unique();
           $table->string('userName');
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
