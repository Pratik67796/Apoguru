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
    body.profile-body {
      background-color: #b7dfabbd;
      background-image: url('{{ URL::asset('assets/images/bg-2.png')}}');
    }
    .profile-body .pro-header{
     /* background: #fafafa;
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
      padding: .4rem 1.5rem .4rem 1.5rem;
    }

    .profile-body .page-content-wrapper{
      padding-left: 110px;
    }

    .profile-body .admin-tab-menu{
      background-color: #fafafa;
      margin-right: 1.5rem;
      margin-left: 1rem;
      border-radius: 25px;
      top: 20px;
      padding-top: 25px;
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

  </style>
</head>

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
        <p class="text-center my-10">You want to logout?</p>
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
          <a class="action author" href="{{ route('index') }}" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
              <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Author" style="width:120px;">
            </a>
          <h5 class="title"> Instructor Dashboard</h5>
          <!-- <a href="profile-home.html"><i class="icofont-home"></i> Home</a> -->
          <a href="{{ route('instructor-profile') }}"><i class="icofont-user-alt-7"></i> My Profile & Account</a>
          <a href="{{ route('create-course') }}"><i class="icofont-ruler-compass-alt"></i> Create a Course</a>
          <a href="{{ route('course-i-have-created') }}" class="active"><i class="icofont-ruler-compass-alt"></i> Course I have Created</a>
          <a href="{{ route('wallet') }}" class=""><i class="fas fa-sack-dollar"></i>Wallet</a>
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
                <h5 class="mb-0">Created Course</h5>

                <ul class="list-inline text-center switch-toggler-list icon-switch" title="Learner Dashboard">
                  <li>
                    <a href="{{ route('learner-profile') }}">
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
              <div class="courses-tab-content">
                <div class="courses-wrapper">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name"  data-bs-toggle="modal" data-bs-target="#ins_Modal">Jason Williams</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Data Science and Machine Learning with Python - Hands On!</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">$385.00</span>
                              <span class="old-parice">$440.00</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width: 80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name"  data-bs-toggle="modal" data-bs-target="#ins_Modal">Pamela Foster</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">$420.00</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width:80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">Rose Simmons</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Culture & Leadership: Strategies for a Successful Business</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">$295.00</span>
                              <span class="old-parice">$340.00</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width: 80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name"  data-bs-toggle="modal" data-bs-target="#ins_Modal">Jason Williams</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">Free</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width: 80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html">
                            <img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses">
                          </a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name"  data-bs-toggle="modal" data-bs-target="#ins_Modal">Jason Williams</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">$136.00</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width: 80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="single-courses">
                        <div class="courses-images">
                          <a href="../details-course.html"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                          <div class="courses-author">
                            <div class="author">
                              <div class="author-thumb">
                                <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                              </div>
                              <div class="author-name">
                                <a class="name"  data-bs-toggle="modal" data-bs-target="#ins_Modal">Jason Williams</a>
                              </div>
                            </div>
                            <div class="extra-buttons">
                              <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                              <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                            </div>
                          </div>
                          <h4 class="title"><a href="../details-course.html">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
                          <div class="courses-meta">
                            <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                            <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                          </div>
                          <div class="courses-price-review">
                            <div class="courses-price">
                              <span class="sale-parice">$237.00</span>
                            </div>
                            <div class="courses-review">
                              <span class="rating-count">4.9</span>
                              <span class="rating-star">
                                <span class="rating-bar" style="width: 80%;"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <a href="{{ route('index') }}"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="140"></a>
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