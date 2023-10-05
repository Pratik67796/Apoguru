<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
    }

    public function store(Request $request){
        // dd($request->all());
        if($request->user_id != '0'){
            $rating = new Rating();
            $rating->rating = $request->rating;
            $rating->comment = $request->comment;
            $rating->user_id = $request->user_id;
            $rating->course_id = $request->course_id;
            $rating->save();
        }
        $status = 401;
        $message = "Sorry, you are not allowed to rating this course.";
        if(isset($rating->id)){
            $message = "You are rating is successfully recorded.";
            $status = 200;
        }
        return response()->json([
            'message' => $message,
            'status' => $status, // Add your data here
        ]);
    }
}
