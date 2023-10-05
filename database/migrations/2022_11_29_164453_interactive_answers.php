<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InteractiveAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactive_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->BigInteger('lecture_videos_id')->unsigned();
            $table->foreign('lecture_videos_id')->references('id')->on('lecture_videos')->onDelete('cascade');

            $table->BigInteger('interactive_qestion_id')->unsigned();
            $table->foreign('interactive_qestion_id')->references('id')->on('interactive_qestion')->onDelete('cascade');

            $table->string('interactive_answer');
            $table->string('correct_answer');
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
        Schema::dropIfExists('interactive_answers');
    }
}
