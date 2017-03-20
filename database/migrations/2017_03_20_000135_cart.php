<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_carts');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id_products')->on('products')->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('cart');
    }
}
