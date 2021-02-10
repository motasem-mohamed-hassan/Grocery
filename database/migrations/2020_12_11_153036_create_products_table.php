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
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('category_id');
            $table->integer('subCategory_id');

            // $table->string('transmissionType');
            // $table->string('kilometers');
            // $table->string('engineCapacity');
            // $table->string('screensize');
            // $table->string('memory');
            // $table->string('storage');
            // $table->string('generation');
            // $table->string('color');
            // $table->string('accessories');
            // $table->string('processor');
            // $table->text('description');
            // $table->unsignedInteger('price');


            $table->boolean('status')->default('0');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
