<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Professional Course</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
    <style>
  .header-section{
    display: none;
  }
</style>
  </head>
  <body>

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
          <div class="">
              <div class="d-flex flex-column align-items-center justify-content-center mb-5">
                <img class="img-fluid mb-3" src="../{{ URL::asset('assets/images/author/author-07.jpg')}}" style="border-radius: 9%;">
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

    <div class="main-wrapper">
      <div class="header-section">
        <div class="header-main">
          <div class="container">
            <div class="header-main-wrapper">
              <div class="header-logo">
                <a href="index.html"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="120"></a>
              </div>

              <div class="header-menu d-none ">
                <ul class="nav-menu">
                  <li><a href="index.html">Home</a></li>
                  <li>
                    <a href="#">All Course</a>
                    <ul class="sub-menu">
                      <li><a href="courses.html">Courses</a></li>
                      <li><a href="{{ route('courses-details') }}">Courses Details</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Pages </a>
                    <ul class="sub-menu">
                      <li><a href="about.html">About</a></li>
                      <li><a href="register.html">Register</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="faq.html">FAQ</a></li>
                      <li><a href="404-error.html">404 Error</a></li>
                      <li><a href="after-enroll.html">After Enroll</a></li>
                      <li><a href="courses-admin.html">Instructor Dashboard (Course List)</a></li>
                      <li><a href="overview.html">Instructor Dashboard (Performance)</a></li>
                      <li><a href="students.html">Students</a></li>
                      <li><a href="reviews.html">Reviews</a></li>
                      <li><a href="engagement.html">Course engagement</a></li>
                      <li><a href="traffic-conversion.html">Traffic & conversion</a></li>
                      <li><a href="messages.html">Messages</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                      <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                          <li><a href="blog-grid.html">Blog</a></li>
                          <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Blog Details</a>
                        <ul class="sub-menu">
                          <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                          <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
              <div class="header-sign-in-up d-none d-lg-block">
                <ul>
                  <li><a class="sign-in" href="{{ route('login') }}">Sign In</a></li>
                  <li><a class="sign-up" href="{{ route('signup') }}">Sign Up</a></li>
                </ul>
              </div>
              <div class="header-toggle d-lg-none">
                <a class="menu-toggle" href="javascript:void(0)">
                <span></span>
                <span></span>
                <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu">
        <a class="menu-close" href="javascript:void(0)">
        <i class="icofont-close-line"></i>
        </a>
        <div class="mobile-top">
          <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
          <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a></p>
        </div>
        <div class="mobile-sign-in-up">
          <ul>
            <li><a class="sign-in" href="{{ route('login') }}">Sign In</a></li>
            <li><a class="sign-up" href="{{ route('signup') }}">Sign Up</a></li>
          </ul>
        </div>
        <div class="mobile-menu-items">
          <ul class="nav-menu">
            <li><a href="index.html">Home</a></li>
            <li>
              <a href="#">All Course</a>
              <ul class="sub-menu">
                <li><a href="courses.html">Courses</a></li>
                <li><a href="{{ route('courses-details') }}">Courses Details</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Pages </a>
              <ul class="sub-menu">
                <li><a href="about.html">About</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404-error.html">404 Error</a></li>
                <li><a href="after-enroll.html">After Enroll</a></li>
                <li><a href="courses-admin.html">Instructor Dashboard (Course List)</a></li>
                <li><a href="overview.html">Instructor Dashboard (Performance)</a></li>
                <li><a href="students.html">Students</a></li>
                <li><a href="reviews.html">Reviews</a></li>
                <li><a href="engagement.html">Course engagement</a></li>
                <li><a href="traffic-conversion.html">Traffic & conversion</a></li>
                <li><a href="messages.html">Messages</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <a href="#">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog-grid.html">Blog</a></li>
                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Blog Details</a>
                  <ul class="sub-menu">
                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="mobile-social">
          <ul class="social">
            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li><a href="#"><i class="flaticon-skype"></i></a></li>
            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
          </ul>
        </div>
      </div>



<section class="pt-5 pb-50">
  <div class="container">
    <h1 class="text-end mt-3">Finance </h1>
    <div class="mt-40">
      <h3 class="mb-20"><img class="mr-5" src="{{ URL::asset('assets/ficon/voting.gif')}}" width="50"> Core Agriculture</h3>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title">
              <a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a>
            </h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title"><a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
            <div class="courses-images">
              <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
            </div>
            <div class="courses-content">
              <div class="courses-author">
                <div class="author">
                  <div class="author-thumb">
                    <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                  </div>
                  <div class="author-name">
                    <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                  </div>
                </div>
                <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
              </div>
              <h4 class="title"><a href="{{ route('pro-course-buy') }}">Culture & Leadership: Strategies for a Successful Business</a></h4>
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

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title">
              <a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a>
            </h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title">
              <a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a>
            </h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title">
              <a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a>
            </h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
            <div class="courses-images">
              <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
            </div>
            <div class="courses-content">
              <div class="courses-author">
                <div class="author">
                  <div class="author-thumb">
                    <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                  </div>
                  <div class="author-name">
                    <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                  </div>
                </div>
                <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
              </div>
              <h4 class="title"><a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
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
                    <span class="rating-bar" style="width: 80%;"></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
            <div class="courses-images">
              <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
            </div>
            <div class="courses-content">
              <div class="courses-author">
                <div class="author">
                  <div class="author-thumb">
                    <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                  </div>
                  <div class="author-name">
                    <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                  </div>
                </div>
                <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
              </div>
              <h4 class="title"><a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
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
                    <span class="rating-bar" style="width: 80%;"></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
        <div class="single-courses">
          <div class="courses-images">
            <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
          </div>
          <div class="courses-content">
            <div class="courses-author">
              <div class="author">
                <div class="author-thumb">
                  <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                </div>
                <div class="author-name">
                  <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                </div>
              </div>
              <div class="extra-buttons">
                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                 </div>
            </div>
            <h4 class="title">
              <a href="{{ route('pro-course-buy') }}">Create Amazing Color Schemes for Your UX Design Projects</a>
            </h4>
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
                  <span class="rating-bar" style="width: 80%;"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
                <p>&copy; 2023 <span> apoGuru </span> All Rights Reserved
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
    <script src="{{ URL::asset('assets/js/school-js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/professional-js/main.js')}}"></script>

    <script type="">
      $(document).ready(function(){
        $(".extra-buttons .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>
  </body>
</html>