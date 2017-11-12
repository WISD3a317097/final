<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodlists', function (Blueprint $table) {
            $table->increments('food_id')->index();
            $table->string('food');
            $table->integer('amount');
            $table->string('url');
            $table->longText('content');
            $table->integer('shops_id')->unsigned();
            $table->foreign('shops_id')->references('id')->on('shops');
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
        Schema::drop('foodlist');
    }
}
