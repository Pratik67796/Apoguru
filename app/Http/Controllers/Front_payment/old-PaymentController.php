<?php

namespace App\Http\Controllers\Front;

use App\Admin;
use App\MainCategory;
use App\ParentSubCategory;
use App\ChildSubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
  public function index(){
    return view('user.index');
  }
    public function paymentPage() {
      return view('front.payment.index');
    }

    public function processPayment() {
      $payment = new Payment();
      if($payment) {
        return view();
      } else {
        return redirect()->back()->with('error', 'Something went wrong while making the payment, please try again later');
      }
    }

    public function processFlutterWavePayment() {
      $payment = new Payment([
        'amount' => $request->amount,
        'currency' => $request->currency,         
      ]);
    }
}
