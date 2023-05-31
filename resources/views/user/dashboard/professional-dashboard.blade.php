<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Professional Dashboard</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
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
          <!-- <h5 class="mb-3">Instructor Profile Preview</h5> -->
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
        <!-- <div class="header-top d-none d-lg-block">
          <div class="container">
            <div class="header-top-wrapper">
              <div class="header-top-left">
                <p>All course 28% off for <a href="#">Liberian people’s.</a></p>
              </div>
              <div class="header-top-medal">
                <div class="top-info">
                  <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
                  <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a></p>
                </div>
              </div>
              <div class="header-top-right">
                <ul class="social">
                  <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                  <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                  <li><a href="#"><i class="flaticon-skype"></i></a></li>
                  <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <div class="header-main">
          <div class="container">
            <div class="header-main-wrapper">
              <div class="header-logo">
                <a href="index.html"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="120"></a>
              </div>
              @if(Auth::guard('user_new')->check())
              <div class="header-sign-in-up d-none d-lg-block">
                <ul>
                  <li><a class="sign-up" href="{{ route('logout') }}">Log-out</a></li>
                </ul>
              </div>
              @else
              <div class="header-sign-in-up d-none d-lg-block">
                <ul>
                  <li><a class="sign-in" href="{{ route('login') }}">Sign In</a></li>
                  <li><a class="sign-up" href="{{ route('signup') }}">Sign Up</a></li>
                </ul>
              </div>
              @endif
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
                <li><a href="courses-details.html">Courses Details</a></li>
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
      <div class="overlay"></div>
      <div class="section slider-section">
        <div class="slider-shape">
          <img class="shape-1 animation-round" src="{{ URL::asset('assets/images/shape/shape-8.png')}}" alt="Shape">
        </div>
        <div class="container">
          <div class="slider-content">
            <h4 class="sub-title">Start your favourite course</h4>
            <h2 class="main-title">apoGuru </h2>
            <p id="blink">Agriculture</p>
            <a class="btn btn-primary btn-hover-dark" href="#">All Course</a>
          </div>
        </div>
        <div class="slider-courses-box">
          <img class="shape-1 animation-left" src="{{ URL::asset('assets/images/shape/shape-5.png')}}" alt="Shape">
          <div class="box-content">
            <div class="box-wrapper">
              <i class="flaticon-open-book"></i>
              <span class="count">1,235</span>
              <p>courses</p>
            </div>
          </div>
          <img class="shape-2" src="{{ URL::asset('assets/images/shape/shape-6.png')}}" alt="Shape">
        </div>
        <div class="slider-rating-box">
          <div class="box-rating">
            <div class="box-wrapper">
              <span class="count">4.8 <i class="flaticon-star"></i></span>
              <p>Rating (86K)</p>
            </div>
          </div>
          <img class="shape animation-up" src="{{ URL::asset('assets/images/shape/shape-7.png')}}" alt="Shape">
        </div>
        <div class="slider-images">
          <div class="images">
            <img src="{{ URL::asset('assets/images/slider/slider-1.png')}}" alt="Slider">
          </div>
        </div>
        <div class="slider-video">
          <img class="shape-1" src="{{ URL::asset('assets/images/shape/shape-9.png')}}" alt="Shape">
          <div class="video-play">
            <img src="{{ URL::asset('assets/images/shape/shape-10.png')}}" alt="Shape">
            <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
          </div>
        </div>
      </div>

      <div class="section section-padding-02 pro-pc"> 
        <div class="container">
          <div class="answer-user-list">
              <div class="row justify-content-center">
                @foreach($professional_cat as $key=> $value)
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                  <div class="single-user">
                    <div class="user-author">
                        <img  src="{{URL::asset('parent_sub_category_images')}}/{{$value['image']}}" alt="Author">
                    </div>
                    <div class="user-content">
                        <a href="<?php echo '/pro-subcategory/'.$value['id']?>" class="name">{{$value['name']}}</a>
                        <p>{{$value['description']}}</p>
                    </div>
                    <!-- <span class="time">02 days ago</span> -->
                  </div>
                </div>
                @endforeach
              </div>
            </div>
        </div>                                         
      </div>

      <div class="section section-padding">
        <div class="container">
          <div class="courses-top d-block">
            <div class="section-title mt-0 shape-01">
              <h2 class="main-title text-center">The Right <span>Courses</span> <br> for You</h2>
            </div>
            <!-- <div class="courses-search">
              <form action="#">
                <input type="text" placeholder="Search your course">
                <button><i class="flaticon-magnifying-glass"></i></button>
              </form>
            </div> -->
          </div>
          <div class="courses-tabs-menu courses-active">
            <div class="swiper-container course-swipe">
              <ul class="swiper-wrapper nav">
                <li class="swiper-slide"><button class="active" data-bs-toggle="tab" data-bs-target="#tabs1">See All</button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs2">Recommended For You </button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs3">Trending </button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs4">Most Popular</button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs5">Featured </button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs6">Best Sellers</button></li>
                <li class="swiper-slide"><button data-bs-toggle="tab" data-bs-target="#tabs7">New </button></li>
              </ul>
            </div>
            <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
            <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
          </div>
          <div class="tab-content courses-tab-content">
            <div class="tab-pane fade show active" id="tabs1">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a  data-bs-toggle="modal" data-bs-target="#ins_Modal"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}">
                          <img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses">
                        </a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs2">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs3">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs4">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="courses-details.html"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs5">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs6">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
            <div class="tab-pane fade" id="tabs7">
              <div class="courses-wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-04.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Data Science and Machine Learning with Python - Hands On!</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-02.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Pamela Foster</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-06.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Rose Simmons</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Science</a>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-05.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Finance</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Finance Series: Learn to Budget and Calculate your Net Worth.</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-01.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-05.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Marketing</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Build Brand Into Marketing: Tackling the New Marketing Landscape</a></h4>
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
                  <div class="col-lg-4 col-md-6">
                    <div class="single-courses">
                      <div class="courses-images">
                        <a href="{{ route('pro-course-buy') }}"><img src="{{ URL::asset('assets/images/courses/courses-03.jpg')}}" alt="Courses"></a>
                      </div>
                      <div class="courses-content">
                        <div class="courses-author">
                          <div class="author">
                            <div class="author-thumb">
                              <a href="#"><img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author"></a>
                            </div>
                            <div class="author-name">
                              <a class="name" href="{{ route('pro-course-buy') }}">Jason Williams</a>
                            </div>
                          </div>
                          <div class="tag">
                            <a href="#">Design</a>
                          </div>
                        </div>
                        <h4 class="title"><a href="{{ route('pro-course-buy') }}">Graphic Design: Illustrating Badges and Icons with Geometric Shapes</a></h4>
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
          <!-- <div class="courses-btn text-center">
            <a href="courses.html" class="btn btn-secondary btn-hover-primary">Other Course</a>
          </div> -->
        </div>
      </div>

      <div class="section section-padding download-section">
        <div class="app-shape-1"></div>
        <div class="app-shape-2"></div>
        <div class="app-shape-3"></div>
        <div class="app-shape-4"></div>
        <div class="container">
          <div class="download-app-wrapper mt-n6">
            <div class="section-title section-title-white">
              <h5 class="sub-title">Ready to start?</h5>
              <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
            </div>
            <img class="shape-1 animation-right" src="{{ URL::asset('assets/images/shape/shape-14.png')}}" alt="Shape">
            <div class="download-app-btn">
              <ul class="app-btn">
                <li><a href="#"><img src="{{ URL::asset('assets/images/google-play.png')}}" alt="Google Play"></a></li>
                <li><a href="#"><img src="{{ URL::asset('assets/images/app-store.png')}}" alt="App Store"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="section section-padding-02">
        <div class="container">
          <div class="call-to-action-wrapper">
            <img class="cat-shape-01 animation-round" src="{{ URL::asset('assets/images/shape/shape-12.png')}}" alt="Shape">
            <img class="cat-shape-02" src="{{ URL::asset('assets/images/shape/shape-13.svg')}}" alt="Shape">
            <img class="cat-shape-03 animation-round" src="{{ URL::asset('assets/images/shape/shape-12.png')}}" alt="Shape">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="section-title shape-02">
                  <h5 class="sub-title">Become A Instructor</h5>
                  <h2 class="main-title">You can join with Edule as <span>a instructor?</span></h2>
                </div>
              </div>
              <div class="col-md-6">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary btn-hover-dark" href="contact.html">Become Instructor</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-padding mt-n1">
        <div class="container">
          <div class="section-title shape-03 text-center">
            <!-- <h5 class="sub-title">Over 1,235+ Course</h5> -->
            <h2 class="main-title">We Are <span> Proud</span></h2>
          </div>
          <div class="how-it-work-wrapper d-flex">
            <div class="row justify-content-center w-100">
              <div class="col-12 col-md-4 col-lg-3">
                <div class="single-work">
                  <img class="shape-1" src="{{ URL::asset('assets/images/shape/shape-15.png')}}" alt="Shape">
                  <div class="work-icon">
                    <i class="flaticon-transparency"></i>
                  </div>
                  <div class="work-content">
                    <h3 class="title total">4578976</h3>
                    <p>Users</p>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-3">
                <div class="single-work">
                  <img class="shape-2" src="{{ URL::asset('assets/images/shape/shape-15.png')}}" alt="Shape">
                  <div class="work-icon">
                    <i class="flaticon-forms"></i>
                  </div>
                  <div class="work-content">
                    <h3 class="title total-1">456</h3>
                    <p>Instructors</p>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-3">
                <div class="single-work">
                  <img class="shape-3" src="{{ URL::asset('assets/images/shape/shape-16.png')}}" alt="Shape">
                  <div class="work-icon">
                    <i class="flaticon-badge"></i>
                  </div>
                  <div class="work-content">
                    <h3 class="title total-2">45678</h3>
                    <p>Courses</p>
                  </div>
                </div>
              </div>
              
            </div>
                        
            
            
            

          </div>
        </div>
      </div>

      <!-- <div class="section section-padding-02 mt-n1">
        <div class="container">
          <div class="section-title shape-03 text-center">
            <h5 class="sub-title">Student Testimonial</h5>
            <h2 class="main-title">Feedback From <span> Student</span></h2>
          </div>
          <div class="testimonial-wrapper testimonial-active">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="single-testimonial swiper-slide">
                  <div class="testimonial-author">
                    <div class="author-thumb">
                      <img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author">
                      <i class="icofont-quote-left"></i>
                    </div>
                    <span class="rating-star">
                    <span class="rating-bar" style="width: 80%;"></span>
                    </span>
                  </div>
                  <div class="testimonial-content">
                    <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                    <h4 class="name">Sara Alexander</h4>
                    <span class="designation">Product Designer, USA</span>
                  </div>
                </div>
                <div class="single-testimonial swiper-slide">
                  <div class="testimonial-author">
                    <div class="author-thumb">
                      <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="Author">
                      <i class="icofont-quote-left"></i>
                    </div>
                    <span class="rating-star">
                    <span class="rating-bar" style="width: 80%;"></span>
                    </span>
                  </div>
                  <div class="testimonial-content">
                    <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                    <h4 class="name">Melissa Roberts</h4>
                    <span class="designation">Product Designer, USA</span>
                  </div>
                </div>
                <div class="single-testimonial swiper-slide">
                  <div class="testimonial-author">
                    <div class="author-thumb">
                      <img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author">
                      <i class="icofont-quote-left"></i>
                    </div>
                    <span class="rating-star">
                    <span class="rating-bar" style="width: 80%;"></span>
                    </span>
                  </div>
                  <div class="testimonial-content">
                    <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                    <h4 class="name">Sara Alexander</h4>
                    <span class="designation">Product Designer, USA</span>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div> -->


      <!-- <div class="section section-padding-02">
        <div class="container">
          <div class="brand-logo-wrapper">
            <img class="shape-1" src="{{ URL::asset('assets/images/shape/shape-19.png')}}" alt="Shape">
            <img class="shape-2 animation-round" src="{{ URL::asset('assets/images/shape/shape-20.png')}}" alt="Shape">
            <div class="section-title shape-03">
              <h2 class="main-title">Best Supporter of <span> Edule.</span></h2>
            </div>
            <div class="brand-logo brand-active">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-01.png')}}" alt="Brand">
                  </div>
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-02.png')}}" alt="Brand">
                  </div>
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-03.png')}}" alt="Brand">
                  </div>
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-04.png')}}" alt="Brand">
                  </div>
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-05.png')}}" alt="Brand">
                  </div>
                  <div class="single-brand swiper-slide">
                    <img src="{{ URL::asset('assets/images/brand/brand-06.png')}}" alt="Brand">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      
      <!-- <div class="section section-padding mt-n1">
        <div class="container">
          <div class="section-title shape-03 text-center">
            <h5 class="sub-title">Latest News</h5>
            <h2 class="main-title">Educational Tips & <span> Tricks</span></h2>
          </div>
          <div class="blog-wrapper">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                  <div class="blog-image">
                    <a href="blog-details-left-sidebar.html"><img src="{{ URL::asset('assets/images/blog/blog-01.jpg')}}" alt="Blog"></a>
                  </div>
                  <div class="blog-content">
                    <div class="blog-author">
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author"></a>
                        </div>
                        <div class="author-name">
                          <a class="name" href="#">Jason Williams</a>
                        </div>
                      </div>
                      <div class="tag">
                        <a href="#">Science</a>
                      </div>
                    </div>
                    <h4 class="title"><a href="blog-details-left-sidebar.html">Data Science and Machine Learning with Python - Hands On!</a></h4>
                    <div class="blog-meta">
                      <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                      <span> <i class="icofont-heart"></i> 2,568+ </span>
                    </div>
                    <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                  <div class="blog-image">
                    <a href="blog-details-left-sidebar.html"><img src="{{ URL::asset('assets/images/blog/blog-02.jpg')}}" alt="Blog"></a>
                  </div>
                  <div class="blog-content">
                    <div class="blog-author">
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                        </div>
                        <div class="author-name">
                          <a class="name" href="#">Pamela Foster</a>
                        </div>
                      </div>
                      <div class="tag">
                        <a href="#">UX Design</a>
                      </div>
                    </div>
                    <h4 class="title"><a href="blog-details-left-sidebar.html">Create Amazing Color Schemes for Your UX Design Projects</a></h4>
                    <div class="blog-meta">
                      <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                      <span> <i class="icofont-heart"></i> 2,568+ </span>
                    </div>
                    <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                  <div class="blog-image">
                    <a href="blog-details-left-sidebar.html"><img src="{{ URL::asset('assets/images/blog/blog-03.jpg')}}" alt="Blog"></a>
                  </div>
                  <div class="blog-content">
                    <div class="blog-author">
                      <div class="author">
                        <div class="author-thumb">
                          <a href="#"><img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author"></a>
                        </div>
                        <div class="author-name">
                          <a class="name" href="#">Patricia Collins</a>
                        </div>
                      </div>
                      <div class="tag">
                        <a href="#">Business</a>
                      </div>
                    </div>
                    <h4 class="title"><a href="blog-details-left-sidebar.html">Culture & Leadership: Strategies for a Successful Business</a></h4>
                    <div class="blog-meta">
                      <span> <i class="icofont-calendar"></i> 21 March, 2021</span>
                      <span> <i class="icofont-heart"></i> 2,568+ </span>
                    </div>
                    <a href="blog-details-left-sidebar.html" class="btn btn-secondary btn-hover-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="section footer-section">
        <div class="footer-widget-section">
          <img class="shape-1 animation-down" src="{{ URL::asset('assets/images/shape/shape-21.png')}}" alt="Shape">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                <div class="footer-widget">
                  <div class="widget-logo">
                    <a href="#"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="120"></a>
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
            <div class="copyright-wrapper justify-content-center">
              
              <div class="copyright-text">
                <p>&copy; 2023 <span> apoGuru </span> All Rights Reserved</p>
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


