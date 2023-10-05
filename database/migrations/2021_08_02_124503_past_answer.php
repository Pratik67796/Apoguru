<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PastAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_question_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->BigInteger('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('past_questions')->onDelete('cascade');
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->BigInteger('Admin_id')->unsigned()->nullable();
            $table->foreign('Admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->text('answer');
            $table->boolean('correct')->nullable();
            $table->BigInteger('upvotes')->nullable();
            $table->BigInteger('downvotes')->nullable();
            $table->timestamp('datetime')->useCurrent();
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
        Schema::dropIfExists('past_question_answers');
    }
}
