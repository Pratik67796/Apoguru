<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\PastQuestion;
use App\Topic;
use App\User;
use App\ParentSubCategory;
use App\ChildSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use DateTime;
use DB;

class PastQuestionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    // HELPER FUNCTIONS START
    public function getParentSubCategory(Request $request) {
      $parent_sub_categories = \App\ParentSubCategory::where('main_category_id', $request->main_category_id)->orderBy('name')->get();
      return $parent_sub_categories;
    }

    public function getChildSubCategory(Request $request) {
      $child_sub_categories = \App\ChildSubCategory::where('parent_sub_category_id', $request->parent_sub_category_id)->orderBy('name')->get();
      return $child_sub_categories;
    }
    public function getChildSubTopic(Request $request) {
      $child_sub_categories = Topic::where('child_sub_category_id', $request->child_sub_category_id)->orderby('name')->get();
      return $child_sub_categories;
    }
    // HELPER FUNCTIONS ENDS

    public function pastQuestionList() {
      $past_questions = PastQuestion::all(); //PastQuestion::orderBy('updated_at', 'DESC')->get();//PastQuestion::all();
      // $highlight = PastQuestion::orderBy('updated_at', 'DESC')->first();
      // dd($highlight);
      // dd('a');
      return view('admin.past_questions.index', compact('past_questions'));
    }
    public function flagQuestionList() {
      $past_questions = PastQuestion::all();
      return view('admin.past_questions.flag_question', compact('past_questions'));
    }

    public function createPastQuestion() {
      $main_categories = \App\MainCategory::where('applicable_to_pq', 1)->orderby('name')->get();
      $question_types = \App\QuestionType::orderby('name')->get();
      $topics = \App\Topic::orderby('name')->get();
      // dd($topics);
      return view('admin.past_questions.create', compact('main_categories', 'question_types', 'topics'));
    }

    public function storePastQuestion(Request $request) {
      // dd($request);
      // $past_question = PastQuestion::create($request->all());

        $past_question = \App\PastQuestion::create([
          'main_category_id'        => $request->main_category_id,
          'parent_sub_category_id'  => $request->parent_sub_category_id,
          'child_sub_category_id'   => $request->child_sub_category_id,
          'exam_month'              => $request->exam_month,
          'exam_year'               => $request->exam_year,
          'question_type_id'        => $request->question_type_id,
          'topic_id'                => $request->topic_id,
          'preamble'                => $request->preamble,
          'question'                => $request->question,
        ]);

       // dd($past_question['id']);
        $user = $this->currentUser();
        $count   = count($request->answers);
        $answers = $request->answers;
        $count = $count-1;
        // dd($count);
          
        foreach($request->answers as $key => $storedata){
          if($key == (int)$request->correct_answer){
            $coreect = 1;
          }else{
            $coreect = 0;
          }
          // dd($answers[$key]);
          $interactive_answers = \App\PastQuestionAnswer::create([
            'question_id'    => $past_question['id'],
            'admin_id'       => $user->id,
            'answer'         => $answers[$key],
            'correct'        => $coreect,
            'date'           => $request->datetime = date('Y-m-d H:i:s')
          ]);    
        }

      // $past_question = array(
      //   $main_category_id = isset($request->main_category_id)?$request->main_category_id:'',
      //   $parent_sub_category_id = isset($request->parent_sub_category_id)?$request->parent_sub_category_id:'',
      //   $child_sub_category_id = isset($request->child_sub_category_id)?$request->child_sub_category_id:'',
      //   $exam_month = isset($request->exam_month)?$request->exam_month:'',
      //   $exam_year = isset($request->exam_year)?$request->exam_year:'',
      //   $topic_id = isset($request->topic_id)?$request->topic_id:'',
      //   $preamble = isset($request->preamble)?$request->preamble:'',
      //   $question = isset($request->question)?$request->question:'',
      // );
      // PastQuestion::create($past_question);

      if($past_question) {
        Session::put('main_cat', $request->main_category_id);
        Session::put('parent_cat', $request->parent_sub_category_id);
        Session::put('child_cat', $request->child_sub_category_id);
        Session::put('exam_month', $request->exam_month);
        Session::put('exam_year', $request->exam_year);
        Session::put('qes_type', $request->question_type_id);
        
        return redirect()->to('admin/past/question/answers'.'/'.$past_question->id)->with('msg', 'Past Question Added Successfully');
        }else{
          return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
    }
    public function addmorequestions(Request $request){
      $main_categories = \App\MainCategory::where('applicable_to_pq', 1)->get();
      $question_types = \App\QuestionType::all();
      $parent_sub_categories = \App\ParentSubCategory::all();
      $child_sub_categories = \App\ChildSubCategory::all();
      $topics = \App\Topic::all();
      return view('admin.past_questions.add_more_questions',compact('main_categories','parent_sub_categories','child_sub_categories', 'question_types', 'topics'));
    }


    public function editPastQuestion($id) {
      $main_categories = \App\MainCategory::where('applicable_to_pq', 1)->orderby('name')->get();
      $question_types = \App\QuestionType::orderby('name')->get();
      $past_question = PastQuestion::find($id);
      $topics = \App\Topic::orderby('name')->get();
      if($past_question) {
        return view('admin.past_questions.edit', compact('main_categories', 'question_types', 'past_question', 'topics'));
      } else {
        return redirect()->back()->with('error', 'Past Question, please try again later');
      }
    }

    public function updatePastQuestion(Request $request, $id) {
      $past_question = PastQuestion::find($id);
      if($past_question) {
        $past_question->update($request->all());
        $past_question->save();
        return redirect('admin/past/question/list')->with(['id' => $id,'msg'=>'Past Question Updated Successfully']);
      } else {
        return redirect()->back()->with('error', 'Question type not found, please try again later');
      }
    }

    public function deletePastQuestion($id) {
      $past_question = PastQuestion::find($id);
      if($past_question) {
        $past_question->delete();
        return redirect()->back()->with('msg', 'Past Question Deleted Successfully');
      } else {
        return redirect()->back()->with('error', 'Question type not found, please try again later');
      }
    }


    // PAST QUESTION ANSWERS
    public function pastQuestionAnswers($question_id) {
      $past_question = PastQuestion::find($question_id);
      $admins = Admin::all();
      $mainuser = User::all();
      // dd($mainuser);
      $past_question_answers = \App\PastQuestionAnswer::where('question_id', $question_id)->get();
      if($past_question) {
        return view('admin.past_questions.answers', compact('past_question', 'past_question_answers','admins','mainuser'));
      } else {
        return redirect()->back()->with('error', 'Past question not found, please try again later');
      }
    }
    public function currentUser() {
      $user = Auth::user();
      return $user;
    }
    public function storePastQuestionAnswer(Request $request) {
      $past_question = PastQuestion::find($request->question_id);
      $user_id = User::find($request->user_id);

      $user = $this->currentUser();
      // dd($user);
     
      if($past_question) {
        if($request->correct == "on") {
          $correct = 1;
        } else {
          $correct = 0;
        }
       
        $past_question_answer = \App\PastQuestionAnswer::create([
          'question_id' => $request->question_id,
          'admin_id' => $user->id,
          'answer' => $request->answer,
          'correct' => $correct,
          'datetime' => $request->datetime = date('Y-m-d H:i:s'),
        ]);

        if($past_question_answer) {
          return redirect()->back()->with('msg', 'Answer Added Successfully');
        } else {
          return redirect()->back()->with('error', 'Answer could not be added, please try again later');
        }
      } else {
        return redirect()->back()->with('error', 'Past question not found, please try again later');
      }
    }

    public function editPastQuestionAnswer($past_question_id, $past_question_answer_id) {
      $past_question = PastQuestion::find($past_question_id);
      $past_question_answers = \App\PastQuestionAnswer::where('question_id', $past_question_id)->get();
      $past_question_answer = \App\PastQuestionAnswer::find($past_question_answer_id);
      if($past_question_answer) {
        return view('admin.past_questions.answer_edit', compact('past_question', 'past_question_answers', 'past_question_answer'));
      } else {
        return redirect()->back()->with('error', 'Past question answer not found, please try again later');
      }
    }

    public function updatePastQuestionAnswer(Request $request, $past_question_answer_id) {
      $past_question_answer = \App\PastQuestionAnswer::find($past_question_answer_id);
      if($past_question_answer) {
        $past_question_answer->answer = $request->answer;

        // dd($request->correct);
        if($request->correct == "on"){
          $past_question_answer->correct = 1; 
        }
        else{
          $past_question_answer->correct = 0;
        }
        $past_question_answer->save();
        return redirect()->back()->with('msg', 'Past question answer successfully updated');
      } else {
        return redirect()->back()->with('error', 'Past question answer not found, please try again later');
      }
     
    }

    public function deletePastQuestionAnswer($past_question_answer_id) {
      $past_question_answer = \App\PastQuestionAnswer::find($past_question_answer_id);
      // dd($past_question_answer);
      if($past_question_answer) {
        $past_question_answer->delete();
        return redirect()->back()->with('msg', 'Past question answer successfully deleted');
      } else {
        return redirect()->back()->with('error', 'Past question answer not found, please try again later');
      }
    }
}
