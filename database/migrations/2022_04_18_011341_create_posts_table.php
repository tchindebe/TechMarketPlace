<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author');
            $table->string('title');
            $table->string('category');
            $table->string('skills');
            $table->bigInteger('salary_price')->nullable();
            $table->bigInteger('min_price')->nullable();
            $table->bigInteger('max_price')->nullable();
            $table->string('job_type')->nullable();
            $table->string('image', 2048)->nullable();
            $table->text('description');
            $table->string('post_type');
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
        Schema::dropIfExists('posts');
    }
}
