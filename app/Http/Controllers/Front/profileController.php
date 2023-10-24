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
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use FFMpeg\FFMpeg;
use FFMpeg\Coordinate\TimeCode;

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
    return view(
      'user.profile.i-profile.creat-course',
      compact(
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
        $fileName = time() . '-' . $key . '-' . '_' . $file->getClientOriginalName();
        $file->storeAs('public/videos', $fileName);

        $lecture = new LectureVideo();
        $lecture->principal_topic_id = $request->topic_type_video;
        $lecture->name = $request->video_name[$key];
        $lecture->thumbnail = null;
        $lecture->video = $fileName;
        $lecture->user_id = $request->video_user_id;
        $lecture->save();

        $getID3 = new \getID3();

        // Get the full path to the video file
        $filePath = Storage::disk('public')->path("videos/" . $lecture->video);
        $fileInfo = $getID3->analyze($filePath);

        // Get the duration in seconds (if available)
        if (isset($fileInfo['playtime_seconds'])) {
          $durationInSeconds = $fileInfo['playtime_seconds'];
        } else {
          $durationInSeconds = null;
        }
        $duration = $this->formatVideoDuration($durationInSeconds);
        LectureVideo::where('id', '=', $lecture->id)->update(['duration' => $duration]);
      }

      return response()->json(['success' => true, 'message' => 'Lecture video upload successfully']);
    }

    return response()->json(['success' => false, 'message' => 'No files uploaded']);
  }

  public function formatVideoDuration($durationInSeconds)
  {
    $hours = floor($durationInSeconds / 3600);
    $minutes = floor(($durationInSeconds % 3600) / 60);
    $seconds = $durationInSeconds % 60;

    $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

    return $formattedDuration;
  }
  public function getLectureVideo(Request $request)
  {
    $items = LectureVideo::with('principalTopic.getCourse')->orderBy('ordering_position')
      ->where('principal_topic_id', '=', $request->principal_topic_id)
      ->get();
    // dd($items);
    $html = '';
    // echo "<pre>";
    foreach ($items as $item) {
      // print_r();
      $videoUrl = asset('storage/videos/' . $item->video);
      // public/course-images
      $thumNail = asset('storage/course-images/' . $item->principalTopic->course->image);



      $html .= '<li class="list-group-item-video draggable-item" draggable="true" data-id="' . $item->id . '" style="margin-top: 10px; margin-bottom: 40px;">';
      $html .= '<div class="row justify-content-between mb-3">';
      $html .= '<div class="col-12 col-md-12 mb-5 mb-lg-0 col-xl-5 col-lg-5">';
      $html .= '<video class="" id="video-frame" poster="' . $thumNail . '" width="100%" height="" controls>';
      $html .= '<source src="' . $videoUrl . '" type="">';
      $html .= '</video>';
      $html .= '</div>';

      $html .= '<div class="col-12 col-md-12 col-lg-6 col-xl-7 my-auto">';

      $html .= '<div class="">';
      $html .= '<h6><strong>Video Title :</strong> ' . $item->name . '</h6>';
      $html .= '<h6><strong>Video Duration :</strong> <span id="duration">' . $item->duration . '</span></h6>';
      $html .= '<h6><strong>Interactive Quastions :</strong> 4 </h6>';

      $html .= '<div class="position-relative">';
      $html .= '<label class="add-supplementary-file-label" onClick="openSupplementModal(' . $item->id . ')"> Add Supplementary file';
      $html .= '</label>';
      $html .= '</div>';

      // $html .= '<label class="add-supplementary-file-label" onClick="openQuestionModal('.$item->id.')" data-video-url="' . $videoUrl . '">Add Interactive Questions</label> <br>';
      $html .= '<label class="add-supplementary-file-label add-qus-ans" data-id="' . $item->id . '" data-thumb-nail="' . $thumNail . '" data-video-url="' . $videoUrl . '">Add Interactive Questions</label> <br>';
      $html .= '<button type="button" data-id="' . $item->id . '" class="btn default-btn mt-3 delete-video">Delete Video</button>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</li>';
    }
    return response()->json(['html' => $html, 'status' => 200]);
  }

  public function addSupplementaryFile(Request $request)
  {
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

  public function indexToWord($index)
  {
    $words = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth"];

    // Subtract 1 from the index to match the array
    return $words[$index - 1] ?? "";
  }
  public function addQuestionAnswer(Request $request)
  {
    $customMessages = [];

    // Custom message for 'question'
    $customMessages['question.required'] = 'The Question is required.';

    // Custom message for 'correct_answer'
    $customMessages['correct_answer.required'] = 'The Correct Answer is required.';

    $answers = $request->answers;

    foreach ($answers as $key => $answer) {
      $wordIndex = $this->indexToWord($key + 1); // Convert numeric index to word
      $customMessages["answers.$key.required"] = "$wordIndex Answer is required.";
    }

    $request->validate([
      'question' => 'required',
      'correct_answer' => 'required',
      'answers.*' => 'required',
    ], $customMessages);

    $questionSave = new interacticeqestions();
    $questionSave->lecture_videos_id = $request->video_id;
    $questionSave->interactive_qestion = $request->question;
    $questionSave->user_id = $request->user_id;
    $questionSave->display_time = $request->display_time;
    $questionSave->save();
    foreach ($request->answers as $key => $answer) {

      if (($key + 1) == $request->correct_answer) {
        $correct_answer = $request->correct_answer;
      } else {
        $correct_answer = 0;
      }
      $saveAnswer = new interactiveanswers();
      $saveAnswer->user_id = $request->user_id;
      $saveAnswer->lecture_videos_id = $request->video_id;
      $saveAnswer->interactive_qestion_id = $questionSave->id;
      $saveAnswer->correct_answer = $correct_answer;
      $saveAnswer->interactive_answer = $answer;
      $saveAnswer->save();
    }
    return response()->json(['message' => "Question and Answer has been saved successfully.", 'status' => 200]);
  }

  public function getQuestionAnswer(Request $request){
    $getQuestionAnswers = interacticeqestions::with('getAnswer')->where('lecture_videos_id','=',$request->video_id)->get();
    // dd($getQuestionAnswers);
    $html = '';
    foreach($getQuestionAnswers as $key => $questionAnswer){
      $html .= '<h2 class="accordion-header" id="flush-headingOne">';
      $html .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-'.$key.'" aria-expanded="false" aria-controls="flush-collapseOne">';
      $html .= 'Q-'.($key+1).'. '.$questionAnswer->interactive_qestion;
      $html .= '</button>';
      $html .= '</h2>';
      $html .= '<div id="flush-collapseOne-'.$key.'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">';
      $html .= '<div class="accordion-body">';

      $html .= '<div class="row">';
      $html .= '<div class="col-6">';
      $html .= '<div class="form-group">';
      $html .= '<label for="s_time">Display Time</label>';
      $html .= '<input id="e_time" class="form-control" type="text" value="'.$questionAnswer->display_time.'" name="ookk" disabled="">';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</div>';
      foreach($questionAnswer->getAnswer as $answer){
        $html .= '<div class="form-group cust-label">';
        $correctAnswer = $answer->correct_answer != 0 || $answer->correct_answer != null ? 'checked' : '';
        $html .= '<input id="first" type="radio" name="ookk" '.$correctAnswer.'>';
        $html .= '<label for="first">'.$answer->interactive_answer.'</label>';
        $html .= '</div>';
      }
      $html .= '</div>';
      $html .= '</div>';
    }
    // echo $html;
    return response()->json(['html' => $html, 'status' => 200]);
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


  public function getSubChildCategory(Request $request)
  {
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
      ->where('user_id', '=', $auth->id)->get();
    // dd($courses);
    return view('user.profile.i-profile.my-course', compact('courses','auth'));
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
    $trancationHistories = TrancationHistory::with('getCourse')->where('user_id', '=', $auth->id)->get();
    return view('user.profile.i-profile.wallet', compact('trancationHistories'));
  }

  public function uploadSignature(Request $request){
    // dd($request->all());
    User::where('id','=',$request->id)->update(['signature' =>$request->signatureData]);
    return redirect()->back()->with('message', 'Your Signature captured successfully.');

  }
}