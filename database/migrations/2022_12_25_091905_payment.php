<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->BigInteger('course_id')->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            $table->string('status',255)->nullable();
            $table->string('message', 255)->nullable();
            $table->string('translation_id', 255)->nullable();
            $table->string('flw_ref', 255)->nullable();
            $table->string('device_fingerprint', 255)->nullable();
            $table->string('amount', 255)->nullable();
            $table->string('currency', 255)->nullable();
            $table->string('charged_amount', 255)->nullable();
            $table->string('app_fee', 255)->nullable();
            $table->string('merchant_fee', 255)->nullable();
            $table->string('processor_response', 255)->nullable();
            $table->string('auth_model', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('narration', 255)->nullable();
            $table->string('status2', 255)->nullable();
            $table->string('payment_type', 255)->nullable();
            $table->string('amount_settled', 255)->nullable();
            $table->string('account_id', 255)->nullable();
            $table->string('customer', 255)->nullable();
            $table->string('card_details', 255)->nullable();
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
        //
    }
}
