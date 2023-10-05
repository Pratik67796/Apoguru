<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // use HasFactory;
    protected $table = "payment";
    protected $fillable = [
       'user_id','course_id', 'status', 'message','translation_id',
       'flw_ref','device_fingerprint', 'amount', 'currency','charged_amount',
       'app_fee','merchant_fee', 'processor_response', 'auth_model','ip',
       'narration','status2', 'payment_type', 'amount_settled','account_id',
       'customer','card_details'
    ];

}