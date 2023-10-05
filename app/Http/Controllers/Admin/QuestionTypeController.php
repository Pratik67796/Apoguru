<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\QuestionType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class QuestionTypeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    // Main Categories
    public function createQuestionType() {
      $question_types = QuestionType::all();
      return view('admin.question_types.create', compact('question_types'));
    }

    public function storeQuestionType(Request $request) {
      //dd($request);
      $question_type = QuestionType::create([
        'name' => $request->name,
        'status' => "active"
      ]);

      if($question_type) {
        return redirect()->back()->with('msg', 'Question type Added Successfully');
      } else {
        return redirect()->back()->with('error', 'Something went wrong, please try again later');
      }
    }

    public function editQuestionType($id) {
      $question_types = QuestionType::all();
      $question_type = QuestionType::find($id);
      if($question_type) {
        return view('admin.question_types.edit', compact('question_type', 'question_types'));
      } else {
        return redirect()->back()->with('error', 'Main category not found, please try again later');
      }
    }

    public function updateQuestionType(Request $request, $id) {
      $question_type = QuestionType::find($id);
      if($question_type) {
        $question_type->name = $request->name;
        $question_type->status = "active";
        $question_type->save();
        return redirect()->back()->with('msg', 'Question type Updated Successfully');

      } else {
        return redirect()->back()->with('error', 'Question type not found, please try again later');
      }
    }

    public function deleteQuestionType($id) {
      $question_type = QuestionType::find($id);
      if($question_type) {
        $question_type->delete();
        return redirect()->back()->with('msg', 'Question type Deleted Successfully');
      } else {
        return redirect()->back()->with('error', 'Question type not found, please try again later');
      }
    }
}
