<?php

namespace App\Http\Controllers\Front;

use App\Admin;
use App\Course;
use App\interacticeqestions;
use App\interactiveanswers;
use App\LectureVideo;
use App\MainCategory;
use App\Models\TrancationHistory;
use App\ParentSubCategory;
use App\ChildSubCategory;

use App\Http\Controllers\Controller;
use App\PrincipalTopic;
use App\Supplementary_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
  public function cart()
  {
    return view('user.profile.s-profile.s-cart');
  }

  public function myCourse()
  {
    return view('user.profile.s-profile.s-my-course');
  }

  public function my_wishlist()
  {
    return view('user.profile.s-profile.s-my-wishlist');
  }

  public function subscription_history()
  {
    return view('user.profile.s-profile.s-subscription-history');
  }

  public function learner_profile()
  {
    $auth = Auth::guard('user_new')->user();
    $json = Storage::disk('local')->get('country.json');
    $codes = json_decode($json, true);
    if (!isset($auth->id)) {
      return redirect()->route('login')->withErrors(["Please Login!"]);
      ;
    }
    return view('user.profile.s-profile.s-my-profile', compact('auth', 'codes'));
  }

  public function create_course()
  {
    $auth = Auth::guard('user_new')->user();
    if (!isset($auth->id)) {
      return redirect()->route('login')->withErrors(["Please Login!"]);
    }
    $main_categories = MainCategory::orderby('name')->get();
    $getCourses = Course::where('user_id', '=', $auth->id)->get();
    $getPrincipleTopics = PrincipalTopic::orderBy('ordering_position')->where('user_id', '=', $auth->id)->get();
    $lecture = LectureVideo::where('user_id', '=', $auth->id)->get();
    // dd($getCourses);
    return view('user.profile.i-profile.creat-course',compact(
        'main_categories',
        'auth',
        'getCourses',
        'getPrincipleTopics'
      )
    );
  }

  public function getParentSubCategroy(Request $request)
  {
    $getParentSubCategory = ParentSubCategory::where('main_category_id', '=', $request->id)->get();
    return response()->json([
      'status' => 200,
      'data' => $getParentSubCategory
    ]);
  }

  public function genrateUID()
  {
    $length = 16;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $shortUrl = '';
    $index = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
      $shortUrl .= $characters[mt_rand(0, $index)];
    }
    return $shortUrl;
  }

  public function saveCourseInformation(Request $request)
  {
    // dd($request->all());
    $request->validate([
      'courseType' => 'required',
      'parentSubCategory' => 'required',
      'childSubCategroy' => 'required',
      'courseName' => 'required',
      'actualSellPriceType' => 'required',
    ], [
      'courseType.required' => 'The course type field is required.',
      'parentSubCategory.required' => 'The parent subcategory field is required.',
      'childSubCategroy.required' => 'The child subcategory field is required.',
      'courseName.required' => 'The course name field is required.',
      'actualSellPriceType.required' => 'The actual selling price field is required.',
    ]);

    $saveCourse = new Course();
    $saveCourse->main_category_id = $request->courseType;
    $saveCourse->parent_sub_category_id = $request->parentSubCategory;
    $saveCourse->child_sub_category_id = $request->childSubCategroy;
    $saveCourse->title = $request->courseName;
    $saveCourse->actual_price = $request->actualSellPriceType;
    $saveCourse->actual_price_in_usd = $request->actualSellCurrent;
    $saveCourse->sell_price = $request->sellPriceTypeOption;
    $saveCourse->sell_price_in_usd = $request->sellPriceOption;
    $saveCourse->uid = $this->genrateUID();
    $saveCourse->slug = str_replace(' ', '-', strtolower($request->courseName));
    $saveCourse->user_id = $request->user_id;
    $saveCourse->description = $request->desc;
    if ($request->hasFile('couse_image')) {
      $fileName = time() . '_' . $request->file('couse_image')->getClientOriginalName();
      $request->file('couse_image')->storeAs('public/course-images', $fileName);
      $saveCourse->image = $fileName;
    }
    $saveCourse->save();
    return response()->json(['message' => 'Course Information saved successfully', 'status' => 200]);
  }

  public function savePrincipleTopic(Request $request)
  {
    $savePrinciple = new PrincipalTopic();
    $savePrinciple->course_id = $request->principleCourseType;
    $savePrinciple->name = $request->principleTopic;
    $savePrinciple->user_id = $request->user_id;
    $savePrinciple->save();
    return response()->json(['message' => 'Principle Topic saved successfully']);
  }
  public function updatePrinciplePositions(Request $request)
  {
    $newOrder = $request->input('order');
    // Loop through the new order and update positions in the database
    foreach ($newOrder as $position => $itemId) {
      $item = PrincipalTopic::find($itemId);
      $item->ordering_position = $position + 1; // Update the position
      $item->save();
    }

    return response()->json(['message' => 'Positions updated successfully']);
  }

  public function getPrinciple(Request $request)
  {
    $item = PrincipalTopic::orderBy('ordering_position')->where('course_id', '=', $request->course_id)->get();
    return response()->json(['data' => $item, 'status' => 200]);
  }

  public function upload(Request $request)
  {
    // dd("hello",$request->all());
    if ($request->hasFile('upload')) {
      $fileName = time() . '_' . $request->file('upload')->getClientOriginalName();
      $request->file('upload')->storeAs('public/learner-course-desc', $fileName);
      $url = Storage::url('public/learner-course-desc/' . $fileName);
      return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => URL('/') . $url]);
    }
  }
  public function videoUpload(Request $request)
  {
    // dd($request->all());
    $max = getFileSizeInBytes(ini_get('upload_max_filesize')) / 1024;
    $request->validate([
      'video.*' => 'required|max:' . $max,
      // Adjust the mimetypes and max file size as needed
      'topic_type_video' => 'required',
      'video_name.*' => 'required'
    ], [
      'video.*.required' => 'The video is required.',
      'video.*.max' => 'The video must not exceed the maximum size of ' . $max . ' kilobytes.',
      'topic_type_video.required' => 'The topic is required.',
      'video_name.*.required' => 'The video name is required.'
    ]);


    if ($request->hasFile('video')) {
      $files = $request->file('video');

      foreach ($files as $key => $file) {
        $fileName = time(). '-'.$key .'-'. '_' . $file->getClientOriginalName();
        $file->storeAs('public/videos', $fileName);

        $imageName = null;
        if ($request->hasFile('course_thumbnail')) {
          $image = $request->file('course_thumbnail');
          $imageName = time() . '_' . $image->getClientOriginalName();
          $image->storeAs('public/videos', $imageName);
        }

        $lecture = new LectureVideo();
        $lecture->principal_topic_id = $request->topic_type_video;
        $lecture->name = $request->video_name[$key];
        $lecture->thumbnail = $imageName;
        $lecture->video = $fileName;
        $lecture->user_id = $request->video_user_id;
        $lecture->save();
      }

      return response()->json(['success' => true, 'message' => 'Lecture video upload successfully']);
    }

    return response()->json(['success' => false, 'message' => 'No files uploaded']);
  }
  public function getLectureVideo(Request $request)
  {
    $items = LectureVideo::orderBy('ordering_position')
      ->where('principal_topic_id', '=', $request->principal_topic_id)
      ->get();

    $html = '';
    foreach ($items as $item) {
      $html .= '<li class="list-group-item-video draggable-item" draggable="true" data-id="' . $item->id . '" style="margin-top: 10px; margin-bottom: 40px;">';
      $html .= '<div class="row justify-content-between mb-3">';
      $html .= '<div class="col-12 col-md-12 mb-5 mb-lg-0 col-xl-5 col-lg-5">';
      $html .= '<video class="" id="video-frame" poster="' . asset('storage/videos/' . $item->thumbnail) . '" width="100%" height="" controls>';
      $html .= '<source src="' . asset('storage/videos/' . $item->video) . '" type="">';
      $html .= '</video>';
      $html .= '</div>';

      $html .= '<div class="col-12 col-md-12 col-lg-6 col-xl-7 my-auto">';

      $html .= '<div class="">';
      $html .= '<h6><strong>Video Title :</strong> ' . $item->name . '</h6>';
      $html .= '<h6><strong>Video Duration :</strong> <span id="duration"></span></h6>';
      $html .= '<h6><strong>Interactive Quastions :</strong> 4 </h6>';

      $html .= '<div class="position-relative">';
      $html .= '<label class="add-supplementary-file-label" onClick="openSupplementModal('.$item->id.')"> Add Supplementary file';
      $html .= '</label>';
      $html .= '</div>';

      $html .= '<label class="add-supplementary-file-label" onClick="openQuestionModal('.$item->id.')">Add Interactive Questions</label> <br>';
      $html .= '<button type="button" data-id="' . $item->id . '" class="btn default-btn mt-3 delete-video">Delete Video</button>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</li>';
    }
    return response()->json(['html' => $html, 'status' => 200]);
  }

  public function addSupplementaryFile(Request $request){
    if ($request->hasFile('supplementary_file')) {
      $saveSupplementary = new Supplementary_document();
      $fileName = time() . '_' . $request->file('supplementary_file')->getClientOriginalName();
      $request->file('supplementary_file')->storeAs('public/supplementary-files', $fileName);
      $saveSupplementary->lecture_videos_id = $request->video_id;
      $saveSupplementary->document = $fileName;
      $saveSupplementary->save();
      return response()->json(['message' => "File has been uploaded", 'status' => 200]);
    }
  } 

  public function addQuestionAnswer(Request $request){
    $request->validate([
      'question' => 'required',
      'correct_answer' => 'required',
      'answer1' => 'required',
      'answer2' => 'required',
    ], [
      'question.required' => 'The Question is required.',
      'correct_answer.required' => 'The Correct Answer is required.',
      'answer1.required' => 'The First Answer is required.',
      'answer2.required' => 'The Second Answer is required.',
    ]);
    $question = $request->question;
    $video = $request->video_id;
    $correct_answer = $request->correct_answer;

    $questionSave = new interacticeqestions();
    $questionSave->lecture_videos_id = $video;
    $questionSave->interactive_qestion = $question;
    $questionSave->user_id = $request->user_id;
    $questionSave->save();
    unset($request['_token']);
    unset($request['video_id']);
    unset($request['question']);
    unset($request['correct_answer']);
    unset($request['user_id']);
    $correctAnswerKey = 'answer' . $correct_answer;
    // dd($request->all());
    foreach ($request->all() as $key => $value) {   
      $saveAnswer = new interactiveanswers();
      $saveAnswer->user_id = $questionSave->user_id;
      $saveAnswer->lecture_videos_id = $video;
      $saveAnswer->interactive_qestion_id = $questionSave->id;

      if ($key === $correctAnswerKey) {
        $saveAnswer->correct_answer = $correct_answer; // Set as correct answer
      } else {
        $saveAnswer->correct_answer = 0; // Not the correct answer
      }
      $saveAnswer->interactive_answer = $value;
      $saveAnswer->save();
    }
    
    return response()->json(['message' => "Question and Answer has been saved successfully.", 'status' => 200]);
  }

  public function videoDelete(Request $request)
  {
    $lecture = LectureVideo::where('id', '=', $request->id)->first();
    Storage::delete('public/videos/' . $lecture->video);
    Storage::delete('public/videos/' . $lecture->thumbnail);
    $lecture->delete();
    return response()->json(['message' => 'Video has been deleted successfully', 'status' => 200]);
  }

  public function updateVideoPositions(Request $request)
  {
    $newOrder = $request->input('order');
    // Loop through the new order and update positions in the database
    foreach ($newOrder as $position => $itemId) {
      $item = LectureVideo::find($itemId);
      $item->ordering_position = $position + 1; // Update the position
      $item->save();
    }

    return response()->json(['message' => 'Positions updated successfully']);
  }

  public function requestToPublishCourse(Request $request)
  {
    $findStatus = Course::find($request->courser);
    if ($findStatus->status == 'Unpublished' || $findStatus->status == 'Published') {
      return response()->json(['status' => 201, 'message' => 'Sorry, The request for this course to publish is already sent. Please wait for verification.']);
    }
    Course::where('id', '=', $request->courser)->update(['status' => 'Unpublished']);
    return response()->json(['status' => 200, 'message' => 'The request to publish this course has been send successfully.']);
  }


  public function getSubChildCategory(Request $request) {
    $getSchoolParent = ChildSubCategory::where([
      ['main_category_id', '=', $request->main_category_id],
      ['parent_sub_category_id', '=', $request->parent_sub_category_id]
    ])->get();
    return response()->json([
      'status' => 200,
      'data' => $getSchoolParent
    ]);
  }

  public function course_i_have_created()
  {
    $auth = Auth::guard('user_new')->user();
    if (!isset($auth->id)) {
      return redirect()->route('login')->withErrors(["Please Login!"]);
    }
    $courses = \App\Course::with([
      'mainCategory',
      'parentSubCategory',
      'childSubCategory',
      'getPrincipleTopic.videos',
      'User',
      'getRating'
    ])
    ->where('user_id','=',$auth->id)->get();
    // dd($courses);
    return view('user.profile.i-profile.my-course',compact('courses'));
  }

  public function instructor_profile()
  {
    $auth = Auth::guard('user_new')->user();
    $json = Storage::disk('local')->get('country.json');
    $codes = json_decode($json, true);
    if (!isset($auth->id)) {
      return redirect()->route('login')->withErrors(["Please Login!"]);
    }
    return view('user.profile.i-profile.my-profile', compact('auth', 'codes'));
  }

  public function wallet()
  {
    $auth = Auth::guard('user_new')->user();
    if (!isset($auth->id)) {
      return redirect()->route('login')->withErrors(["Please Login!"]);
    }
    $trancationHistories = TrancationHistory::with('getCourse')->where('user_id','=',$auth->id)->get();
    return view('user.profile.i-profile.wallet',compact('trancationHistories'));
  }
}