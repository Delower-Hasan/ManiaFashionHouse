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
            $table->unsignedBigInteger('catagory_id');
            $table->unsignedBigInteger('subcatagory_id');
            $table->unsignedBigInteger('brand_id'); /**Brand */
            $table->string('sku_id');
            $table->string('product_img');
            $table->string('product_name');
            $table->string('quantity');
            $table->text('price');
            $table->text('short_description');
            $table->string('product_type');
            $table->text('long_description');
            $table->string('color');
            $table->string('size');
            $table->string('material');
            $table->string('status')->default(0);
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

