<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->BigInteger('main_category_id')->unsigned();
            $table->foreign('main_category_id')->references('id')->on('main_categories')->onDelete('cascade');         
            $table->BigInteger('parent_sub_category_id')->unsigned();
            $table->foreign('parent_sub_category_id')->references('id')->on('parent_sub_categories')->onDelete('cascade');
            $table->string('name');
             $table->string('description')->nullable();
            $table->string('status')->default('active');
            $table->string('image')->nullable();
            $table->boolean('applicable_to_pq')->nullable();
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
        Schema::dropIfExists('child_sub_categories');
    }
}
