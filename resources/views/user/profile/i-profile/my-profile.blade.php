<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>apoGuru - Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
  <style>

    body.profile-body {
      background-color: #b7dfabbd;
      background-image: url('{{ URL::asset('assets/images/bg-2.png')}}');
    }

    .profile-body .btn-outline-success{
      color: #198754;
    }

    .profile-body .btn-outline-success:hover{
      color: #fff;
    }

    .profile-body .submit-btn{
      line-height: 41px;
      font-size: 15px;
    }

    .profile-body .profile-form .form-group{
      padding-top: 1rem;
      padding-bottom: .5rem;
    }

    .profile-body .profile-form .form-group label{
      margin-bottom: 5px;
      font-weight: 500;
      font-size: 15px;
    }

    .profile-body .profile-form .form-group .form-control{
      border: 1px solid #198754;
      border-radius: 10px;
      padding: .54rem;
      width: 100%;
      font-size: 15px;
      margin-bottom: 0;
    }

    .profile-body .profile-form .form-group .form-control:focus{
      background-color: #23bd7812;
    }

    .profile-body .pro-header{
      /*background: #fafafa;
      border-radius: 25px;*/
      margin-bottom: 1.5rem;
    }
    .profile-body .in-pr-main-content-wrapper {
      /*padding-left: 216px;*/
      padding-right: 20px;
      padding-top: 20px;
    }

    .profile-body .main__div{
      background-color: #fafafa;
      border-radius: 25px;
      padding: 1.5rem;
    }

    /*.profile-body .page-content-wrapper{
      padding-left: 110px;
      }*/

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

      .profile-body .profile-img-section{
        border-radius: 25px;
        background: #fff;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
      }

      /*********************************************************************/

      .change-password-section{
        padding: 1.5rem;
        border-radius: 25px;
        background-color: #fafafa;
        margin-top: 1.5rem;
      }

      .change-password-section .title{
        font-size: 22px;
      }

      .body-shade{
        position: absolute;
        width: 100vw;
        height: 100vh;
        background: #404040;
        left: -100px;
      }

      .body-shade.open{
        left: 0;
      }

      /***************************/

      .input-field .nice-select{
        max-width: 124px;
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
      }

      .input-field input{
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
      }

      .default-btn{
        border: 1px solid #1f9a4d;
        background: #309255;
        font-size: 16px;
        padding: 9px;
        border-radius: 10px;
        color: #fff;
        line-height: 1.5rem;
        transition: .5s;
      }

      .default-btn:hover{
        border: 1px solid #309255;
        background: #fff;
        color: #309255;
        transition: .5s;
      }

      .ins-details h5{
        font-size: 16px;
      }

      .ins-details h6{
        font-size: 14px;
        color: #555;
      }

      @media screen and (min-width: 768px){
        .modal .modal-md{
          max-width: 700px;
        }
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
          <p class="text-center my-10">You Want to Logout?</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary">Yes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ins_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ins_ModalLabel">Instructor Profile Preview</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <h5 class="mb-3">Instructor Profile Preview</h5> -->
          <div class="">
              <div class="d-flex flex-column align-items-center justify-content-center mb-5">
                <img class="img-fluid mb-3" src="{{ URL::asset('assets/images/author/author-07.jpg')}}" style="border-radius: 9%;">
                <div>
                  <h4 class="mb-3">Martin nel</h4>
                </div>
              </div>

            <form class="profile-form ins-details">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <h6 class="mb-1">Qualification: </h6>
                    <h5>Diploma Engenearing</h5>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <h6 class="mb-1">Profection / Workplace:</h6>
                    <h5>London, England</h5>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <h6 class="mb-1">Teaching / Mentorship Experience:</h6>
                    <h5>10+ Years Experience in teaching</h5>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <h6 class="mb-1">Students:</h6>
                    <h5>120 (One hundred and twenty)</h5>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <h6 class="mb-1">Courses:</h6>
                    <h5>25 (Twenty five)</h5>
                  </div>
                </div>
                
              </div>
              
            </form>
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
            <a href="traffic-conversion.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-5.png')}}" alt="Icon"></a>
          </div>
        </div>
        <div class="page-content-wrapper py-0">
          <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
            <a class="action author" href="index.html" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
              <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Author" style="width:120px;">
            </a>
            <h5 class="title"> Instructor Dashboard</h5>
            <!-- <a href="profile-home.html" class=""><i class="icofont-home"></i> Home</a> -->
            <a href="my-profile.html" class="active"><i class="icofont-user-alt-7"></i> My Profile & Account</a>
            <a href="creat-course.html"><i class="icofont-ruler-compass-alt"></i> Create a Course</a>
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
                  <h5 class="mb-0">Home</h5>
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
              <div class="login-header-action d-flex align-items-center justify-content-end flex-wrap pe-0">
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
            <div class="profile-img-section">
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <img class="img-fluid me-3" src="{{ URL::asset('assets/images/author/author-07.jpg')}}" style="border-radius: 20%;">
                  <div>
                    <h4 class="mb-3">Martin nel</h4>
                    <button class="btn btn-light btn-sm" style="line-height: 20px;">Change Image</button>
                  </div>
                </div>
                <div>
                  <button class="btn btn-outline-success">Update</button>
                </div>
                
              </div>
            </div>
            <div class="container-fluid main__div">
              <div class="admin-top-bar students-top">
                <div class="courses-select pt-0">
                <!-- <select>
                  <option data-display="All Courses">All Courses</option>
                  <option value="1">option</option>
                  <option value="2">option</option>
                  <option value="3">option</option>
                  <option value="4">Potato</option>
                </select> -->
                <h4 class="title mt-0 mb-3">Personal Information</h4>
                </div>

                <!-- <div class="student-box">
                  <h5 class="title">Total Revenue</h5>
                  <div class="count">2,698</div>
                </div> -->
              </div>

              <div>
                <form class="form profile-form">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input class="form-control" type="text" name="fname" id="fname" placeholder="Write here...">
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input class="form-control" type="text" name="lname" id="lname" placeholder="Write here...">
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Write here...">
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <div class="input-field d-flex align-items-center">
                          <select class="form-control" style="max-width: 120px;">
                            <option>Select Code</option>
                            <option>+ 01</option>
                            <option>+ 02</option>
                            <option>+ 03</option>
                            <option>+ 04</option>
                            <option>+ 05</option>
                          </select>
                          <input class="form-control" type="text" name="phone" id="phone" placeholder="Write here...">
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <label for="country">Country</label>
                          <select class="form-control" id="country">
                            <option>Select Country</option>
                            <option>America</option>
                            <option>Africa</option>
                            <option>Japan</option>
                            <option>China</option>
                            <option>England</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-12 col-md-12">
                      <div class="form-group">
                        <input class="w-100 btn btn-success submit-btn" type="submit" value="Submit">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="ins-info">
              <h4>Instructor Profile</h4>
              <form class="profile-form">
                <div class="form-group">
                  <label for="i_about">About me</label>
                  <textarea id="i_about" class="form-control" placeholder="Write here..."></textarea>
                </div>

                <div class="form-group">
                  <label for="i_profession">Profession / Workplace</label>
                  <textarea id="i_profession" class="form-control " placeholder="Write here..."></textarea>
                </div>

                <div class="form-group">
                  <label for="i_teaching">Teaching / Mentorship Experience</label>
                  <textarea id="i_teaching" class="form-control " placeholder="Write here..."></textarea>
                </div>

                <div class="form-group pb-4">
                  <label for="i-qua">Qualifications</label>
                  <textarea id="i-qua" class="form-control " placeholder="Write here..."></textarea>
                </div>
                
                <i class="">Whould you like to provide documentary evidence to make your verification  process easy and straightforward?</i>
                <div class="row align-items-end">
                  <div class="col-12 col-md-12 col-lg-5">
                    <div class="form-group">
                      <label for="i-doc">Document Name</label>
                      <input id="i-doc" type="text" name="" class="form-control" placeholder="Write here...">
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                    <div class="form-group">
                      <label for="i-sup">Supporting Document</label> <br>
                      <input id="i-sup" type="file" name="" class="" placeholder="Write here...">
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-5 col-lg-3">
                    <div class="form-group">
                      <!-- <label>Add</label><br> -->
                      <a class="btn default-btn w-100">Add New</a>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Social Media Profile</label>
                  <select class="form-control">
                    <option>Select Platform</option>
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Youtube</option>
                    <option>LinkedIn</option>
                    <option>Twitter</option>
                  </select>
                </div>

                <div class="row pt-3">
                  <div class="col-6 col-sm-3 col-md-3 col-lg-4">
                    <div class="form-group">
                      <!-- <label>View</label><br> -->
                      <a class="btn default-btn d-block text-center" data-bs-toggle="modal" data-bs-target="#ins_Modal">Preview</a>
                    </div>
                  </div>

                  <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <!-- <label>Save</label><br> -->
                      <a class="btn default-btn d-block text-center">Save</a>
                    </div>
                  </div>

                  <div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    <div class="form-group">
                      <!-- <label>Get Me Verified</label><br> -->
                      <a class="btn default-btn d-block text-center">Get Me Verified</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="change-password-section">
              <h4 class="title mb-3">Change Password</h4>
              <form class="form profile-form">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <label for="old-pass">Old Password</label>
                      <input type="text" class="form-control" name="old-pass" placeholder="Write here..." id="old-pass">
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <label for="new-pass">New Password</label>
                      <input type="password" class="form-control" name="new-pass" placeholder="Write here..." id="new-pass">
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <label for="conf-pass">Confirm Password</label>
                      <input type="password" class="form-control" placeholder="Write here..." name="conf-pass" id="conf-pass">
                    </div>
                  </div>
                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <input type="submit" class="w-100 btn btn-success submit-btn" value="Update Password">
                    </div>
                  </div>
                </div>
              </form>
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

  <script src="{{ URL::asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/main.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.world.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/student-map.js')}}"></script>

  <script type="">
    $(".switch.on").click(function(){
      $(this).removeClass("on");
      $(this).addClass("off");
      $(".switch img").attr("src" , "{{ URL::asset('assets/images/icon-learner-switch.png')}}");
    });
  </script>

</body>
</html>