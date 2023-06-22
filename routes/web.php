<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::post('image-upload', 'Admin\CategoryController@storeImage')->name('image.upload');

Route::get('/', function () {
    return view('welcome');
});

//Admin Auth
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
  Route::get('/login', 'Admin\AuthController@getLogin')->name('login');
  Route::post('/login/submit', 'Admin\AuthController@postLogin')->name('login.submit');
  Route::get('/logout', 'Admin\AuthController@postLogout')->name('logout');
});

//Admin Home
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
  Route::get('/home', 'Admin\HomeController@home')->name('home');
});

//Categories
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
  // Main Categories
  Route::get('/category/main/create', 'Admin\CategoryController@createMainCategory')->name('category.main.create');
  Route::post('/category/main/store', 'Admin\CategoryController@storeMainCategory')->name('category.main.store');
  Route::get('/category/main/edit/{category_id}', 'Admin\CategoryController@editMainCategory')->name('category.main.edit');
  Route::post('/category/main/update/{category_id}', 'Admin\CategoryController@updateMainCategory')->name('category.main.update');
  Route::get('/category/main/delete/{category_id}', 'Admin\CategoryController@deleteMainCategory')->name('category.main.delete');

  //Parent Sub Categories
  Route::get('/category/parent/sub/create', 'Admin\CategoryController@createParentSubCategory')->name('category.parent.sub.create');
  Route::post('/category/parent/sub/store', 'Admin\CategoryController@storeParentSubCategory')->name('category.parent.sub.store');
  Route::get('/category/parent/sub/edit/{category_id}', 'Admin\CategoryController@editParentSubCategory')->name('category.parent.sub.edit');
  Route::post('/category/parent/sub/update/{category_id}', 'Admin\CategoryController@updateParentSubCategory')->name('category.parent.sub.update');
  Route::get('/category/parent/sub/delete/{category_id}', 'Admin\CategoryController@deleteParentSubCategory')->name('category.parent.sub.delete');

  // Child Sub Categories
  Route::get('/category/child/sub/create', 'Admin\CategoryController@createChildSubCategory')->name('category.child.sub.create');
  Route::post('/category/child/sub/store', 'Admin\CategoryController@storeChildSubCategory')->name('category.child.sub.store');
  Route::get('/category/child/sub/edit/{category_id}', 'Admin\CategoryController@editChildSubCategory')->name('category.child.sub.edit');
  Route::post('/category/child/sub/update/{category_id}', 'Admin\CategoryController@updateChildSubCategory')->name('category.child.sub.update');
  Route::get('/category/child/sub/delete/{category_id}', 'Admin\CategoryController@deleteChildSubCategory')->name('category.child.sub.delete');

  // Question Types
  Route::get('/question/type/create', 'Admin\QuestionTypeController@createQuestionType')->name('question.type.create');
  Route::post('/question/type/store', 'Admin\QuestionTypeController@storeQuestionType')->name('question.type.store');
  Route::get('/question/type/edit/{question_type_id}', 'Admin\QuestionTypeController@editQuestionType')->name('question.type.edit');
  Route::post('/question/type/update/{question_type_id}', 'Admin\QuestionTypeController@updateQuestionType')->name('question.type.update');
  Route::get('/question/type/delete/{question_type_id}', 'Admin\QuestionTypeController@deleteQuestionType')->name('question.type.delete');

  // Topics
  Route::get('/topic/create', 'Admin\TopicController@createTopic')->name('topic.create');
  Route::post('/topic/store', 'Admin\TopicController@storeTopic')->name('topic.store');
  Route::get('/topic/edit/{topic_id}', 'Admin\TopicController@editTopic')->name('topic.edit');
  Route::post('/topic/update/{topic_id}', 'Admin\TopicController@updateTopic')->name('topic.update');
  Route::get('/topic/delete/{topic_id}', 'Admin\TopicController@deleteTopic')->name('topic.delete');

  // Past Questions
  Route::get('past/question/list', 'Admin\PastQuestionController@pastQuestionList')->name('past.question.list');
  Route::get('past/question/flag', 'Admin\PastQuestionController@flagQuestionList')->name('past.question.flag');
  Route::get('past/question/create', 'Admin\PastQuestionController@createPastQuestion')->name('past.question.create');
  // (Get parent and child gategories based on main category selection)
  Route::post('get/parent/sub/category', 'Admin\PastQuestionController@getParentSubCategory')->name('get.parent.sub.category.from.main.category');
  Route::post('get/child/sub/category', 'Admin\PastQuestionController@getChildSubCategory')->name('get.child.sub.category.from.parent.sub.category');
  Route::post('get/child/sub/category/save', 'Admin\PastQuestionController@getChildSubTopic')->name('get.topic.sub.category.from.child.sub.topic');


  Route::get('past/question/add_more_questions', 'Admin\PastQuestionController@addmorequestions')->name('past_questions.add_more_questions');


  
   
  // Route::post('past/question/store', 'Admin\PastQuestionController@addmorequestions');
  Route::post('past/question/store', 'Admin\PastQuestionController@storePastQuestion')->name('past.question.store');
  Route::get('past/question/edit/{question_type_id}', 'Admin\PastQuestionController@editPastQuestion')->name('past.question.edit');
  Route::post('past/question/update/{question_type_id}', 'Admin\PastQuestionController@updatePastQuestion')->name('past.question.update');
  Route::get('past/question/delete/{question_type_id}', 'Admin\PastQuestionController@deletePastQuestion')->name('past.question.delete');
  // (Past question answers)
  Route::get('past/question/answers/{question_id}', 'Admin\PastQuestionController@pastQuestionAnswers')->name('past.question.answers');
  Route::post('past/question/answer/store', 'Admin\PastQuestionController@storePastQuestionAnswer')->name('past.question.answer.store');
  Route::get('past/question/answer/edit/{past_question_id}/{past_question_answer_id}', 'Admin\PastQuestionController@editPastQuestionAnswer')->name('past.question.answer.edit');
  Route::post('past/question/answer/update/{past_question_answer_id}', 'Admin\PastQuestionController@updatePastQuestionAnswer')->name('past.question.answer.update');
  Route::get('past/question/answer/delete/{past_question_answer_id}', 'Admin\PastQuestionController@deletePastQuestionAnswer')->name('past.question.answer.delete');

  // Courses
  Route::get('/course/list', 'Admin\CourseController@getCourses')->name('course.list');
  Route::get('/course/create', 'Admin\CourseController@createCourse')->name('course.create');
  Route::post('/get-recommended-course', 'Admin\CourseController@getRecommendedCourse')->name('get-recommended-course');
  Route::post('/course/store', 'Admin\CourseController@storeCourse')->name('course.store');
  Route::get('/course/edit/{course_id}', 'Admin\CourseController@editCourse')->name('course.edit');
  Route::post('/course/update/{course_id}', 'Admin\CourseController@updateCourse')->name('course.update');
  Route::get('/course/delete/{course_id}', 'Admin\CourseController@deleteCourse')->name('course.delete');

  // Principal Topics - Courses
  Route::get('/course/principal/topics/{course_id}', 'Admin\CourseController@getPrincipalTopicsForCourse')->name('course.principal.topic.list');
  Route::post('/course/principal/topic/store', 'Admin\CourseController@storePrincipalTopicForCourse')->name('course.principal.topic.store');
  Route::get('/course/principal/topic/edit/{principal_topic_id}', 'Admin\CourseController@editPrincipalTopicForCourse')->name('course.principal.topic.edit');
  Route::post('/course/principal/topic/update/{principal_topic_id}', 'Admin\CourseController@updatePrincipalTopicForCourse')->name('course.principal.topic.update');
  Route::get('/course/principal/topic/delete/{principal_topic_id}', 'Admin\CourseController@deletePrincipalTopicForCourse')->name('course.principal.topic.delete');

  // Lecture Videos - Principal Topics - Courses
  Route::get('/course/principal/topic/lecture/videos/{principal_topic_id}', 'Admin\CourseController@getLectureVideosForPrincipalTopic')->name('course.principal.topic.lecture.video.list');
  Route::post('/course/principal/topic/lecture/video/store', 'Admin\CourseController@storeLectureVideo')->name('course.principal.topic.lecture.video.store');
  Route::get('/course/principal/topic/lecture/video/edit/{lecture_video_id}', 'Admin\CourseController@editLectureVideo')->name('course.principal.topic.lecture.video.edit');
  Route::post('/course/principal/topic/lecture/video/update/{lecture_video_id}', 'Admin\CourseController@updateLectureVideo')->name('course.principal.topic.lecture.video.update');
  Route::get('/course/principal/topic/lecture/video/delete/{lecture_video_id}', 'Admin\CourseController@deleteLectureVideo')->name('course.principal.topic.lecture.video.delete');

  // Users
  Route::get('/users/list', 'Admin\UserController@users')->name('user.list');
  Route::get('/user/create', 'Admin\UserController@createUser')->name('user.create');
  Route::post('/user/store', 'Admin\UserController@storeUser')->name('user.store');
  Route::get('/user/edit/{user_id}', 'Admin\UserController@editUser')->name('user.edit');
  Route::post('/user/update/{user_id}', 'Admin\UserController@updateUser')->name('user.update');
  Route::get('/user/delete/{user_id}', 'Admin\UserController@deleteUser')->name('user.delete');

  // User Notes
  Route::get('/users/user_notes', 'Admin\UserController@createUsernotes')->name('user.createnotes');
  Route::post('/user/store/notes', 'Admin\UserController@storeUsernotes')->name('user.storenotes');
  Route::get('/users/notes/list', 'Admin\UserController@usersnoteslist')->name('user.notes.list');
  Route::get('/user/edit/notes/{user_id}', 'Admin\UserController@editUsernotes')->name('usernotes.edit');
  Route::post('/user/edit/notes/{user_id}', 'Admin\UserController@updateUsernotes')->name('user.notes.update');
  Route::get('/user/delete/notes/delete/{user_id}', 'Admin\UserController@deleteUsernotes')->name('usernotes.delete');

  // user reminders
  Route::get('/users/user_reminder', 'Admin\UserController@reminder')->name('user.createreminder');
  Route::post('/user/store/user_reminder', 'Admin\UserController@storereminder')->name('user.store.reminder');
  Route::get('/users/reminder/list', 'Admin\UserController@usersreminderlist')->name('user.reminderlist');
  Route::get('/user/edit/reminder/{user_id}', 'Admin\UserController@editreminderuser')->name('user.reminder.edit');
  Route::post('/user/notes/update/{user_id}', 'Admin\UserController@updateUserreminder')->name('user.reminder.update');
  Route::get('/user/delete/notes/{user_id}', 'Admin\UserController@deleteUserreminder')->name('user.reminder.delete');

  // today reminders
  Route::get('/today/reminder', 'Admin\UserController@todayreminder')->name('reminders');

  // Sub admins
  Route::get('/user/add/sabadmin', 'Admin\Superadmin@addsubadmin')->name('sub.admin.create');
  Route::post('/subadmin/store', 'Admin\Superadmin@addsubadmindata')->name('add.admin');
  Route::get('/Admin/list', 'Admin\Superadmin@addsubadmindatalist')->name('sab.admin.list');
  Route::get('/admin/edit/{id}', 'Admin\Superadmin@subadminlistedit')->name('edit');
  Route::post('/admin/update/{id}', 'Admin\Superadmin@subadminlistupdate')->name('update');
  Route::get('/admin/delete/{id}', 'Admin\Superadmin@subadminlistdelete')->name('delete');

  //Subscriptions & Payouts
  Route::get('/Subscription', 'Admin\Subscription@Subscription')->name('subscription.list');
  Route::get('/payout','Admin\Subscription@payout')->name('payout.list');
  Route::get('/Instructors','Admin\Subscription@Instructors')->name('instructors.list');
  Route::get('/Active/Subscription','Admin\Subscription@activesubscription')->name('active.subscription');

  // User Documents
  Route::get('/documents/list/{user_id}', 'Admin\DocumentController@documents')->name('document.list');
  Route::post('/document/store', 'Admin\DocumentController@storeDocument')->name('document.store');
  Route::get('/document/edit/{user_id}', 'Admin\DocumentController@editDocument')->name('document.edit');
  Route::post('/document/update/{user_id}', 'Admin\DocumentController@updateDocument')->name('document.update');
  Route::get('/document/delete/{user_id}', 'Admin\DocumentController@deleteDocument')->name('document.delete');
  
  //verifay and unverifay butoon call using ajex
  Route::post('changeStatus', 'Admin\DocumentController@changeStatus')->name('activation');

  //Graphs
  Route::get('Graph', 'Admin\GraphController@graph')->name('graph');
  Route::get('LineGraph', 'Admin\GraphController@linegraph')->name('graph.linechart');

  //paichart
  // Route::get('all/user','Admin\Graphcontroller@alluser')->name('graph.users');
  Route::get('all_user','Admin\GraphController@alluser')->name('graph.all_user');
  Route::get('Paichart/verifay','Admin\GraphController@verifay')->name('graph.paichart');
  Route::get('Paichart/Main','Admin\GraphController@maincat')->name('graph.paichart.graph');
  Route::get('Paichart/parent','Admin\GraphController@parentcat')->name('graph.parent');
  Route::get('PAichart/child','Admin\GraphController@childcat')->name('graph.child');

  //line chart
  Route::get('Linechart','Admin\GraphController@parcourse')->name('par.course');
  Route::get('Linechart/Main','Admin\GraphController@parmain')->name('par.main');
  Route::get('Linechart/parent','Admin\GraphController@parparent')->name('par.parent');
  Route::get('Linechart/Child','Admin\GraphController@parchild')->name('par.child');

  //coloum graph
  Route::get('Colomchart/activesub','Admin\GraphController@activesub')->name('active.sab');
  Route::get('Colomchart/instructors','Admin\GraphController@instructors')->name('instructors');
  Route::get('Colomchart/MainCat','Admin\GraphController@colmaincat')->name('main.cat');

  // social envirment
  Route::get('chat','Admin\Socialenvirment@chat')->name('chat');
  Route::get('hint','Admin\Socialenvirment@hint')->name('hint');
  Route::get('answer','Admin\Socialenvirment@answer')->name('answer');
  Route::get('subscription','Admin\Socialenvirment@cancle_sub')->name('cancle_subscription');
});

