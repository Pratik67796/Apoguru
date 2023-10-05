<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('principal_topic_id')->unsigned();
            $table->foreign('principal_topic_id')->references('id')->on('principal_topics')->onDelete('cascade');
            $table->string('name');
            $table->string('video')->nullable();
            $table->string('video_link')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('ordering_position')->default(0);
            $table->string('status')->default('active')->nullable();
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
        Schema::dropIfExists('lecture_videos');
    }
}
