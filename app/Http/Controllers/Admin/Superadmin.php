<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Session;

class Superadmin extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    public function addsubadmin(){
        return view('admin.sub_admin.create');
    }

    public function addsubadmindata(Request $request){
      $this->validate($request, [
        'name' => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
        $usernotes = \App\Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as,   
        ]);
        if($usernotes) {
          return redirect()->route('admin.sub.admin.create')->with('msg', 'Admin successfully Added');
        } else {
        return redirect()->back()->with('error', 'Something went wrong while creating the course, please try again');
       }
    }
    public function addsubadmindatalist(){
        $adminlist = Admin::all();
        return view('admin.sub_admin.list',compact('adminlist'));
    }

    public function subadminlistedit($id){
        $adminedit = Admin::find($id);
        //dd($useredit);
        if($adminedit) {
          return view('admin.sub_admin.edit', compact('adminedit'));
        } else {
          return redirect()->back()->with('msg', 'User not found, please try again');
        }
    }
    public function subadminlistupdate(Request $request,$id){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $adminupdate = Admin::find($id);
        if($adminupdate) {
          $adminupdate->name = $request->name;
          $adminupdate->email = $request->email;
          $adminupdate->password = Hash::make($request->password);
          $adminupdate->role_as = $request->role_as;
          $adminupdate->save();
          return redirect()->back()->with('msg', 'Admin successfully updated');   
         } 
         else{
          return redirect()->back()->with('msg', 'Admin not updated');   
          }
    }
    public function subadminlistdelete($id){
        $admindelete = Admin::find($id);
        if($admindelete) {
         $admindelete->delete();
         return redirect()->back()->with('msg', 'Admin successfully deleted');
       } else {
         return redirect()->back()->with('msg', 'Admin not found, please try again');
       }
    }
}