//Admin Home
// Route::group(['prefix'=>'front','as'=>'front.'], function(){
//   Route::get('/payment', 'Front\PaymentController@paymentPage')->name('payment');
// });

// $currentURL = url()->current();
  
// if($currentURL == "http://www.apoguru.com"){
//   Route::get('/','Front\PaymentController@index')->name('index');  
// }
// user site
// ---------------------------------------All new design you can do it ik --------------------------------------

Route::get('/', 'Front\Userhome@index')->name('index');
Route::get('/school-dashboard', 'Front\Userhome@school_dashboard')->name('school-dashboard');
Route::get('/professional-dashboard', 'Front\Userhome@professional_dashboard')->name('professional-dashboard');

// Route::get('/subcategory', 'Front\Userhome@subcategory')->name('subcategory');
Route::get('/subcategory/{id?}', 'Front\Userhome@subcategory')->name('subcategory');
Route::get('/course-details/{slug}/{uid}', 'Front\Userhome@course_buy')->name('course-details');
Route::get('/course/{id}', 'Front\Userhome@course')->name('course');
Route::get('/pro-subcategory/{id?}', 'Front\Userhome@pro_subcategory')->name('pro-subcategory');
Route::get('/pro-course-buy/{slug}/{uid}', 'Front\Userhome@pro_course_buy')->name('pro-course-buy');

