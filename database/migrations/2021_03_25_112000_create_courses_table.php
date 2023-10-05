<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->BigInteger('main_category_id')->unsigned();
            $table->foreign('main_category_id')->references('id')->on('main_categories')->onDelete('cascade');

            $table->BigInteger('parent_sub_category_id')->unsigned();
            $table->foreign('parent_sub_category_id')->references('id')->on('parent_sub_categories')->onDelete('cascade');

            $table->BigInteger('child_sub_category_id')->unsigned();
            $table->foreign('child_sub_category_id')->references('id')->on('child_sub_categories')->onDelete('cascade');

            $table->string('title');
            $table->text('description')->nullable();
            $table->BigInteger('rating')->nullable();
            $table->double('actual_price');
            $table->double('sell_price')->nullable();

            $table->string('image')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
