<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->boolean('available');
            $table->string('name', 100);
            $table->text('description');
            $table->decimal('cost_price', 5, 2);
            $table->decimal('sale_price', 5, 2);
            $table->decimal('discount', 5, 2)->nullable()->default(null);
            $table->string('photo', 100);

            $table->foreignId('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
