<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SupplementaryVideoDoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplementary_document', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->BigInteger('lecture_videos_id')->unsigned();
            $table->foreign('lecture_videos_id')->references('id')->on('lecture_videos')->onDelete('cascade');

            $table->string('document')->nullable();
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
        Schema::dropIfExists('supplementary_document');
    }
}
