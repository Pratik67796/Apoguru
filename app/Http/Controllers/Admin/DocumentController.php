<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usernotes;
use App\Reminder;
use App\User;
use app\Course;
use DB;
class DocumentController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function documents($user_id) {
    $user = \App\User::find($user_id);
    // $note = \App\Usernotes::where('user_id',$user_id)->get();
    // dd($note);
   // $title = $note->title;
    //dd($note->attributes);
    if($user) {
      $documents = \App\Document::where('user_id', $user_id)->get();
      $note = \App\Usernotes::where('user_id',$user_id)->get();
      $reminder = \App\Reminder::where('user_id',$user_id)->get();

      $coursejoin = DB::table('courses')
      ->join('users', 'users.id', '=', 'courses.user_id')
      ->join('main_categories', 'main_categories.id', '=', 'courses.main_category_id')
      ->join('parent_sub_categories','parent_sub_categories.id','=','courses.parent_sub_category_id')
      ->select('users.name as username', 'main_categories.name','parent_sub_categories.name as p_name', 'courses.*')
      ->where('user_id',$user_id)
      ->get();
     // dd($coursejoin);
     // $coursejoin = \App\Course::where('user_id',$user_id)->get();

      return view('admin.users.documents.index', compact('documents','user','note','reminder','coursejoin'));
    } else {
      return redirect()->back()->with('msg', 'User not found, please try again');
    }
  }


  public function storeDocument(Request $request) {
    $user = \App\User::find($request->user_id);
    if($user) {

      if($request->file('document')) {
        $path = base_path().'/user_documents';
        $file = $request->file('document');
        $mainImageName = time().$file->getClientOriginalName();
        $file->move(public_path('user_documents'), $mainImageName);
      } else {
        $mainImageName = NULL;
      }

      $document = \App\Document::create([
        'user_id' => $request->user_id,
        'document_type' => $request->document_type,
        'document' => $mainImageName,
      ]);

      if($document) {
        return redirect()->back()->with('msg', 'Document successfully added');
      } else {
        return redirect()->back()->with('error', 'Something went wrong while adding the document, please try again');
      }
    } else {
      return redirect()->back()->with('error', 'User not found, please try again');
    }
  }

  public function editDocument($document_id) {
    $document = \App\Document::find($document_id);
    $documents = \App\Document::where('user_id', $document->user_id)->get();
    $user = \App\User::find($document->user_id);
    if($document) {
      return view('admin.users.documents.edit', compact('document', 'documents', 'user'));
    } else {
      return redirect()->back()->with('error', 'Document not found, please try again');
    }
  }

  public function updateDocument(Request $request, $document_id) {
    $document = \App\Document::find($document_id);
    if($document) {

      if($request->file('document')) {
        $path = base_path().'/user_documents';
        $file = $request->file('document');
        $mainImageName = time().$file->getClientOriginalName();
        $file->move(public_path('user_documents'), $mainImageName);
      } else {
        $mainImageName = NULL;
      }

      $document->document_type = $request->document_type;
      $document->document = $mainImageName;
      $document->notes_by_admin = $request->notes_by_admin;
      $document->save();
      
      return redirect()->back()->with('msg', 'Document successfully updated');
    } else {
      return redirect()->back()->with('error', 'Document not found, please try again');
    }
  }

  public function deleteDocument($document_id) {
    $document = \App\Document::find($document_id);
    if($document) {
      $document->delete();
      return redirect()->back()->with('msg', 'Document successfully deleted');
    } else {
      return redirect()->back()->with('error', 'Document not found, please try again');
    }
  }

  public function changeStatus(Request $request)
  {
    //dd($request->ststus);
      $user = User::find($request->user_id);
      $user->verification_status = $request->status;
      $user->save();

      return response()->json(['success'=>'Status change successfully.']);
  }


}