<script type="">
  // var roles = [ 'WASSCE', 'BECE', 'CSEC', 'NABTEX' ];
  var data = <?php echo json_encode($professional_cat);?>;
  let test = [];
  for(let a in data) {
      test[a]  = data[a]['name'];
   }
  var roles = test;
  var roleId = 0;

  window.setInterval(function () {
      $('#blink').html(roles[roleId]);
      roleId = roleId + 1;
      if(roleId >= roles.length) { roleId = 0; }
  }, 1000);
</script>
        
 

<script type="">
  

  let triggered = false;
 $(window).on('scroll',function() { 
        if (window.scrollY > ($('.how-it-work-wrapper').offset().top+$('.how-it-work-wrapper').outerHeight()-window.innerHeight) & !triggered){
            
                  $({ counter: 0 }).animate(
  { counter: 4578976 },
  {
    duration: 5000,
    easing: "linear",
    step: function () {
      $(".total").text(Math.ceil(this.counter));
    },
    complete: function () {
    }
  }
);

$({ counter: 0 }).animate(
  { counter: 456 },
  {
    duration: 5000,
    easing: "linear",
    step: function () {
      $(".total-1").text(Math.ceil(this.counter));
    },
    complete: function () {
    }
  }
);

$({ counter: 0 }).animate(
  { counter: 45678 },
  {
    duration: 5000,
    easing: "linear",
    step: function () {
      $(".total-2").text(Math.ceil(this.counter));
    },
    complete: function () {
    }
  }
);


      triggered = true;
  }
});

</script>
     
  
   
</body>
</html>
