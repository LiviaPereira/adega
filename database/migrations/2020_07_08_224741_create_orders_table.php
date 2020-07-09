<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->foreignId('shoppingCarts_id')->references('id')->on('shopping_carts');
            $table->foreignId('deliveries_id')->references('id')->on('deliveries');
            $table->foreignId('payMethods_id')->references('id')->on('pay_methods');
            $table->foreignId('devolutions_id')->references('id')->on('devolutions');
            $table->foreignId('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
