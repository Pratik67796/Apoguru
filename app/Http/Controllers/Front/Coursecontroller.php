<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Coursecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('user_login');
    }

    public function course_rating_add(Request $request){
       
        $userid = Auth::guard('user_new')->user()->id;
        $rating = \App\Rating::create([
            'user_id'            =>  '1',
            'course_id'          =>  $request['course_id'],
            'name'               =>  $request['review_title'],
            'star'               =>  "1",//$request['rating'],
            'description'        =>  $request['description']
        ]);

        if($rating) {
            return redirect()->back()->with('msg', 'added');
        }else{
            return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
    }
}
