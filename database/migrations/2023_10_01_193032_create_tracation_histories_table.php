<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracation_histories', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id')->unsigned()->nullable();
            $table->BigInteger('course_id')->unsigned()->nullable();
            $table->string('flutter_id')->nullable();
            $table->string('tx_ref')->nullable();
            $table->string('flw_ref')->nullable();
            $table->string('device_fingerprint')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('charged_amount')->nullable();
            $table->string('app_fee')->nullable();
            $table->string('merchant_fee')->nullable();
            $table->string('processor_response')->nullable();
            $table->string('auth_model')->nullable();
            $table->string('ip')->nullable();
            $table->string('narration')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_created_at')->nullable();
            $table->string('account_id')->nullable();
            $table->string('first_6digits')->nullable();
            $table->string('last_4digits')->nullable();
            $table->string('issuer')->nullable();
            $table->string('country')->nullable();
            $table->string('flutter_type')->nullable();
            $table->string('token')->nullable();
            $table->string('expiry')->nullable();
            $table->string('checkoutInitAddress')->nullable();
            $table->string('amount_settled')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone_number')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_created_at')->nullable();

            $table->string('payment_id')->nullable();
            $table->string('pay_address')->nullable();
            $table->string('pay_amount')->nullable();
            $table->string('amount_received')->nullable();
            $table->string('pay_currency')->nullable();
            $table->string('order_id')->nullable();
            $table->string('order_description')->nullable();
            $table->string('payin_extra_id')->nullable();
            $table->string('ipn_callback_url')->nullable();
            $table->string('purchase_id')->nullable();
            $table->string('smart_contract')->nullable();
            $table->string('network')->nullable();
            $table->string('network_precision')->nullable();
            $table->string('time_limit')->nullable();
            $table->string('burning_percent')->nullable();
            $table->string('expiration_estimate_date')->nullable();
            $table->string('is_fixed_rate')->nullable();
            $table->string('is_fee_paid_by_user')->nullable();
            $table->string('valid_until')->nullable();
            $table->string('crypto_type')->nullable();

            $table->string('payment_mode');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('tracation_histories');
    }
}
