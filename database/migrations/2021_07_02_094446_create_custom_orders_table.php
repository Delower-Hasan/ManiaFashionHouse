<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('price');
            $table->string('quantity');
            // Shipping address
            $table->string('user_name');
            $table->string('company_name')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upozela')->nullable();
            $table->string('union')->nullable();
            $table->string('street_address')->nullable();
            $table->string('apartment')->nullable();
            $table->string('post_code')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('grandTotal');
            $table->string('payment_method')->nullable();
            // Billing address
            $table->string('billing_to')->nullable();
            $table->text('billing_address')->nullable();
            $table->text('billing_email')->nullable();
            $table->text('billing_phone')->nullable();

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
        Schema::dropIfExists('custom_orders');
    }
}
