<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Models\RemcomenderCourse;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function getCourses()
  {
    $courses = \App\Course::all();
    // dd($courses);
    return view('admin.courses.index', compact('courses'));
  }

  public function createCourse()
  {
    $main_categories = \App\MainCategory::orderby('name')->get();
    return view('admin.courses.create', compact('main_categories'));
  }

  public function getRecommendedCourse(Request $request){
    $course_id = $request->course_id;
    $courses = Course::where('child_sub_category_id','=',$course_id)->get();
    return $courses;
  }

  public function genrateUID()
  {
    $length = 16;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $shortUrl       = '';
    $index = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
      $shortUrl .= $characters[mt_rand(0, $index)];
    }
    return $shortUrl;
  }

  public function storeCourse(Request $request)
  {
    // dd($request->all());
    // $path = base_path() . '/course_images';
    // $file = $request->file('image');
    // $mainImageName = time() . $file->getClientOriginalName();
    // $file->move(public_path('course_images'), $mainImageName);

    if ($request->hasFile('image')) {
      $mainImageName = time() . '_' . $request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('public/course-images', $mainImageName);
    }
    $userDetails = Auth::user();
    // dd($userDetails);
    $course = \App\Course::create([
      'main_category_id' => $request->main_category_id,
      'parent_sub_category_id' => $request->parent_sub_category_id,
      'child_sub_category_id' => $request->child_sub_category_id,
      'title' => $request->title,
      'actual_price' => $request->actual_price,
      'sell_price' => $request->sell_price,
      'description' => $request->description,
      'image' => $mainImageName,
      'admin_id' => $userDetails->id,
      'uid' => $this->genrateUID(),
      'slug' => str_replace(' ','-',strtolower($request->title)),
      'currency'=>$request->currency
    ]);
    // dd($course->id);
    if(isset($request->recommeded_course)){
      foreach($request->recommeded_course as $recommeded){
        $recommededCoursesStore = new RemcomenderCourse;
        $recommededCoursesStore->courses_id = $recommeded;
        $recommededCoursesStore->parent_courses = $course->id;
        $recommededCoursesStore->save();
      }
    }
    if ($course) {
      return redirect()->route('admin.course.list')->with('msg', 'Course successfully created');
    } else {
      return redirect()->back()->with('error', 'Something went wrong while creating the course, please try again');
    }
  }

  public function editCourse($course_id)
  {
    $main_categories = \App\MainCategory::all();
    $course = \App\Course::with('getRecommendedCourses')->find($course_id);
    if ($course) {
      return view('admin.courses.edit', compact('main_categories', 'course'));
    } else {
      return redirect()->back()->with('error', 'Course not found, please try again');
    }
  }

  public function updateCourse(Request $request, $course_id)
  {
    $course = \App\Course::find($course_id);
    if ($course) {

      // $path = base_path() . '/course_images';
      // $file = $request->file('image');
      // $mainImageName = time() . $file->getClientOriginalName();
      // $file->move(public_path('course_images'), $mainImageName);

      if ($request->hasFile('image')) {
        $mainImageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/course-images', $mainImageName);
      }
      $userDetails = Auth::user();
      $course->main_category_id = $request->main_category_id;
      $course->parent_sub_category_id = $request->parent_sub_category_id;
      $course->child_sub_category_id = $request->child_sub_category_id;
      $course->title = $request->title;
      $course->actual_price = $request->actual_price;
      $course->sell_price = $request->sell_price;
      $course->description = $request->description;
      $course->image = $mainImageName;
      $course->slug = str_replace(' ','-',strtolower($request->title));
      $course->save();
      if(isset($request->recommeded_course)){
        RemcomenderCourse::where('parent_courses','=',$course_id)->delete();
        foreach($request->recommeded_course as $course){
            $recommededCoursesStore = new RemcomenderCourse();
            $recommededCoursesStore->courses_id = $course;
            $recommededCoursesStore->parent_courses = $course_id;
            $recommededCoursesStore->save();
        }
      }
      return redirect()->back()->with('msg', 'Course successfully updated');
    } else {
      return redirect()->back()->with('error', 'Course not found, please try again');
    }
  }

  public function deleteCourse($course_id)
  {
    $course = \App\Course::find($course_id);
    if ($course) {
      $course->delete();
      return redirect()->back()->with('msg', 'Course successfully deleted');
    } else {
      return redirect()->back()->with('error', 'Course not found, please try again');
    }
  }

  // PRINCIPAL TOPICS FOR A COURSE

  public function getPrincipalTopicsForCourse($course_id)
  {
    $course = \App\Course::find($course_id);
    // $username = \App\User::all();
    // dd($username);
    $price = DB::table('courses')
      ->where('user_id', $course->user_id)
      ->sum('sell_price');
    //dd($price);

    $principal_topics = \App\PrincipalTopic::all();
    if ($course) {
      return view('admin.courses.principal_topics.index', compact('course', 'principal_topics', 'price'));
      // return redirect()->back()->with('msg', 'Course successfully deleted');
    } else {
      return redirect()->back()->with('error', 'Course not found, please try again');
    }
  }

  public function storePrincipalTopicForCourse(Request $request)
  {
    $course = \App\Course::find($request->course_id);
    $principal_topics = \App\PrincipalTopic::all();
    if ($course) {
      \App\PrincipalTopic::create($request->all());
      return redirect()->back()->with('msg', 'Principal topic successfully added');
    } else {
      return redirect()->back()->with('error', 'Course not found, please try again');
    }
  }

  public function editPrincipalTopicForCourse($principal_topic_id)
  {
    $principal_topics = \App\PrincipalTopic::all();
    $principal_topic = \App\PrincipalTopic::find($principal_topic_id);
    $course = \App\Course::find($principal_topic->course_id);
    if ($principal_topic) {
      return view('admin.courses.principal_topics.edit', compact('course', 'principal_topic', 'principal_topics'));
    } else {
      return redirect()->back()->with('error', 'Principal topic not found, please try again');
    }
  }

  public function updatePrincipalTopicForCourse(Request $request, $principal_topic_id)
  {
    $principal_topic = \App\PrincipalTopic::find($request->principal_topic_id);
    if ($principal_topic) {
      $principal_topic->name = $request->name;
      $principal_topic->save();
      return redirect()->back()->with('msg', 'Principal topic successfully updated');
    } else {
      return redirect()->back()->with('error', 'Principal topic not found, please try again');
    }
  }

  public function deletePrincipalTopicForCourse($principal_topic_id)
  {
    $principal_topic = \App\PrincipalTopic::find($principal_topic_id);
    if ($principal_topic) {
      $principal_topic->delete();
      return redirect()->route('admin.course.principal.topic.list', $principal_topic->course_id)->with('msg', 'Principal topic successfully deleted');
    } else {
      return redirect()->back()->with('error', 'Principal topic not found, please try again');
    }
  }

  // LECTURE COURSES FOR A PRINCIPAL TOPIC

  public function getLectureVideosForPrincipalTopic($principal_topic_id)
  {
    $principal_topic = \App\PrincipalTopic::find($principal_topic_id);
    if ($principal_topic) {
      $course = \App\Course::find($principal_topic->course_id);
      // $lecture_videos = \App\LectureVideo::all();
      // $lecture_videos = \App\LectureVideo::all();
      $lecture_videos = \App\LectureVideo::where('principal_topic_id', $principal_topic_id)->get();
      // dd($reminder);
      return view('admin.courses.principal_topics.lecture_videos.index', compact('principal_topic', 'course', 'lecture_videos'));
    } else {
      return redirect()->back()->with('error', 'Principal topic not found, please try again');
    }
  }

  public function storeLectureVideo(Request $request)
  {

    $path = base_path() . '/lecture_videos';
    $file = $request->file('video');
    $videoFileName = time() . $file->getClientOriginalName();
    $file->move(public_path('lecture_videos'), $videoFileName);

    if ($request->file('thumbnail')) {
      $path = base_path() . '/lecture_video_thumbnails';
      $file = $request->file('thumbnail');
      $mainImageName = time() . $file->getClientOriginalName();
      $file->move(public_path('lecture_video_thumbnails'), $mainImageName);
    } else {
      $mainImageName = NULL;
    }

    $lecture_video = \App\LectureVideo::create([
      'principal_topic_id' => $request->principal_topic_id,
      'name' => $request->name,
      'video' => $videoFileName,
      'thumbnail' => $mainImageName
    ]);

    if ($lecture_video) {
      return redirect()->back()->with('msg', 'Lecture video successfully added');
    } else {
      return redirect()->back()->with('error', 'Something went wrong while adding the video, please try again');
    }
  }

  public function editLectureVideo($lecture_video_id)
  {
    $lecture_video = \App\LectureVideo::with('principalTopic', 'principalTopic.course')->find($lecture_video_id);
    //dd($lecture_video);
    $lecture_videos = \App\LectureVideo::where('principal_topic_id', $lecture_video->principal_topic_id)->get();
    if ($lecture_video) {
      return view('admin.courses.principal_topics.lecture_videos.edit', compact('lecture_video', 'lecture_videos'));
    } else {
      return redirect()->back()->with('error', 'Video not found, please try again');
    }
  }

  public function updateLectureVideo(Request $request, $lecture_video_id)
  {
    $lecture_video = \App\LectureVideo::with('principalTopic', 'principalTopic.course')->find($lecture_video_id);
    if ($lecture_video) {

      $lecture_video->name = $request->name;

      if ($request->file('thumbnail')) {
        $path = base_path() . '/lecture_video_thumbnails';
        $file = $request->file('thumbnail');
        $mainImageName = time() . $file->getClientOriginalName();
        $file->move(public_path('lecture_video_thumbnails'), $mainImageName);

        $lecture_video->thumbnail = $mainImageName;
      }

      if ($request->file('video')) {
        $path = base_path() . '/lecture_videos';
        $file = $request->file('video');
        $videoFileName = time() . $file->getClientOriginalName();
        $file->move(public_path('lecture_videos'), $videoFileName);

        $lecture_video->video = $videoFileName;
      }

      $lecture_video->save();

      return redirect()->back()->with('msg', 'Lecture video successfully updated');
    } else {
      return redirect()->back()->with('error', 'Video not found, please try again');
    }
  }

  public function deleteLectureVideo($lecture_video_id)
  {
    $lecture_video = \App\LectureVideo::find($lecture_video_id);
    if ($lecture_video) {
      $lecture_video->delete();
      return redirect()->back()->with('msg', 'Lecture video successfully deleted');
    } else {
      return redirect()->back()->with('error', 'Video not found, please try again');
    }
  }

  public function courseStatusMangement($uid){
    \App\Course::where('uid','=',$uid)->update(['status' => COURSE_STATUS_UNDER_REVIEW]);
    $course = \App\Course::with([
        'mainCategory',
        'parentSubCategory',
        'childSubCategory',
        'getPrincipleTopic.videos'
      ])
      ->where('uid','=',$uid)->first();
      // $courses = \App\Course::with('getPrincipleTopic.videos')->get();
      // dd($courses);
      // dd($course);
    return view('admin.courses.course-details', compact('course'));
  }

  public function courseStatusUpdate(Request $request){
    \App\Course::where('id','=',$request->id)->update(['status' => $request->status]);
    return response()->json(['message' => 'Status has been updated successfully']);
  }
}
