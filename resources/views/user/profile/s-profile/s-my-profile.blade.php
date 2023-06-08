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

  <body class="profile-body s-profile-body">
    <div class="main-wrapper main-wrapper-02 inst-pro-main">
      <div class="section overflow-hidden position-relative" id="wrapper">
        <div class="sidebar-wrapper in-pro-sidewraper">
          <div class="menu-list">
            <a class="active" href="">
              <img src="{{ URL::asset('assets/images/menu-icon/icon-1.png')}}" alt="Icon">
            </a>
            <a href="messages.html">
              <img src="{{ URL::asset('assets/images/menu-icon/icon-2.png')}}" alt="Icon">
            </a>
            <a href="overview.html">
              <img src="{{ URL::asset('assets/images/menu-icon/icon-3.png')}}" alt="Icon">
            </a>
            <a href="engagement.html">
              <img src="{{ URL::asset('assets/images/menu-icon/icon-4.png')}}" alt="Icon">
            </a>
            <a href="traffic-conversion.html">
              <img src="{{ URL::asset('assets/images/menu-icon/icon-5.png')}}" alt="Icon">
            </a>
          </div>
        </div>
        <div class="page-content-wrapper py-0">
          <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
            <a class="action author" href="" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
              <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Author" style="width:120px;">
            </a>
            <h5 class="title"> Learner Dashboard</h5>
            <a href="{{ route('learner_profile') }}" class="active"><i class="icofont-user-alt-7"></i> My Profile & Account</a>
            <a href="{{ route('my_course') }}"><i class="icofont-computer"></i> My Courses</a>
            <a href="{{ route('my_wishlist') }}"><i class="icofont-heart"></i> My Wishlist</a>
            <a href="{{ route('subscription-history') }}"><i class="icofont-history"></i> Subscription History</a>
            <a href="{{ route('cart') }}"><i class="icofont-shopping-cart"></i> View Cart</a>
          </div>
          <div class="main-content-wrapper in-pr-main-content-wrapper">
            <div class="pro-header mb-1">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center">
                  <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none" style="font-size: 18px;"></i>
                  <h5 class="mb-0">Home</h5>
                  <ul class="list-inline text-center switch-toggler-list icon-switch" title="Instructor Dashboard">
                    <li>
                      <a href="{{ route('instructor_profile') }}">
                        <label class="switch off">
                          <span class="slider round"><img src="{{ URL::asset('assets/images/icon-learner-switch.png')}}" width="40"></span>
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
                          <select class="form-control">
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
                  <a href=""><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="140"></a>
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
    $(".switch.off").click(function(){
      $(this).removeClass("off");
      $(this).addClass("on");
      $(".switch img").attr("src" , "{{ URL::asset('assets/images/icon-instructor-switch.png')}}");
    });
  </script>
</body>

</html>