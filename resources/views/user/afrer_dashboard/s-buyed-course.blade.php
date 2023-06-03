<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> School Course Buy </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon.png')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/preloader.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/meanmenu.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/animate.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/swiper-bundle.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/backToTop.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/elegantFont.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/default.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/custom.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
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
          <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="100%" height="" controls>
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

  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="loading-content">
          <img class="loading-logo-text" src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="" width="220">
          <div class="loading-stroke">
            <img class="loading-logo-icon" src="{{ URL::asset('assets/img/logo/logo-icon.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <header>
    <div id="header-sticky" class="header__area header__transparent header__padding">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
            <div class="header__left d-flex">
              <div class="logo">
                <a href="{{ route('index') }}">
                  <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="logo" width="120">
                </a>
              </div>
            </div>
          </div>
          <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
            <div class="header__right d-flex justify-content-end align-items-center">
              <div class="header__search p-relative ml-50 d-none d-md-block">
                <form action="#">
                  <input type="text" placeholder="Search...">
                  <button type="submit"><i class="fad fa-search"></i></button>
                </form>
                <div class="header__cart">
                  <a href="javascript:void(0);" class="cart-toggle-btn">
                    <div class="header__cart-icon">
                      <svg viewBox="0 0 24 24">
                        <circle class="st0" cx="9" cy="21" r="1"></circle>
                        <circle class="st0" cx="20" cy="21" r="1"></circle>
                        <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"></path>
                      </svg>
                    </div>
                    <span class="cart-item">2</span>
                  </a>
                </div>
              </div>
              <div class="header__btn ml-20 d-none d-sm-block">
                <a href="{{ route('signup') }}" class="e-btn"><i class="fad fa-user"></i> Sign Up</a>
              </div>
              <div class="header__btn ml-20 d-none d-sm-block">
                <a href="{{ route('login') }}" class="e-btn"><i class="fad fa-user"></i> Login</a>
              </div>
              <div class="sidebar__menu d-md-none">
                <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- cart mini area start -->
  <div class="cartmini__area">
    <div class="cartmini__wrapper">
      <div class="cartmini__title">
        <h4>Shopping cart</h4>
      </div>
      <div class="cartmini__close">
        <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
      </div>
      <div class="cartmini__widget">
        <div class="cartmini__inner">
          <ul>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('assets/img/course/sm/cart-1.jpg')}}" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Strategy law and organisation Foundation </a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$46.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('assets/img/course/sm/cart-2.jpg')}}" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Fundamentals of music theory Learn new</a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$32.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
            <li>
              <div class="cartmini__thumb">
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('assets/img/course/sm/cart-3.jpg')}}" alt="">
                </a>
              </div>
              <div class="cartmini__content">
                <h5><a href="javascript:void(0)">Strategy law and organization Foundation </a></h5>
                <div class="product-quantity mt-10 mb-10">
                  <span class="cart-minus">-</span>
                  <input class="cart-input" type="text" value="1"/>
                  <span class="cart-plus">+</span>
                </div>
                <div class="product__sm-price-wrapper">
                  <span class="product__sm-price">$62.00</span>
                </div>
              </div>
              <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li>
          </ul>
        </div>
        <div class="cartmini__checkout">
          <div class="cartmini__checkout-title mb-30">
            <h4>Subtotal:</h4>
            <span>$113.00</span>
          </div>
          <div class="cartmini__checkout-btn">
            <a href="{{ route('cart') }}" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
            <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="body-overlay"></div>
  <!-- cart mini area end -->
  <!-- sidebar area start -->
  <div class="sidebar__area">
    <div class="sidebar__wrapper">
      <div class="sidebar__close">
        <button class="sidebar__close-btn" id="sidebar__close-btn">
          <span><i class="fal fa-times"></i></span>
          <span>close</span>
        </button>
      </div>
      <div class="sidebar__content">
        <div class="logo mb-40">
          <a href="{{ route('index') }}">
            <img src="{{ URL::asset('assets/img/logo/logo.png')}}" alt="logo">
          </a>
        </div>
        <div class="mobile-menu fix"></div>
        <div class="sidebar__search p-relative mt-40 ">
          <form action="#">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fad fa-search"></i></button>
          </form>
        </div>
        <div class="sidebar__cart mt-30">
          <a href="javascript:void(0)">
            <div class="header__cart-icon">
              <svg viewBox="0 0 24 24">
                <circle class="st0" cx="9" cy="21" r="1"/>
                <circle class="st0" cx="20" cy="21" r="1"/>
                <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
              </svg>
            </div>
            <span class="cart-item">2</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar area end -->      
  <div class="body-overlay"></div>
  <!-- sidebar area end -->
  <main>
    <!-- page title area start -->
    <section class="page__title-area pt-120 pb-90">
      <div class="page__title-shape">
        <img class="page-title-shape-5 d-none d-sm-block" src="{{ URL::asset('assets/img/page-title/page-title-shape-1.png')}}" alt="">
        <img class="page-title-shape-6" src="{{ URL::asset('assets/img/page-title/page-title-shape-6.png')}}" alt="">
        <img class="page-title-shape-7" src="{{ URL::asset('assets/img/page-title/page-title-shape-4.png')}}" alt="">
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-7">
              <div class="course__wrapper">
                <div class="course__meta-2 d-sm-flex mb-30">
                  <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                    <div class="course__teacher-thumb-3 mr-15">
                      <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                    </div>
                    <div class="course__teacher-info-3">
                      <h5>Teacher</h5>
                      <p><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ins_Modal">Elon Gated</a></p>
                    </div>
                  </div>
                  <div class="course__update mr-80 mb-30">
                    <h5>Last Update:</h5>
                    <p>July 24, 2022</p>
                  </div>
                  <div class="course__rating-2 mb-30">
                    <h5>Review:</h5>
                    <div class="course__rating-inner d-flex align-items-center">
                      <ul>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                      </ul>
                      <p>4.5</p>
                    </div>
                  </div>
                </div>
                <div class="course__img w-img mb-30 position-relative">
                  <img src="{{ URL::asset('assets/img/course/details/course-details-1.jpg')}}" alt="">
                  <div class="courses-play">
                    <img src="{{ URL::asset('assets/images/courses/circle-shape.png')}}" alt="Play">
                    <a class="play " href="" data-bs-toggle="modal" data-bs-target="#course_vdo_Modal">
                      <i class="flaticon-play"></i>
                    </a> <!-- video-popup class removed -->
                  </div>
                  <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                    <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                  </div>
                </div>
                <div class="course__tab-2 mb-45">
                  <ul class="nav nav-tabs" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span>Discription</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span>Curriculum</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span>Reviews</span> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Mates</span> </button>
                    </li>
                  </ul>
                </div>
                <div class="course__tab-content mb-95">
                  <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                      <div class="course__description">
                        <h3>Course Overview</h3>
                        <p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how's your father David skive off sloshed, don't get shirty with me chip shop vagabond crikey bugger Queen's English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it's your round don't get shirty with me down the pub well. Give us a bell bits and bobs Charles he lost his bottle super my lady cras starkers bite your arm off Queen's English, pardon me horse play Elizabeth a blinding shot chinwag knees up do one David, blag cup of tea Eaton so I said bleeding haggle James Bond cup of char. Gosh William ummm I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do with me nancy boy show off show off pick your nose and blow off spiffing good time lavatory me old mucker, chimney pot what a load of rubbish boot squiffy lost the plot brolly wellies excuse my french.</p>
                        <div class="course__tag-2 mb-35 mt-35">
                          <i class="fal fa-tag"></i>
                          <a href="javascript:void(0)">Big data,</a>
                          <a href="javascript:void(0)">Data analysis,</a>
                          <a href="javascript:void(0)">Data modeling</a>
                        </div>
                        <div class="course__description-list mb-45">
                          <h4>What is the Target Audience?</h4>
                          <ul>
                            <li> <i class="icon_check"></i> Business's managers, leaders</li>
                            <li> <i class="icon_check"></i> Downloadable lectures, code and design assets for all projects</li>
                            <li> <i class="icon_check"></i> Anyone who is finding a chance to get the promotion</li>
                          </ul>
                        </div>
                        <div class="course__instructor mb-45">
                          <h3>Other Instructors</h3>
                          <div class="course__instructor-wrapper d-md-flex align-items-center">
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="{{ URL::asset('assets/img/course/teacher/teacher-3.jpg')}}" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Eleanor Fant</h3>
                                <p>Instructor</p>
                              </div>
                            </div>
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="{{ URL::asset('assets/img/course/teacher/teacher-2.jpg')}}" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Lauren Stamps</h3>
                                <p>Teacher</p>
                              </div>
                            </div>
                            <div class="course__instructor-item d-flex align-items-center mr-70">
                              <div class="course__instructor-thumb mr-20">
                                <img src="{{ URL::asset('assets/img/course/teacher/teacher-1.jpg')}}" alt="">
                              </div>
                              <div class="course__instructor-content">
                                <h3>Jonquil Von</h3>
                                <p>Associate</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                      <div class="course__curriculum">
                        <div class="accordion" id="course__accordion">
                          <div class="accordion-item mb-40">
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
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                      <div class="course__review">
                        <h3>Reviews</h3>
                        <div class="course__comment mb-75">
                          <ul>
                            <li>
                              <div class="course__comment-box ">
                                <div class="course__comment-thumb float-start">
                                  <img src="{{ URL::asset('assets/img/course/comment/course-comment-1.jpg')}}" alt="">
                                </div>
                                <div class="course__comment-content">
                                  <div class="course__comment-wrapper ml-70 fix">
                                    <div class="course__comment-info float-start">
                                      <h4>Eleanor Fant</h4>
                                      <span>July 14, 2022</span>
                                    </div>
                                    <div class="course__comment-rating float-start float-sm-end">
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" > <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="course__comment-text ml-70">
                                    <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="course__comment-box ">
                                <div class="course__comment-thumb float-start">
                                  <img src="{{ URL::asset('assets/img/course/comment/course-comment-2.jpg')}}" alt="">
                                </div>
                                <div class="course__comment-content">
                                  <div class="course__comment-wrapper ml-70 fix">
                                    <div class="course__comment-info float-start">
                                      <h4>Shahnewaz Sakil</h4>
                                      <span>July 17, 2022</span>
                                    </div>
                                    <div class="course__comment-rating float-start float-sm-end">
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating"> <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="course__comment-text ml-70">
                                    <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="course__form">
                          <h3>Write a Review</h3>
                          <div class="course__form-inner">
                            <form action="#">
                              <div class="row">
                                <!-- <div class="col-xxl-6">
                                  <div class="course__form-input">
                                    <input type="text" placeholder="Your Name">
                                  </div>
                                </div>
                                <div class="col-xxl-6">
                                  <div class="course__form-input">
                                    <input type="email" placeholder="Your Email">
                                  </div>
                                </div> -->
                                <div class="col-xxl-12">
                                  <div class="course__form-input">
                                    <input type="text" placeholder="Review Title">
                                  </div>
                                </div>
                                <div class="col-xxl-12">
                                  <div class="course__form-input">
                                    <div class="course__form-rating">
                                      <span>Rating : </span>
                                      <ul>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating" > <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" class="no-rating" > <i class="icon_star"></i> </a></li>
                                      </ul>
                                    </div>
                                    <textarea placeholder="Review Summary"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xxl-12">
                                  <div class="course__form-btn mt-10 mb-55">
                                    <button type="submit" class="e-btn">Submit Review</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                      <div class="course__member mb-45">
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="{{ URL::asset('assets/img/course/instructor/course-instructor-1.jpg')}}" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Shahnewaz Sakil</h5>
                                  <span>Engineer</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>07</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>05</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>3.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="{{ URL::asset('assets/img/course/instructor/course-instructor-2.jpg')}}" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Lauren Stamps</h5>
                                  <span>Teacher</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>05</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>03</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>3.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="course__member-item">
                          <div class="row align-items-center">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                              <div class="course__member-thumb d-flex align-items-center">
                                <img src="{{ URL::asset('assets/img/course/instructor/course-instructor-3.jpg')}}" alt="">
                                <div class="course__member-name ml-20">
                                  <h5>Jonquil Von</h5>
                                  <span>Associate</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-45">
                                <h5>09</h5>
                                <span>Courses</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-70">
                                <h5>07</h5>
                                <span>Reviw</span>
                              </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                              <div class="course__member-info pl-85">
                                <h5>4.00</h5>
                                <span>Rating</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="course__related">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="section__title-wrapper mb-40">
                        <h2 class="section__title">Related <span class="yellow-bg yellow-bg-big">Course<img src="{{ URL::asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="course__slider swiper-container pb-60">
                        <div class="swiper-wrapper">
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="{{ route('course-details') }}">
                                <img src="{{ URL::asset('assets/img/course/course-1.jpg')}}" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="{{ route('course-details') }}">Become a product Manager learn the skills & job.</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="{{ URL::asset('assets/img/course/teacher/teacher-1.jpg')}}" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status">
                                <span>Free</span>
                              </div>
                              <div class="course__btn">
                                <a href="{{ route('course-details') }}" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="{{ route('course-details') }}">
                                <img src="{{ URL::asset('assets/img/course/course-2.jpg')}}" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="sky-blue">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (44)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="{{ route('course-details') }}">Fundamentals of music theory Learn new</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="{{ URL::asset('assets/img/course/teacher/teacher-2.jpg')}}" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="sky-blue">$32.00</span>
                                <span class="old-price">$68.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="{{ route('course-details') }}" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="{{ route('course-details') }}">
                                <img src="{{ URL::asset('assets/img/course/course-3.jpg')}}" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="green">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>3.5 (55)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="{{ route('course-details') }}">Strategy law and organization Foundation</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="{{ URL::asset('assets/img/course/teacher/teacher-3.jpg')}}" alt="">
                                  </div>
                                  <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="green">$46.00</span>
                                <span class="old-price">$68.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="{{ route('course-details') }}" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                            <div class="course__thumb w-img p-relative fix">
                              <a href="{{ route('course-details') }}">
                                <img src="{{ URL::asset('assets/img/course/course-4.jpg')}}" alt="">
                              </a>
                              <div class="course__tag">
                                <a href="javascript:void(0)" class="blue">BESTSELLER</a>
                              </div>
                            </div>
                            <div class="course__content">
                              <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                  <span><i class="far fa-book-alt"></i>22 Lesson</span>
                                </div>
                                <div class="course__rating">
                                  <span><i class="icon_star"></i>4.5 (42)</span>
                                </div>
                              </div>
                              <h3 class="course__title"><a href="{{ route('course-buy') }}">The business Intelligence analyst Course 2022</a></h3>
                              <div class="d-flex align-items-center justify-content-between">
                                <div class="course__teacher d-flex align-items-center">
                                  <div class="course__teacher-thumb mr-15">
                                    <img src="{{ URL::asset('assets/img/course/teacher/teacher-4.jpg')}}" alt="">
                                  </div>
                                  <h6><a href="{{ route('course-buy') }}">Eleanor Fant</a></h6>
                                </div>
                                <div class="extra-buttons">
                                  <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="course__more d-flex justify-content-between align-items-center">
                              <div class="course__status d-flex align-items-center">
                                <span class="blue">$62.00</span>
                                <span class="old-price">$97.00</span>
                              </div>
                              <div class="course__btn">
                                <a href="{{ route('course-details') }}" class="link-btn">
                                  Know Details
                                  <i class="far fa-arrow-right"></i>
                                  <i class="far fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                      </div>
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

                  <div class="accordion mt-4 course-accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
      </section>
      <!-- page title area end -->
    </main>
    <footer>
      <div class="footer__area footer-bg">
        <div class="footer__top pt-190 pb-40">
          <div class="container">
            <div class="row">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="footer__widget mb-50">
                  <div class="footer__widget-head mb-22">
                    <div class="footer__logo">
                      <a href="{{ route('index') }}">
                        <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="" width="140">
                      </a>
                    </div>
                  </div>
                  <div class="footer__widget-body">
                    <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson plans to best.</p>
                    <div class="footer__social">
                      <ul>
                        <li><a href="#"><i class="social_facebook"></i></a></li>
                        <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                        <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                <div class="footer__widget mb-50">
                  <div class="footer__widget-head mb-22">
                    <h3 class="footer__widget-title">Company</h3>
                  </div>
                  <div class="footer__widget-body">
                    <div class="footer__link">
                      <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Instructor</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                <div class="footer__widget mb-50">
                  <div class="footer__widget-head mb-22">
                    <h3 class="footer__widget-title">Platform</h3>
                  </div>
                  <div class="footer__widget-body">
                    <div class="footer__link">
                      <ul>
                        <li><a href="#">Browse Library</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">News & Blogs</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Tutorials</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                <div class="footer__widget footer__pl-70 mb-50">
                  <div class="footer__widget-head mb-22">
                    <h3 class="footer__widget-title">Join Now</h3>
                  </div>
                  <div class="footer__widget-body">
                    <div class="footer__subscribe">
                      <form action="#">
                        <div class="footer__subscribe-input mb-15">
                          <input type="email" placeholder="Your email address">
                          <button type="submit">
                            <i class="far fa-arrow-right"></i>
                            <i class="far fa-arrow-right"></i>
                          </button>
                        </div>
                      </form>
                      <p>Get the latest news and updates right at your inbox.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="footer__copyright text-center">
                  <p>© 2023 apoGuru All Rights Reserved</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{ URL::asset('assets/js/school-js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/vendor/waypoints.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/jquery.meanmenu.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/swiper-bundle.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/owl.carousel.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/jquery.fancybox.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/isotope.pkgd.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/parallax.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/backToTop.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/jquery.counterup.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/ajax-form.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/wow.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ URL::asset('assets/js/school-js/main.js"></script>
    <script type="">
      $(document).ready(function(){
        $(".extra-buttons .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>
    <script type="">
      $(document).ready(function(){
        $(".position-absolute .wishlist-heart").click(function(){
          $(this).toggleClass("far");
          $(this).toggleClass("fas");
        })
      });
    </script>
  </body>
  </html>
