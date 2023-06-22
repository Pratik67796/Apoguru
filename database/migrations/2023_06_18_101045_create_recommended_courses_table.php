<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommended_courses', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('courses_id')->unsigned()->nullable();
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');

            $table->BigInteger('parent_courses')->unsigned()->nullable();
            $table->foreign('parent_courses')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('recommended_courses');
    }
}
