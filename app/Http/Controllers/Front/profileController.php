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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class profileController extends Controller
{
  public function cart(){
    return view('user.profile.s-profile.s-cart');
  }

  public function my_course(){
    return view('user.profile.s-profile.s-my-course');
  }

  public function my_wishlist(){
    return view('user.profile.s-profile.s-my-wishlist');
  }

  public function subscription_history(){
    return view('user.profile.s-profile.s-subscription-history');
  }

  public function learner_profile(){
    $auth = Auth::guard('user_new')->user();
    $json = Storage::disk('local')->get('country.json');
    $codes = json_decode($json, true);
    if(!isset($auth->id)){
      return redirect()->route('login')->withErrors(["Please Login!"]);;
    }
    return view('user.profile.s-profile.s-my-profile',compact('auth','codes'));
  }

  public function create_course(){
    return view('user.profile.i-profile.creat-course');
  }

  public function course_i_have_created(){
    return view('user.profile.i-profile.created-course');
  }

  public function instructor_profile(){
    $auth = Auth::guard('user_new')->user();
    $json = Storage::disk('local')->get('country.json');
    $codes = json_decode($json, true);
    if(!isset($auth->id)){
      return redirect()->route('login')->withErrors(["Please Login!"]);;
    }
    // dd($countries);
    return view('user.profile.i-profile.my-profile',compact('auth','codes'));
  }

  public function wallet(){
    return view('user.profile.i-profile.wallet');
  }
}
