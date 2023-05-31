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

class profileController extends Controller
{
  public function cart(){
    return view('user.profile.s-profile.s-cart');
  }

  public function my_course(){
    return view('user.profile.s-profile.s-cart');
  }


  public function my_wishlist(){
    return view('user.profile.s-profile.s-cart');
  }
    
}
