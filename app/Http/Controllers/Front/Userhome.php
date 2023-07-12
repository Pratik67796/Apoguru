<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MainCategory;
use App\ParentSubCategory;
use App\ChildSubCategory;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;
use Storage;
use App\User_documents;
use Response;
use App\QuestionType;

class Userhome extends Controller
{
    public function index(){
    	return view('user.dashboard.index');
    }
    public function school_dashboard(Request $request){
        $schoolparentcat = ParentSubCategory::where('main_category_id',1)->get();
        $school_course = Course::where('main_category_id',1)->get();
        // dd($school_course);
        $new = Course::where('main_category_id',1)->with('getRating')->orderBy("id", "DESC")->take(10)->get();
    	return view('user.dashboard.school-dashboard',compact('schoolparentcat','new'));
    }

    public function professional_dashboard(){
        $professional_cat = ParentSubCategory::where('main_category_id',2)->get();
        // dd($professional_cat);
        // $profectio_course = Course::where('main_category_id',2)->get();
        $new = Course::where('main_category_id',2)->with('getRating')->orderBy("id", "DESC")->take(10)->get();
    	return view('user.dashboard.professional-dashboard',compact('professional_cat','new'));
    }

    public function subcategory(Request $request){
        $reqdata_id = $request->id;
        $parentcat_name = ParentSubCategory::where('id',$reqdata_id)->first();
        $childsubcat = ChildSubCategory::where('parent_sub_category_id',$reqdata_id)
                                        ->with('getcourse_new','getcourse_new.User')
                                        ->get();
        // dd($childsubcat);
        return view('user.afrer_dashboard.subcategory',['childsubcat' => $childsubcat,'parentcat_name' => $parentcat_name]);
    }

    public function course(Request $request,$id){
        $course = Course::where('child_sub_category_id',$id)->with('childSubCategory','parentSubCategory','User')->get();
        // dd($course);
    	return view('user.afrer_dashboard.course',compact('course'));
    }

    public function pro_course_buy($slug,$uid){
        $singlecourse = Course::where([
            ['slug','=',$slug],
            ['uid','=',$uid]
            ])->with(['getAdmin','getPublisher','getRating'])->first();
        $ratings = $singlecourse->getRating()->pluck('rating');
        $totalRatings = count($ratings);
        $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
        // echo "<pre>";
        // foreach ($singlecourse->getRating as $rating){
        //     print_r($rating->getRatingUser->name);
        // }
        // exit;
    	return view('user.afrer_dashboard.pro-course-buy',compact('singlecourse','averageRating','totalRatings'));
    }   
    
    public function course_buy($slug,$uid){
        $singlecourse = Course::where([
            ['slug','=',$slug],
            ['uid','=',$uid]
            ])->with(['getAdmin','getPublisher','getRating'])->first();
        $ratings = $singlecourse->getRating()->pluck('rating');
        $totalRatings = count($ratings);
        $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
        // dd($singlecourse);
        return view('user.afrer_dashboard.course-buy',compact('singlecourse','averageRating','totalRatings'));
    }
    
    public function pro_subcategory(Request $request){
        $reqdata_id = $request->id;
        $parentcat_name = ParentSubCategory::where('id',$reqdata_id)->first();
        $childsubcat = ChildSubCategory::where('parent_sub_category_id',$reqdata_id)
                                        ->with(['getcourse_new','getcourse_new.User'])
                                        ->get();     
                // dd($childsubcat);                                   
        return view('user.afrer_dashboard.pro-subcategory',['childsubcat' => $childsubcat,'parentcat_name' => $parentcat_name]);
    }

    public function buyed_course(){
        return view('user.afrer_dashboard.buyed-course');
    }   

    public function s_buyed_course(){
        return view('user.afrer_dashboard.s-buyed-course');
    } 

}
