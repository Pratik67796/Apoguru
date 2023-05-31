<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>apoGuru - Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
  <style>


.white-btn{
  border: 1px solid #1f9a4d;
  background: #fff;
  font-size: 16px;
  padding: 9px;
  border-radius: 10px;
  color: #309255;
  line-height: 1.5rem;
  transition: .5s;
}

.white-btn:hover{
  border: 1px solid #309255;
  background: #309255;
  color: #fff;
  transition: .5s;
}


.profile-body .pro-header{
  margin-bottom: 1.5rem;
}

.profile-body .in-pr-main-content-wrapper {
  padding-right: 20px;
  padding-top: 20px;
}

.profile-body .main__div{
  background-color: #fafafa;
  border-radius: 25px;
  padding: .4rem 1.5rem .4rem 1.5rem;
}

.profile-body .page-content-wrapper{
  padding-left: 110px;
}

.profile-body .admin-tab-menu{
  background-color: #fafafa;
  margin-right: 1.5rem;
  margin-left: 1.3rem;
  border-radius: 25px;
  top: 20px;
  padding-top: 25px;
}

.profile-body .admin-tab-menu a,.profile-body .admin-tab-menu button{
  border-radius: 0;
  font-weight: 500;
  background-color: transparent; 
  border: none;
}

.profile-body .admin-tab-menu a.active, .profile-body .admin-tab-menu a:hover{
  border:none;
  background-color: #e0fbeb;
  border-radius: 0;
  color: #309255;
  border-left: 4px solid #c1e0cd;
}

.profile-body .admin-tab-menu button.active, .profile-body .admin-tab-menu button:hover{
  border:none;
  background-color: #e0fbeb;
  border-radius: 0;
  color: #309255;
  border-left: 4px solid #c1e0cd;
}

.profile-body .in-pro-admin-tab-menu a i{
  font-size: 19px;
  margin-right: 8px;
}

.profile-body .in-pro-admin-tab-menu button i{
  font-size: 19px;
  margin-right: 8px;
}

.cust-drop .nice-select.open .list{
  width: 100%;
}

label{
  font-size: 13px;
  margin-bottom: 5px;
}

/***************************************************************/
form .btn-success{
  height: 45px;
  line-height: 45px;
}

form .flex-input-field{
  display: flex;
  align-items: center;
}

form .flex-input-field .icon-input{
  width: 47px;
  padding-right: 18px;
  background-color: #cccbcb;
  margin-right: -2px;
}

/***************** cust label *********************/
.cust-label{
  position: relative;
  padding: .5rem 1rem .5rem 3rem;
  border: 1px solid #309255;
  border-radius: 5px;
  margin-bottom: 1rem;
}

.cust-label.active{
  box-shadow: 1px 1px 14px -6px #309255;
  background-color: #40e68061;
}

.cust-label input{
  position: absolute;
  top: 50%;
  left: 1rem;
  transform: translateY(-50%);
  accent-color:#309255;
}

.cust-label label{
  font-size: 15px;
  height: 100%;
  width: 100%;
  margin-bottom: 0;
}
  </style>
</head>

