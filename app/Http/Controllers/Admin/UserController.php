<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Usernotes;
use App\Reminder;
use App\Course;
use Auth;
use DB;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function users() {

  //   $users = DB::table('courses')
  //   ->join('users', 'users.id', '=', 'courses.user_id')
  //   ->join('main_categories', 'main_categories.id', '=', 'courses.main_category_id')
  //   ->join('parent_sub_categories','parent_sub_categories.id','=','courses.parent_sub_category_id')
  //   ->join('child_sub_categories','child_sub_categories.id','=','courses.child_sub_category_id')
  //   ->join('user_note','user_note.user_id','=','courses.user_id')
  //   ->select('users.*','courses.*','main_categories.name as m_name','parent_sub_categories.name as p_name','child_sub_categories.name as c_name','user_note.title as notetitle')
  
  //   ->where('user_id',$user_id)
  //  ->get();  
  //  dd($users);


    $users = \App\User::all();
    //$course = \App\course::all();
    //dd($users);
    return view('admin.users.list', compact('users'));    
  }

  public function createUser() {
    return view('admin.users.create');
  }

  public function storeUser(Request $request) {

    $this->validate($request, [
      'name' => ['required', 'string', 'max:255'],
      'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    if($request->file('avatar')) {
      $path = base_path().'/user_avatars';
      $file = $request->file('avatar');
      $mainImageName = time().$file->getClientOriginalName();
      $file->move(public_path('user_avatars'), $mainImageName);
    } else {
      $mainImageName = NULL;
    }

    $user = \App\User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'avatar' => $mainImageName,
      'phone' => $request->phone,
      'qualification' => $request->qualification,
      'country'=> $request->country,
      // 'workplace' => $request->workplace,
      'teaching_experience' => $request->teaching_experience,
      'summary' => $request->summary,
      'credit' => $request->credit,
      'verification_status' => $request->verification_status
    ]);

    if($user) {
      return redirect()->route('admin.user.list')->with('msg', 'User successfully added');
    } else {
      return redirect()->back()->with('msg', 'Something went wrong while adding user, please try again');
    }
  }

  public function editUser($user_id) {
    $user = \App\User::find($user_id);
    if($user) {
      return view('admin.users.edit', compact('user'));
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
  }

  public function updateUser(Request $request, $user_id) {
    $user = \App\User::find($user_id);
    if($user) {

      // $this->validate($request, [
      //   'name' => ['required', 'string', 'max:255'],
      //   'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
      // ]);

      if($request->file('avatar')) {
        $path = base_path().'/user_avatars';
        $file = $request->file('avatar');
        $mainImageName = time().$file->getClientOriginalName();
        $file->move(public_path('user_avatars'), $mainImageName);
      } else {
        $mainImageName = NULL;
      }
      $user->name = $request->name;
      $user->email = $request->email;
      $user->avatar = $mainImageName;
      $user->phone = $request->phone;
      $user->qualification = $request->qualification;
      $user->workplace = $request->workplace;
      $user->teaching_experience = $request->teaching_experience;
      $user->summary = $request->summary;
      $user->credit = $request->credit;
      $user->verification_status = $request->verification_status;
      $user->country = $request->country;

      $user->save();
      return redirect()->back()->with('msg', 'User successfully updated');
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
  }

  public function deleteUser($user_id) {
    $user = \App\User::find($user_id);
    if($user) {
      $user->delete();
      return redirect()->back()->with('msg', 'User successfully deleted');
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
  }

  // usernotes 
  public function createUsernotes(){
    $user_id = User::all();
    return view('admin.users.user_notes',compact('user_id'));
  }

  public function storeUsernotes(Request $request){
    $usernotes = \App\Usernotes::create([
      'user_id' => $request->user_id,
      'title' => $request->title,
      'description' => $request->description,
      
    ]);
    if($usernotes) {
      return redirect()->route('admin.user.createnotes')->with('msg', 'Notes successfully Added');
    } else {
      return redirect()->back()->with('error', 'Something went wrong while creating the course, please try again');
    }
  }

  public function usersnoteslist(){
    $users = User::all();
    $usernotes = Usernotes::all();
    return view('admin.users.user_notes_list',compact('usernotes','users'));
  }

  public function editUsernotes($user_id){
    $users = User::all();
    $useredit = Usernotes::find($user_id);
    //dd($useredit);
    if($useredit) {
      return view('admin.users.user_notes_edit', compact('useredit','users'));
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
  }
  
  public function updateUsernotes(Request $request, $user_id){
    $useredit = Usernotes::find($user_id);
    if($useredit) {
      // $useredit->user_id = $request->user_id;
      $useredit->title= $request->title;
      $useredit->description = $request->description;
      $useredit->save();
      return redirect()->back()->with('msg', 'User successfully updated');   
     } 
     else{
      return redirect()->back()->with('msg', 'User not updated');   
      }
    }
    public function deleteUsernotes($user_id){
      $usernotes = Usernotes::find($user_id);
     if($usernotes) {
      $usernotes->delete();
      return redirect()->back()->with('msg', 'User Notes  successfully deleted');
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
    }


    // user reminders

    public function reminder(){
      $user_id = User::all(); 
      return view('admin.users.reminders.create',compact('user_id'));
    }
    public function storereminder(Request $request){
      $reminder = \App\Reminder::create([
        'user_id' => $request->user_id,
        'title' => $request->title,
        'description' => $request->description,
        'date'=> $request->date,
        'time'=> $request->time,
        
      ]);
      if($reminder) {
        return redirect()->route('admin.user.createreminder')->with('msg', 'Reminder Set successfully ');
      } else {
        return redirect()->back()->with('error', 'Something went wrong while creating the course, please try again');
      }
    }

    public function usersreminderlist(){
      $users = User::all();
      $reminder = Reminder::all();
       return view('admin.users.reminders.reminder_list',compact('reminder','users'));  
    }

    public function editreminderuser($user_id){
      $users = User::all();
      $userreminder = Reminder::find($user_id);
      if($userreminder){
        return view('admin.users.reminders.edit',compact('userreminder','users'));
      }
      else {
        return redirect()->back()->with('msg', 'User not found, please try again');
      }
    }
    public function updateUserreminder(Request $request, $user_id){
      $user = Reminder::find($user_id);
     
     if($user) {
      // dd($user_id);
      // $user->user_id = $request->user_id;
      $user->title= $request->title;
      $user->description = $request->description;
      $user->date = $request->date;
      $user->time = $request->time;
      $user->save();
      return redirect()->back()->with('msg', 'User successfully updated');   
     } 
     else{
      return redirect()->back()->with('msg', 'User not updated');   
      }
    }
    public function deleteUserreminder($user_id){
      $deleteuser = Reminder::find($user_id);
      if($deleteuser) {
       $deleteuser->delete();
       return redirect()->back()->with('msg', 'User Reminder successfully deleted');
     } else {
       return redirect()->back()->with('msg', 'User not found, please try again');
     }
    }

    // TODAYS record for reminders
    public function todayreminder(){
      // dd("hello");
      $users = User::all();
      $reminder=  Reminder::where("date",date('Y-m-d'))->get();
      $getAllCourses = Course::with(['User','mainCategory','parentSubCategory'])
        ->where([
          ['status','=','Unpublished'],
          ['first_seen','=',false]
        ])
        ->get();
      // dd($getAllCourses);
      return view('admin.users.reminders.Daily_reminder',compact('reminder','users','getAllCourses')); 
    }

    public function getAllNewCourses(){
      $getAllCourse = Course::where([
        ['status','=','Unpublished'],
        ['first_seen','=',false]
      ])->get();
      return response()->json(['data'=>$getAllCourse,'message' => 'Course Information saved successfully', 'status' => 200]);
    }
}
