<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordereds', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('country');
            $table->string('address');
            $table->string('bp');
            $table->string('city');
            $table->string('image');
            $table->string('email');
            $table->string('shop');
            $table->string('price');
            $table->string('nameProduct');
            $table->integer('status')->default(0);
            $table->string('billNumber');
            $table->string('payment_method');
            $table->integer('phone');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
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
        Schema::dropIfExists('ordereds');
    }
}
