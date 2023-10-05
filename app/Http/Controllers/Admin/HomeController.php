<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\User;
use App\Usernotes;
use App\Reminder;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
  
    public function home() {
      $users = User::all();
      $reminder=  Reminder::where("date",date('Y-m-d'))->get();
      return view('admin.home',compact('reminder','users'));
    }
    
    public function js(){
      //return $request->post();
     // $main_categories = \App\MainCategory::all();
      $chart =\App\chart::all();
      return view('admin.js',compact('chart'));

    }
    public function jsdemo(Request $request){
      //dd('hii');
      $js = \App\chart::create([
        'year' => $request->year,
        'sales' => $request->sales,
        'Expenses' => $request->Expenses,
        'Profit' => $request->Profit,
        'loss' => $request->loss,
        'bonus' => $request->bonus,
      ]);
      if($js) {
        return redirect()->route('admin.js')->with('msg', 'js successfully created');
      } else {
        return redirect()->back()->with('error', 'Something went wrong while creating the course, please try again');
      }
    }
    public function destroy($id){
   
      $company = \App\chart::find($id);
      $company->delete();
      return response()->json([
        'message' => 'Data deleted successfully!'
      ]);

}
}
