<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Professional Course Buy</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
</head>
<body>

  <div class="modal fade" id="course_vdo_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog course-vdo-modal" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="course_vdo_ModalLabel">Video</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <video class="school-main-video" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="100%" height="" controls>
            <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4')}}" type="">
            <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg')}}" type="">
          </video>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
                <img class="img-fluid mb-3" src="{{ URL::asset('assets/images/author/author-01.jpg')}}" style="border-radius: 9%;">
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

    <div class="main-wrapper">
      <div class="overlay"></div>
      <div class="section page-banner" style="height: 155px;padding-top: 155px;">

      </div>
      <div class="section section-padding mt-n10">
        <div class="container">
          <div class="row gx-10">
            <div class="col-lg-7">
              <div class="courses-details">
                <div class="courses-details-images">
                  <img src="{{ URL::asset('assets/images/courses/courses-details.jpg')}}" alt="Courses Details">
                  <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                    <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                  </div>
                  <span class="tags">BESTSELLER</span>
                  <div class="courses-play">
                    <img src="{{ URL::asset('assets/images/courses/circle-shape.png')}}" alt="Play">
                    <a class="play " href="" data-bs-toggle="modal" data-bs-target="#course_vdo_Modal">
                      <i class="flaticon-play"></i>
                    </a> <!-- video-popup class removed -->
                  </div>
                </div>
                <h2 class="title">Finance & Investment Series: Learn to Budget and Calculate Your Net Worth.</h2>
                <div class="courses-details-admin">
                  <div class="admin-author">
                    <div class="author-thumb">
                      <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                    </div>
                    <div class="author-content">
                      <a class="name" href="#" data-bs-toggle="modal" data-bs-target="#ins_Modal">Pamela Foster</a>
                      <span class="Enroll">286 Enrolled Students</span>
                    </div>
                  </div>
                  <div class="admin-rating">
                    <span class="rating-count">4.9</span>
                    <span class="rating-star">
                      <span class="rating-bar" style="width: 80%;"></span>
                    </span>
                    <span class="rating-text">(5,764 Rating)</span>
                  </div>
                </div>
                
                <div class="courses-details-tab">
                  <div class="details-tab-menu">
                    <ul class="nav justify-content-center">
                      <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                      <li><button  data-bs-toggle="tab" data-bs-target="#outline">Outline</button></li>
                      <li><button data-bs-toggle="tab" data-bs-target="#reviews">Reviews</button></li>
                      <li><button data-bs-toggle="tab" data-bs-target="#instructors">Mates</button></li>
                    </ul>
                  </div>
                  <div class="details-tab-content">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="description">
                        <div class="tab-description">
                          <div class="description-wrapper">
                            <h3 class="tab-title">Description:</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                          </div>
                          <div class="description-wrapper">
                            <h3 class="tab-title">Curriculum:</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                          </div>
                          <div class="description-wrapper">
                            <h3 class="tab-title">Certification:</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                          </div>
                        </div>
                
                      </div>
                      <div class="tab-pane fade" id="instructors">
                        <div class="tab-instructors members-tab">
                          <h3 class="tab-title">Course Mates:</h3>
                          <div class="row">
                            <div class="col-md-3 col-6">
                              <div class="single-team">
                                <div class="team-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                </div>
                                <div class="team-content">
                                  <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="icofont-star"></i>
                                    <span class="text">(rating)</span>
                                  </div>
                                  <h4 class="name">Margarita James</h4>
                                  <span class="designation">MSC, Instructor</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-6">
                              <div class="single-team">
                                <div class="team-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author">
                                </div>
                                <div class="team-content">
                                  <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="icofont-star"></i>
                                    <span class="text">(rating)</span>
                                  </div>
                                  <h4 class="name">Mitchell Colon</h4>
                                  <span class="designation">BBA, Instructor</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-6">
                              <div class="single-team">
                                <div class="team-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author">
                                </div>
                                <div class="team-content">
                                  <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="icofont-star"></i>
                                    <span class="text">(rating)</span>
                                  </div>
                                  <h4 class="name">Sonya Gordon</h4>
                                  <span class="designation">MBA, Instructor</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-6">
                              <div class="single-team">
                                <div class="team-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-04.jpg')}}" alt="Author">
                                </div>
                                <div class="team-content">
                                  <div class="rating">
                                    <span class="count">4.9</span>
                                    <i class="icofont-star"></i>
                                    <span class="text">(rating)</span>
                                  </div>
                                  <h4 class="name">Archie Neal</h4>
                                  <span class="designation">BBS, Instructor</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="row gx-10">
                            <div class="col-lg-6">
                              <div class="tab-rating-content">
                                <h3 class="tab-title">Rating:</h3>
                                <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the i dustry's standard dummy text ever since the 1500 unknown printer took a galley of type.</p>
                                <p>Lorem Ipsum is simply dummy text of printing and typesetting industry text ever since</p>
                                <p>Lorem Ipsum is simply dummy text of printing and dustry's standard dummy text ever since the 1500 unknown printer took a galley of type.</p>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="tab-rating-box">
                                <span class="count">4.8 <i class="icofont-star"></i></span>
                                <p>Rating (86K+)</p>
                                <div class="rating-box-wrapper">
                                  <div class="single-rating">
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 100%;"></span>
                                    </span>
                                    <div class="rating-progress-bar">
                                      <div class="rating-line" style="width: 75%;"></div>
                                    </div>
                                  </div>
                                  <div class="single-rating">
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 80%;"></span>
                                    </span>
                                    <div class="rating-progress-bar">
                                      <div class="rating-line" style="width: 90%;"></div>
                                    </div>
                                  </div>
                                  <div class="single-rating">
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 60%;"></span>
                                    </span>
                                    <div class="rating-progress-bar">
                                      <div class="rating-line" style="width: 500%;"></div>
                                    </div>
                                  </div>
                                  <div class="single-rating">
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 40%;"></span>
                                    </span>
                                    <div class="rating-progress-bar">
                                      <div class="rating-line" style="width: 80%;"></div>
                                    </div>
                                  </div>
                                  <div class="single-rating">
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 20%;"></span>
                                    </span>
                                    <div class="rating-progress-bar">
                                      <div class="rating-line" style="width: 40%;"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                      <div class="tab-pane fade" id="reviews">
                        <div class="tab-reviews">
                          <h3 class="tab-title">Student Reviews:</h3>
                          <div class="reviews-wrapper reviews-active">
                            <div class="swiper-container">
                              <div class="swiper-wrapper">
                                <div class="single-review swiper-slide">
                                  <div class="review-author">
                                    <div class="author-thumb">
                                      <img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author">
                                      <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="author-content">
                                      <h4 class="name">Sara Alexander</h4>
                                      <span class="designation">Product Designer, USA</span>
                                      <span class="rating-star">
                                        <span class="rating-bar" style="width: 100%;"></span>
                                      </span>
                                    </div>
                                  </div>
                                  <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                                </div>
                                <div class="single-review swiper-slide">
                                  <div class="review-author">
                                    <div class="author-thumb">
                                      <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="Author">
                                      <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="author-content">
                                      <h4 class="name">Karol Bachman</h4>
                                      <span class="designation">Product Designer, USA</span>
                                      <span class="rating-star">
                                        <span class="rating-bar" style="width: 100%;"></span>
                                      </span>
                                    </div>
                                  </div>
                                  <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                                </div>
                                <div class="single-review swiper-slide">
                                  <div class="review-author">
                                    <div class="author-thumb">
                                      <img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author">
                                      <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="author-content">
                                      <h4 class="name">Gertude Culbertson</h4>
                                      <span class="designation">Product Designer, USA</span>
                                      <span class="rating-star">
                                        <span class="rating-bar" style="width: 100%;"></span>
                                      </span>
                                    </div>
                                  </div>
                                  <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                                </div>
                              </div>
                              <div class="swiper-pagination"></div>
                            </div>
                          </div>
                          <div id="vertical_reviews" class="vertical_reviews" style="display: none;">
                            <div class="single-review">
                              <div class="review-author">
                                <div class="author-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-06.jpg')}}" alt="Author">
                                  <i class="icofont-quote-left"></i>
                                </div>
                                <div class="author-content">
                                  <h4 class="name">Sara Alexander</h4>
                                  <span class="designation">Product Designer, USA</span>
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 100%;"></span>
                                  </span>
                                </div>
                              </div>
                              <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                            </div>
                            <div class="single-review">
                              <div class="review-author">
                                <div class="author-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="Author">
                                  <i class="icofont-quote-left"></i>
                                </div>
                                <div class="author-content">
                                  <h4 class="name">Karol Bachman</h4>
                                  <span class="designation">Product Designer, USA</span>
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 100%;"></span>
                                  </span>
                                </div>
                              </div>
                              <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                            </div>
                            <div class="single-review">
                              <div class="review-author">
                                <div class="author-thumb">
                                  <img src="{{ URL::asset('assets/images/author/author-03.jpg')}}" alt="Author">
                                  <i class="icofont-quote-left"></i>
                                </div>
                                <div class="author-content">
                                  <h4 class="name">Gertude Culbertson</h4>
                                  <span class="designation">Product Designer, USA</span>
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 100%;"></span>
                                  </span>
                                </div>
                              </div>
                              <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                            </div>
                            <button type="button" class="btn btn-primary mt-5 btn-hover-dark mx-auto text-center d-block">View More</button>
                          </div>
                          <div class="reviews-btn d-flex justify-content-between">
                            <button type="button" class="btn btn-primary btn-hover-dark" data-bs-toggle="modal" data-bs-target="#reviewsModal">Write A Review</button>

                            <button id="btn-vertical_reviews" type="button" class="btn btn-primary btn-hover-dark">View Reviews Vertically</button>

                          </div>
                          <div class="modal fade" id="reviewsModal">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Add a Review</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body reviews-form">
                                  <form action="#">
                                    <div class="row">
                                      <!-- <div class="col-md-6">
                                        <div class="single-form">
                                          <input type="text" placeholder="Enter your name">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="single-form">
                                          <input type="text" placeholder="Enter your Email">
                                        </div>
                                      </div> -->
                                      <div class="col-md-12">
                                        <div class="reviews-rating">
                                          <label>Rating</label>
                                          <ul id="rating" class="rating">
                                            <li class="star" title='Poor' data-value='1'><i class="icofont-star"></i></li>
                                            <li class="star" title='Poor' data-value='2'><i class="icofont-star"></i></li>
                                            <li class="star" title='Poor' data-value='3'><i class="icofont-star"></i></li>
                                            <li class="star" title='Poor' data-value='4'><i class="icofont-star"></i></li>
                                            <li class="star" title='Poor' data-value='5'><i class="icofont-star"></i></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="single-form">
                                          <textarea placeholder="Write your comments here"></textarea>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="single-form">
                                          <button class="btn btn-primary btn-hover-dark">Submit Review</button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="outline">
                        <div class="course__curriculum">
                          <div class="accordion mt-4" id="course__accordion">
                            <div class="accordion-item mb-4">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Principal Topic
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#course__accordion">
                                <div class="accordion-body">
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 24 24">
                                                <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                              </svg>
                                              <span class="time"> Video to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 24 24">
                                                <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                              </svg>
                                              <span class="time"> Video to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Principal Topic
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#course__accordion">
                                <div class="accordion-body">
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 24 24">
                                                <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                              </svg>
                                              <span class="time"> Video to help</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                    <div class="course__curriculum-info">
                                      <svg viewBox="0 0 24 24">
                                        <polygon class="st0" points="23,7 16,12 23,17 "/>
                                        <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                      </svg>
                                      <h3> <span>Lecture Title: </span> Greetings and introduction</h3>
                                    </div>
                                  </div>
                                  <div class="border-bottom">
                                    <div class="row justify-content-end">
                                      <div class="col-12 col-lg-10">
                                        <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                          <div class="course__curriculum-info">
                                            <svg class="document" viewBox="0 0 24 24">
                                              <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                              <polyline class="st0" points="14,2 14,8 20,8 "/>
                                              <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                              <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                              <polyline class="st0" points="10,9 9,9 8,9 "/>
                                            </svg>
                                            <h3> <span>Supplementry Materials:</span> </h3>
                                          </div>
                                          <div class="course__curriculum-meta">
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Simplified Reading</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 16 16">
                                                <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                              </svg>
                                              <span class="time"> Audio for list</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg class="document" viewBox="0 0 24 24">
                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                <polyline class="st0" points="10,9 9,9 8,9 "/>
                                              </svg>
                                              <span class="time"> Imaged to help</span>
                                            </div>
                                            <div class="course__curriculum-info">
                                              <svg viewBox="0 0 24 24">
                                                <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                              </svg>
                                              <span class="time"> Video to help</span>
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
                      </div>s
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="sidebar course-content-siderbar">
                <div class="sidebar-widget widget-information">
                  <!-- <div class="info-price">
                    <span class="price">$420.38</span>
                  </div> -->
                  <!-- <div class="info-list">
                    <ul>
                      <li><i class="icofont-man-in-glasses"></i> <strong>Instructor</strong> <span>Pamela Foster</span></li>
                      <li><i class="icofont-clock-time"></i> <strong>Duration</strong> <span>08 hr 15 mins</span></li>
                      <li><i class="icofont-ui-video-play"></i> <strong>Lectures</strong> <span>29</span></li>
                      <li><i class="icofont-bars"></i> <strong>Level</strong> <span>Professional</span></li>
                      <li><i class="icofont-book-alt"></i> <strong>Language</strong> <span>English</span></li>
                      <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
                    </ul>
                  </div> -->
                  <h4>Course Content</h4>

                  <div class="accordion mt-4" id="course__accordion">
                    <div class="accordion-item mb-4">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <div class="row w-100">
                          <div class="col-4">
                           <p class="mb-0"> Topic 1</p>
                           <small>Introduction</small>
                          </div>
                          <div class="col-7">
                            <div class="d-flex align-items-center justify-content-between">
                              <small class=""><i class="icofont-laptop"></i> 12 Lectures</small>
                              <small class="ms-2"><i class="icofont-clock-time"></i> 15 Min</small>
                            </div>
                          </div>
                         </div>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#course__accordion">
                        <div class="accordion-body">
                          <ul class="topic-list">
                            <li class="done pb-3">
                              <p class="mb-0">Getting started learners</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 20 min</small>
                            </li>
                            <li class="done pb-3">
                              <p class="mb-0">Overview about basic topics</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 30 min</small>
                            </li>

                            <li class="pb-3">
                              <p class="mb-0">Visual design using looks</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 40 min</small>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="row  w-100">
                          <div class="col-4">
                           <p class="mb-0"> Topic 2</p>
                           <small>Introduction</small>
                          </div>
                          <div class="col-7">
                            <div class="d-flex align-items-center justify-content-between">
                              <small class=""><i class="icofont-laptop"></i> 10 Lectures</small>
                              <small class="ms-2"><i class="icofont-clock-time"></i> 21 Min</small>
                            </div>
                          </div>
                         </div>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#course__accordion">
                        <div class="accordion-body">
                          <ul class="topic-list">
                            <li class="done pb-3">
                              <p class="mb-0">Getting started learners</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 15 min</small>
                            </li>
                            <li class="pb-3">
                              <p class="mb-0">Overview about basic topics</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 25 min</small>
                            </li>

                            <li class="pb-3">
                              <p class="mb-0">Visual design using looks</p>
                              <small><i class="icofont-tick-mark"></i> 1 video <span class="mx-2">|</span> 29 min</small>
                            </li>
                          </ul>
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
    <script src="{{ URL::asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/professional-js/main.js')}}"></script>

    <script type="">
      $(document).ready(function(){
        $(".wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>

    <script type="">
      $(document).ready(function(){
        $(".extra-buttons .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>

    <script type="">
      $("#btn-vertical_reviews").click(function(){
        $(".reviews-wrapper").slideToggle("fast");
        $(".vertical_reviews").slideToggle("slow");
        
        // var x = $("#btn-vertical_reviews");
        // if (x.innerHTML === "View Reviews Vertically"){
        //   x.innerHTML = "View Reviews Horrizontaly";
        // }
        // else {
        //    x.innerHTML = "View Reviews Vertically";
        // }
      })
    </script>

    <script>
      $(document).ready(function(){
        $(".locked-vtopic").append("<div class='locked-vdo-topic'><i class='icofont-lock'></i> <a href='' class='btn btn-sm btn-danger'>Pay To Unlock</a></div>  ")
      });
    </script>

  </body>
  </html>




