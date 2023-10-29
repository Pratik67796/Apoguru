<?php

namespace App\Http\Controllers;

use App\Course;
use App\Models\TrancationHistory;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class PaymentController extends Controller
{

    public function genrateUID()
    {
      $length = 16;
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $shortUrl = '';
      $index = strlen($characters) - 1;
      for ($i = 0; $i < $length; $i++) {
        $shortUrl .= $characters[mt_rand(0, $index)];
      }
      return $shortUrl;
    }
    public function nowPayment(Request $request)
    {
        // dd(intval($request->user_id));
        $client = new Client();
        $headers = [
          'x-api-key' => env('NOWPAYMENTS_API_KEY'),// 'SPYVRXJ-1QP4K1G-HZPP2G8-8YJ0HG5',
          'Content-Type' => 'application/json'
        ];
        // dd($headers);
        $body = [
            "price_amount" => $request->price,
            "price_currency" => "usd",
            "pay_currency" => "btc",
            // "ipn_callback_url" => "https://nowpayments.io",
            "order_id" => $this->genrateUID(),
            // "order_description" => "Apple Macbook Pro 2019 x 1",
        ];
        $response = $client->request('POST', 'https://api.nowpayments.io/v1/payment', [
            'headers' => $headers,
            'json' => $body, // Use 'json' key to set JSON data
        ]);
        $data = json_decode($response->getBody()->getContents(), true);
        
        


        $trancationHistory = new TrancationHistory();
        $trancationHistory->payment_id = $data['payment_id'];
        $trancationHistory->pay_address = $data['pay_address'];
        $trancationHistory->pay_amount = $data['pay_amount'];
        $trancationHistory->amount_received =  $data['amount_received'];
        $trancationHistory->pay_currency = $data['pay_currency'];
        $trancationHistory->order_id =  $data['order_id'];
        $trancationHistory->order_description = $data['order_description'];
        $trancationHistory->payin_extra_id = $data['payin_extra_id'];
        $trancationHistory->ipn_callback_url = $data['ipn_callback_url'];
        $trancationHistory->purchase_id = $data['purchase_id'];
        $trancationHistory->smart_contract = $data['smart_contract'];
        $trancationHistory->network = $data['network'];
        $trancationHistory->network_precision = $data['network_precision'];
        $trancationHistory->time_limit = $data['time_limit'];
        $trancationHistory->burning_percent = $data['burning_percent'];
        $trancationHistory->expiration_estimate_date = $data['expiration_estimate_date'];
        $trancationHistory->is_fixed_rate = $data['is_fixed_rate'];
        $trancationHistory->is_fee_paid_by_user = $data['is_fee_paid_by_user'];
        $trancationHistory->valid_until = $data['valid_until'];
        $trancationHistory->crypto_type = $data['type'];

        $trancationHistory->user_id = intval($request->user_id);
        $trancationHistory->course_id = intval($request->course_id);
        $trancationHistory->status = $data['payment_status'];
        $trancationHistory->amount = $data['price_amount'];
        $trancationHistory->currency = $data['price_currency'];
        $trancationHistory->currency = $data['price_currency'];
        $trancationHistory->payment_mode = 'crypto';
        // dd($trancationHistory);
        $trancationHistory->save();
        $findCourse = Course::find(intval($request->course_id));
        return redirect()->route('course-details',['slug'=>$findCourse->slug,'uid'=>$findCourse->uid])->with('message', 'Thank you, Your Crypto pay is done successfully.');;
    }

    public function initialize(Request $request){
        // dd($request->all());
        $reference = Flutterwave::generateReference();
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => $request->price,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "USD",
            'redirect_url' => route('callback'). '?course_id=' . $request->course_id.'&user_id='.$request->user_id,
            'customer' => [
                'email' => $request->email,
                "phone_number" => $request->phone,
                "name" => $request->name
            ]
        ];
        $payment = Flutterwave::initializePayment($data);
        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }
        return redirect($payment['data']['link']);
    }

    public function callback(){
        $status = request()->status;
        if ($status ==  'successful') {

            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);

            $trancationHistory = new TrancationHistory();
            
            $trancationHistory->flutter_id = $data['data']['id'];
            $trancationHistory->tx_ref = $data['data']['tx_ref'];
            $trancationHistory->flw_ref = $data['data']['flw_ref'];
            $trancationHistory->device_fingerprint = $data['data']['device_fingerprint'];
            $trancationHistory->amount = $data['data']['amount'];
            $trancationHistory->currency = $data['data']['currency'];
            $trancationHistory->charged_amount = $data['data']['charged_amount'];
            $trancationHistory->app_fee = $data['data']['app_fee'];
            $trancationHistory->merchant_fee = $data['data']['merchant_fee'];
            $trancationHistory->processor_response = $data['data']['processor_response'];
            $trancationHistory->auth_model = $data['data']['auth_model'];
            $trancationHistory->ip = $data['data']['ip'];
            $trancationHistory->narration = $data['data']['narration'];
            $trancationHistory->status = $data['data']['status'];
            $trancationHistory->payment_type = $data['data']['payment_type'];
            $trancationHistory->created_at = $data['data']['created_at'];
            $trancationHistory->account_id = $data['data']['account_id'];
            $trancationHistory->amount_settled = $data['data']['amount_settled'];
            $trancationHistory->customer_id = $data['data']['customer']['id'];
            $trancationHistory->customer_name = $data['data']['customer']['name'];
            $trancationHistory->customer_phone_number = $data['data']['customer']['phone_number'];
            $trancationHistory->customer_email = $data['data']['customer']['email'];
            $trancationHistory->customer_created_at = $data['data']['customer']['created_at'];
            $trancationHistory->checkoutInitAddress = $data['data']['meta']['__CheckoutInitAddress'];

            $trancationHistory->first_6digits = $data['data']['card']['first_6digits'];
            $trancationHistory->last_4digits = $data['data']['card']['last_4digits'];
            $trancationHistory->issuer = $data['data']['card']['issuer'];
            $trancationHistory->country = $data['data']['card']['country'];
            $trancationHistory->flutter_type = $data['data']['card']['type'];
            $trancationHistory->token = $data['data']['card']['token'];
            $trancationHistory->expiry = $data['data']['card']['expiry'];

            $trancationHistory->course_id = intval(request('course_id'));
            $trancationHistory->user_id = intval(request('user_id'));
            $trancationHistory->payment_mode = 'flutterwave';
            // dd($trancationHistory);
            $trancationHistory->save();
            $findCourse = Course::find(intval(request('course_id')));
            return redirect()->route('course-details',['slug'=>$findCourse->slug,'uid'=>$findCourse->uid])->with('message', 'Thank you, Your Transcation done successfully.');
        } elseif ($status ==  'cancelled'){
            $trancationHistory = new TrancationHistory();
            $trancationHistory->save();
            $trancationHistory->course_id = intval(request('course_id'));
            $trancationHistory->user_id = intval(request('user_id'));
            $trancationHistory->payment_mode = 'flutterwave';
            $trancationHistory->save();
            $findCourse = Course::find(intval(request('course_id')));
            return redirect()->route('course-details',['slug'=>$findCourse->slug,'uid'=>$findCourse->uid])->with('error', 'Sorry, Your Transcation failed.');
        } else{
            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            dd($data);
                //Put desired action/code after transaction has failed here
        }
    }
}