<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('phone');
            $table->string('country');
            $table->string('city');
            $table->string('bp');
            $table->string('description');
            $table->string('slogan');
            $table->string('logo');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('shop_profiles');
    }
}
