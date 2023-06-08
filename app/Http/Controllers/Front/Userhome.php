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
        $new = Course::where('main_category_id',1)->orderBy("id", "DESC")->take(10)->get();
    	return view('user.dashboard.school-dashboard',compact('schoolparentcat','new'));
    }

    public function professional_dashboard(){
        $professional_cat = ParentSubCategory::where('main_category_id',2)->get();
        // dd($professional_cat);
        // $profectio_course = Course::where('main_category_id',2)->get();
    	return view('user.dashboard.professional-dashboard',compact('professional_cat'));
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

    public function pro_course_buy(){
    	return view('user.afrer_dashboard.pro-course-buy');
    }   

    public function course_buy(Request $request,$courseid){
        $singlecourse = Course::where('id',$courseid)->first();
        // dd($singlecourse);
        return view('user.afrer_dashboard.course-buy',compact('singlecourse'));
    }
    
    public function pro_subcategory(Request $request){
        $reqdata_id = $request->id;
        $parentcat_name = ParentSubCategory::where('id',$reqdata_id)->first();
        $childsubcat = ChildSubCategory::where('parent_sub_category_id',$reqdata_id)
                                        ->with('getcourse_new','getcourse_new.User')
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