//user register
Route::get('/signup', 'Front\Logincontroller@registration')->name('signup');
Route::post('/reg','Front\Logincontroller@reg_post')->name('reg');

// usr login 
Route::get('/login', 'Front\Logincontroller@login')->name('login');
Route::post('post-login', 'Front\Logincontroller@postLogin')->name('post-login');
Route::get('/logout', 'Front\Logincontroller@postLogout')->name('logout');


Route::post('/course_rating_add', 'Front\Coursecontroller@course_rating_add')->name('course_rating_add');

//User Profile
Route::get('/cart', 'Front\profilecontroller@cart')->name('cart');
Route::get('/my_course', 'Front\profilecontroller@my_course')->name('my_course');
Route::get('/my_wishlist', 'Front\profilecontroller@my_wishlist')->name('my_wishlist');
Route::get('/subscription_history', 'Front\profilecontroller@subscription_history')->name('subscription-history');
Route::get('/learner_profile', 'Front\profilecontroller@learner_profile')->name('learner_profile');


//Instructor Profile
Route::get('/create-course', 'Front\profilecontroller@create_course')->name('create_course');
Route::get('/course_i_have_created', 'Front\profilecontroller@course_i_have_created')->name('course_i_have_created');
Route::get('/instructor_profile', 'Front\profilecontroller@instructor_profile')->name('instructor_profile');
Route::get('/wallet', 'Front\profilecontroller@wallet')->name('wallet');

Route::get('/buyed_course', 'Front\Userhome@buyed_course')->name('buyed_course');
Route::get('/course_details', 'Front\Userhome@course_details')->name('course_details');
Route::get('/s-buyed-course', 'Front\Userhome@s_buyed_course')->name('s_buyed_course');
