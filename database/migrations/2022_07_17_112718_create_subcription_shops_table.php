<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcriptionShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcription_shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('stripe_id')->unique()->nullable();
            $table->string('stripe_status');
            $table->string('stripe_price')->nullable();
            $table->string('transaction_type')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('article_id')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('type')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('ends_at')->nullable();
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
        Schema::dropIfExists('subcription_shops');
    }
}
