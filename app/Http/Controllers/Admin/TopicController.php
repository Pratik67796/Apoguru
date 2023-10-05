<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MainCategory;
use App\ParentSubCategory;
use DB;

class TopicController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function createTopic() {
    $main_categories = MainCategory::orderBy('name')->get();
   // $parent_sub_categories = ParentSubCategory::all();
    $child_sub_categories = \App\ChildSubCategory::with('parentSubCategory')->get();
    $topics = \App\Topic::all();
    // dd($topics);
    // dd($child_sub_categories);
    return view('admin.topics.create', compact('topics','main_categories','child_sub_categories'));
  }

  public function storeTopic(Request $request) {
    // $abc = DB::connection('mysql')->statement('ALTER TABLE topics ADD main_category_id int(11) null');
    // dd($abc);
    $topic = \App\Topic::create([
      'main_category_id' => (int)$request->main_category_id,
      'parent_sub_category_id' => (int)$request->parent_sub_category_id, 
      'child_sub_category_id' =>  (int)$request->child_sub_category_id,
      'name' => $request->name,
      'status' => 'active'
    ]);
    if($topic) {
      return redirect()->back()->with('msg', 'Topic successfully created');
    } else {
      return redirect()->back()->with('error', 'Something went wrong while creating the topic, please try again');
    }
  }

  public function editTopic($topic_id) {
    $main_categories = MainCategory::orderby('name')->get();
    $child_sub_categories = \App\ChildSubCategory::get();
    $topics = \App\Topic::all();
    $topic = \App\Topic::find($topic_id);
    // dd($topics);
    if($topic) {
      return view('admin.topics.edit', compact('topic', 'topics', 'child_sub_categories','main_categories'));
    } else {
      return redirect()->back()->with('error', 'Topic not found, please try again');
    }
  }

  public function updateTopic(Request $request, $topic_id) {
    $topic = \App\Topic::find($topic_id);
    if($topic) {
      $topic->main_category_id = $request->main_category_id;
      $topic->parent_sub_category_id = $request->parent_sub_category_id;
      $topic->child_sub_category_id = $request->child_sub_category_id;
      $topic->name = $request->name;
      // dd($topic);
      $topic->save();
      return redirect()->back()->with('msg', 'Topic successfully updated');
    } else {
      return redirect()->back()->with('error', 'Topic not found, please try again');
    }
  }

  public function deleteTopic($topic_id) {
    $topic = \App\Topic::find($topic_id);
    if($topic) {
      $topic->delete();
      return redirect()->back()->with('msg', 'Topic successfully deleted');

    } else {
      return redirect()->back()->with('error', 'Topic not found, please try again');
    }
  }
}
