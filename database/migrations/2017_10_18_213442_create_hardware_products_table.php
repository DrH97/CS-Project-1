<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('productname');
            $table->string('description');
            $table->integer('categoryid')->unsigned();
            $table->foreign('categoryid')->references('id')->on('categories');
            $table->string('image');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('sellerid')->unsigned();
            $table->foreign('sellerid')->references('id')->on('users');
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
        Schema::dropIfExists('hardware_products');
    }
}
