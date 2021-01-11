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
            $table->increments('id');;
            $table->string('name');
            $table->text('description');
            $table->integer('category_id')->nullable();
            $table->unsignedInteger('price');
            $table->unsignedInteger('discount')->nullable();
            $table->unsignedInteger('oldPrice')->nullable();
            $table->unsignedInteger('stock');
            $table->unsignedInteger('order_count')->default(0);
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
        Schema::dropIfExists('products');
    }
}
