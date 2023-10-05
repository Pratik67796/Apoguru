<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('main_category_id')->unsigned();
            $table->foreign('main_category_id')->references('id')->on('main_categories')->onDelete('cascade');

            $table->BigInteger('parent_sub_category_id')->unsigned();
            $table->foreign('parent_sub_category_id')->references('id')->on('parent_sub_categories')->onDelete('cascade');

            $table->BigInteger('child_sub_category_id')->unsigned();
            $table->foreign('child_sub_category_id')->references('id')->on('child_sub_categories')->onDelete('cascade');

            $table->BigInteger('question_type_id')->unsigned();
            $table->foreign('question_type_id')->references('id')->on('question_types')->onDelete('cascade');
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('exam_month');
            $table->string('exam_year');

            $table->text('preamble')->nullable();
            $table->text('question');

            // $table->BigInteger('topic_id')->unsigned();
            // $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

            $table->text('datetime')->nullable();
            $table->text('reason')->nullable();

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
        Schema::dropIfExists('past_questions');
    }
}