<!-- Modal -->
<div class="modal fade" id="logout_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logout_ModalLabel">Logout</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-items-center justify-content-between my-4">
          <p class="text-center my-10">You want to logout?</p>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="c_course_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="c_course_ModalLabel">Video</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center justify-content-center my-4">
          <div class="col-12 col-md-5">
            <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="100%" height="" controls>
              <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4')}}" type="">
              <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg')}}" type="">
            </video>
          </div>
          <div class="col-12">
            <input class="form-control" placeholder="Write here...">
          </div>
          
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="int_que_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="c_course_ModalLabel">Add Interactive Questions</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center my-4">
          <div class="col-12 col-md-12 mb-5 text-center">
            <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="100%" height="" controls style="max-width: 300px;">
              <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4')}}" type="">
              <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg')}}" type="">
            </video>
          </div>
          <div class="col-12 mb-4">
            <div class="text-center">
              <a id="add_question" class="btn default-btn"> Add New Question </a>         
            </div>

            <div class="add-course-section  border-bottom py-3" style="display: none">
              <div class="form-group">
                <label>Enter Question </label>
                <input class="form-control" type="text" placeholder="Write here..." name="">
              </div>

              <div class="row">
                <div class="col-6 col-sm-6">
                  <div class="form-group">
                    <label>Select Display Time</label>
                    <input class="form-control" type="time" placeholder="Write here..." name="">
                  </div>
                </div>

                <div class="col-6 col-sm-6">
                  <div class="form-group">
                    <label>Add Option</label> <br>
                    <a id="add-option" href="#" class="btn default-btn">Add Option </a>
                  </div>
                </div>

                <div id="option_list" class="row option-list">
                </div>
              </div>
              <div class="form-group text-center">
                <a href="" class="btn default-btn">Add Question </a>
              </div>
            </div>
            
          </div>
          <div class="col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Q-1. What is first question ?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="s_time">Display Time</label>
                          <input id="e_time" class="form-control" type="text" value="12:01" name="ookk" disabled="" >
                        </div>
                      </div>                      
                    </div>
                    
                    <div class="form-group cust-label">
                      <input id="first" type="radio" name="ookk" >
                      <label for="first">Here is my first option</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Q-2. What is second question ?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="s_time">Display Time</label>
                          <input id="e_time" class="form-control" type="text" value="10:10" name="ookk" disabled="">
                        </div>
                      </div>                     
                    </div>
                    <div class="form-group cust-label">
                      <input id="first" type="radio" name="ookk" >
                      <label for="first">Here is my first option</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Q-3. What is third question ?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="s_time">Display Time</label>
                          <input id="e_time" class="form-control" type="text" value="09:10" name="ookk" disabled="" >
                        </div>
                      </div>                     
                    </div>

                    <div class="form-group cust-label">
                      <input id="first" type="radio" name="ookk" >
                      <label for="first">Here is my first option</label>
                    </div>
                    <div class="form-group cust-label">
                      <input id="second" type="radio" name="ookk" >
                      <label for="second">Here is my second option</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<body class="profile-body">
  <div class="main-wrapper main-wrapper-02 inst-pro-main">
    <div class="section overflow-hidden position-relative" id="wrapper">
      <div class="sidebar-wrapper in-pro-sidewraper">
        <div class="menu-list">
          <a class="active" href=""><img src="{{ URL::asset('assets/images/menu-icon/icon-1.png')}}" alt="Icon"></a>
          <a href="messages.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-2.png')}}" alt="Icon"></a>
          <a href="overview.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-3.png')}}" alt="Icon"></a>
          <a href="engagement.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-4.png')}}" alt="Icon"></a>
          <a href="traffic-conversion.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-5.png')}}" alt="icon"></a>
        </div>
      </div>
      <div class="page-content-wrapper py-0">

        <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
          <a class="action author" href="index.html" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
            <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Author" style="width:120px;">
          </a>
          <h5 class="title"> Instructor Dashboard</h5>
          <!-- <a href="profile-home.html"><i class="icofont-home"></i> Home</a> -->
          <a href="my-profile.html"><i class="icofont-user-alt-7"></i> My Profile & Account</a>
          <a href="creat-course.html" class="active"><i class="icofont-ruler-compass-alt"></i> Create a Course</a>
          <a href="created-course.html"><i class="icofont-ruler-compass-alt"></i>Course I have Created</a>
          <a href="wallet.html"><i class="fas fa-sack-dollar"></i>Wallet</a>
          <!-- <a href="my-course"><i class="icofont-computer"></i> My Courses</a>
          <a href="my-wishlist"><i class="icofont-heart"></i> My Wishlist</a>
          <a href="subscription-history"><i class="icofont-history"></i> Subscription History</a>
          <a href="cart"><i class="icofont-shopping-cart"></i> View Cart</a>
          <a href="payouts"><i class="icofont-credit-card"></i> Payouts</a>
          <button data-bs-toggle="modal" data-bs-target="#logout_Modal"><i class="icofont-logout"></i> Logout</button> -->
        </div>
        <div class="main-content-wrapper in-pr-main-content-wrapper">
          <div class="pro-header mb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="d-flex align-items-center">
                <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none" style="font-size: 18px;"></i>
                <h5 class="mb-0">Create Course</h5>
                <ul class="list-inline text-center switch-toggler-list icon-switch" title="Learner Dashboard">
                  <li>
                    <a href="../s-profile/s-my-profile.html">
                      <label class="switch on">
                        <span class="slider round"><img src="{{ URL::asset('assets/images/icon-instructor-switch.png')}}" width="40"></span>
                      </label>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="login-header-action ml-auto pe-0">
                <div class="dropdown">
                  <button class="action notification" data-bs-toggle="dropdown">
                    <i class="flaticon-notification"></i>
                    <span class="active"></span>
                  </button>
                  <div class="dropdown-menu dropdown-notification">
                    <ul class="notification-items-list">
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p>
                              <strong>Martin</strong> has added a <strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-shopping-cart"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#">See all notifications <i class="icofont-simple-right"></i></a>
                  </div>
                </div>
                <a class="action author" href="#">
                  <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="Author">
                </a>
                <div class="dropdown">
                  <!-- <button class="action more" data-bs-toggle="dropdown">
                    <span></span>
                    <span></span>
                    <span></span>
                  </button> -->
                  <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown" style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a class="" href="#"><i class="icofont-user"></i> Profile</a></li>
                    <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li>
                    <li><a class="" href="#"><i class="icofont-logout"></i> Sign Out</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="login-header-action d-flex flex-wrap align-items-center justify-content-end pe-0">
              <button class="btn-white mb-3"><i class="far fa-filter"></i></button>
              <div class="d-flex align-items-center cust-dropdown mb-3">
                <p class="mb-0">Sort by</p>
                <select style="font-weight: 600;">
                  <option data-display="All Category">All Category</option>
                  <option value="1">option</option>
                  <option value="2">option</option>
                  <option value="3">option</option>
                </select>
              </div>
              <button class="btn-white mb-3"><i class="fas fa-bars"></i></button>
              <button class="btn-green mb-3"><i class="fas fa-border-all"></i></button>
            </div>
          </div>
          <div class="container-fluid main__div">
            <h4 class="my-3">Course Information</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Choose Course Type</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="parent-sub-category">Parent Subcategory</label>
                <select id="parent-sub-category" class="w-100" >
                  <option>Select Parent Subcategory</option>
                  <option>Parent Subcategory</option>
                  <option>Parent Subcategory</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="child-subcategory">Child Subcategory</label>
                <select class="w-100" id="child-subcategory">
                  <option>Select Child Subcategory</option>
                  <option>Child Subcategory</option>
                  <option>Child Subcategory</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="course-name">Course Name</label>
                <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
              </div>

              <div class="row g-0">
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="course-name">Actual Selling Price</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="usd-price">Price In USD</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input class="w-100 nice-select float-none" type="text" placeholder="Price In USD" name="usd-price" id="usd-price">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="sell-price">Sell Price (Optional)</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input type="text" class="w-100 nice-select float-none" placeholder="Write here..." name="sell-price" id="sell-price">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="sell-price">Sell Price In USD</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input type="text" class="w-100 nice-select float-none" placeholder="Sell Price In USD" name="sell-price" id="sell-price">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group mb-3">
                <label>Description</label>
                <textarea class="w-100 nice-select float-none" placeholder="Write here..." id="desc" name="desc"></textarea>
              </div>

              <div class="form-group mb-3">
                <a id="creat_course" href="" class="btn btn-success">Create</a>
              </div>
            </form>
          </div>

          <div class="container-fluid main__div mt-4">
            <h4 class="my-3">Topics</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Choose Course</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="course-name">Add Principle Topic</label>
                <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
              </div>
              <div class="form-group mb-3">
                <a id="creat_course" href="" class="btn btn-success">Submit</a>
              </div>
            </form>
          </div>

          <div class="container-fluid main__div mt-4">
            <h4 class="my-3">Course Resources</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Select Course</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="topic-type">Select Topic</label>
                <select id="topic-type" class="w-100">
                  <option>Select Topic</option>
                  <option>Topic 1</option>
                  <option>Topic 2</option>
                </select>
              </div>
              <div class="row align-items-end">
                <div class="col-12 col-md-12 col-lg-5">
                  <div class="form-group">
                    <label for="i-doc">Video Name</label>
                    <input id="i-doc" type="text" name="" class="form-control" placeholder="Write here...">
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                  <div class="form-group">
                    <label for="i-sup">Upload Video</label> <br>
                    <input id="i-sup" type="file" name="" class="mb-3" placeholder="Write here...">
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-5 col-lg-3">
                  <div class="form-group">
                    <!-- <label>Add</label><br> -->
                    <a class="btn default-btn w-100 mb-3">Add New</a>
                  </div>
                </div>
              </div>
              <div class="form-group mb-3">
                <a id="creat_course" href="" class="btn btn-success">Submit</a>
              </div>
            </form>
          </div>

          <div class="container-fluid main__div mt-4">
            <h4 class="my-3">Topic Video</h4>
            <div class="row justify-content-between mb-3">
              <div class="col-12 col-md-12 mb-5 mb-lg-0 col-xl-5 col-lg-5">
                <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="100%" height="" controls>
                <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4')}}" type="">
                <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg')}}" type="">
              </video>
              </div>
              <div class="col-12 col-md-12 col-lg-6 col-xl-7 my-auto">
                <div class="">
                  <h6><strong>Video Title :</strong> Video Name</h6>
                  <h6><strong>Video Duration :</strong> 1min 5sec</h6>
                  <h6><strong>Interactive Quastions :</strong> 4 </h6>
                  <div class="position-relative">
                    <input type="file" class="position-absolute" name="" style="opacity: 0">
                    <a class="">Add Supplementary file</a> <br>
                  </div>
                  <a class="" data-bs-toggle="modal" data-bs-target="#int_que_Modal">Add Interactive Questions</a> <br>
                  <a class="btn default-btn mt-3">Delete Video</a>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4 px-4 pt-4 d-flex align-items-center justify-content-between flex-wrap" style="background-color: #19875445;border-radius: 20px;">
            <a class="btn white-btn mb-4 me-2">Publish 10 USD</a>
            <a class="btn white-btn mb-4 me-2">Create Course Certificate</a>
            <a class="btn white-btn mb-4">Download my Flyer</a>
          </div>

        </div>
      </div>
    </div>

      <div class="section footer-section">
        <div class="footer-widget-section">
          <img class="shape-1 animation-down" src="{{ URL::asset('assets/images/shape/shape-21.png')}}" alt="Shape">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                <div class="footer-widget">
                  <div class="widget-logo">
                    <a href="index.html"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="140"></a>
                  </div>
                  <div class="widget-address">
                    <h4 class="footer-widget-title">Caribbean Ct</h4>
                    <p>Haymarket, Virginia (VA).</p>
                  </div>
                  <ul class="widget-info">
                    <li>
                      <p> <i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a> </p>
                    </li>
                    <li>
                      <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                    </li>
                  </ul>
                  <ul class="widget-social">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 order-md-3 order-lg-2">
                <div class="footer-widget-link">
                  <div class="footer-widget">
                    <h4 class="footer-widget-title">Category</h4>
                    <ul class="widget-link">
                      <li><a href="#">Creative Writing</a></li>
                      <li><a href="#">Film & Video</a></li>
                      <li><a href="#">Graphic Design</a></li>
                      <li><a href="#">UI/UX Design</a></li>
                      <li><a href="#">Business Analytics</a></li>
                      <li><a href="#">Marketing</a></li>
                    </ul>
                  </div>
                  <div class="footer-widget">
                    <h4 class="footer-widget-title">Quick Links</h4>
                    <ul class="widget-link">
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Discussion</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Customer Support</a></li>
                      <li><a href="#">Course FAQ’s</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Join Now</h4>
                  <div class="widget-subscribe">
                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>
                    <div class="widget-form">
                      <form action="#">
                        <input type="text" placeholder="Email here">
                        <button class="btn btn-primary btn-hover-dark">Join Now</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img class="shape-2 animation-left" src="{{ URL::asset('assets/images/shape/shape-22.png')}}" alt="Shape">
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="copyright-wrapper">
              <div class="copyright-link">
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Sitemap</a>
                <a href="#">Security</a>
              </div>
              <div class="copyright-text">
                <p>&copy; 2023 <span> apoGuru </span></p>
              </div>
            </div>

          </div>
        </div>
      </div>

  <a href="#" class="back-to-top">
    <i class="icofont-simple-up"></i>
  </a>

</div>

    <script src="{{ URL::asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/plugins.min.js"></script>

    <script src="{{ URL::asset('assets/js/professional-js/main.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.min.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.world.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="{{ URL::asset('assets/js/professional-js/student-map.js"></script>

  <script type="">
    $(".switch.on").click(function(){
      $(this).removeClass("on");
      $(this).addClass("off");
      $(".switch img").attr("src" , "{{ URL::asset('assets/images/icon-learner-switch.png')}}");
    });

    $(".cust-label").click(function(){
      $(".cust-label").removeClass("active");
      $(this).addClass("active");
    });

    $("#add_question").click(function(){
      $(".add-course-section").slideToggle("slow");
    });

    // $("#add-option").click(function(){
    //   $(".option").slideDown("slow");
    // });

    $("#add-option").click(function () {
       $("#option_list").append('<div class="col-12 col-md-6 option"><div class="form-group"><label>Option A</label><input class="form-control" type="text" placeholder="Write here..." name=""></div></div>');
    });
  </script>

  </body>

  </html>