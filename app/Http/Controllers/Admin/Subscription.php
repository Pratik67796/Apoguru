<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Usernotes;
class Subscription extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Subscription(){
        return view('admin.subscription & payout.subscription');
    }
    public function payout(){
        return view('admin.subscription & payout.payout');
    }
    public function Instructors(){
        return view('admin.subscription & payout.instructors');
    }
    public function activesubscription(){
        return view('admin.subscription & payout.active_subscription');
    }
    public function search(Request $request){
        $users = User::all();
        $searchQuery = $request->searchQuery;
        $users = user::where('name','LIKE','%'.$searchQuery.'%')->get();
        //dd($products);
        return view('admin.subscription & payout.search', compact('users'));
        
      }
     
}
