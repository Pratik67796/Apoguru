@extends('user.comman.header')
@section('title') Course @endsection 
@section('content') 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apoGuru </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
    <div class="main-wrapper main-wrapper-02">
        <div class="section login-header">
            <div class="login-header-wrapper navbar navbar-expand">
                <div class="login-header-logo">
                    <a href="index.html"><img src="assets/images/logo-icon.png" alt="Logo"></a></li>
                </div>
                <div class="login-header-search dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>
                    <div class="search-input dropdown-menu">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                        </form>
                    </div>
                </div>

                <div class="login-header-action ml-auto">
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
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
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
                        <img src="assets/images/author/author-07.jpg" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="" href="#"><i class="icofont-user"></i> Profile</a></li>
                            <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li>
                            <li><a class="" href="#"><i class="icofont-logout"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section overflow-hidden position-relative" id="wrapper">
            <div class="sidebar-wrapper">
                <div class="menu-list">
                    <a class="active" href="courses-admin.html"><img src="assets/images/menu-icon/icon-1.png" alt="Icon"></a>
                    <a href="messages.html"><img src="assets/images/menu-icon/icon-2.png" alt="Icon"></a>
                    <a href="overview.html"><img src="assets/images/menu-icon/icon-3.png" alt="Icon"></a>
                    <a href="engagement.html"><img src="assets/images/menu-icon/icon-4.png" alt="Icon"></a>
                    <a href="traffic-conversion.html"><img src="assets/images/menu-icon/icon-5.png" alt="Icon"></a>
                </div>
            </div>

            <div class="page-content-wrapper py-0">
                <div class="nav flex-column admin-tab-menu">
                    <a href="overview.html">Overview</a>
                    <a href="students.html" class="active">Student’s</a>
                    <a href="reviews.html">Review’s</a>
                    <a href="engagement.html">Course Engagement</a>
                    <a href="traffic-conversion.html">Traffic & Conversion</a>
                </div>
                <div class="main-content-wrapper">
                    <div class="container-fluid">
                        <div class="admin-top-bar students-top">
                            <div class="courses-select">
                                <select>
                                    <option data-display="All Courses">All Courses</option>
                                    <option value="1">option</option>
                                    <option value="2">option</option>
                                    <option value="3">option</option>
                                    <option value="4">Potato</option>
                                </select>
                                <h4 class="title">Meet people taking your courses</h4>
                            </div>
                            <div class="student-box">
                                <h5 class="title">Total Revenue</h5>
                                <div class="count">2,698</div>
                            </div>
                        </div>
                        <div class="students-wrapper students-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-01.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Margarita James</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-02.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Stanley Castro</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-07.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-08.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-student">
                                            <div class="student-images">
                                                <img src="assets/images/author/author-09.jpg" alt="Author">
                                            </div>
                                            <div class="student-content">
                                                <h5 class="name">Beatrice Summers</h5>
                                                <span class="country"><img src="assets/images/flag/flag-1.png" alt="Flog"> Brazil</span>
                                                <p>Data Science and Machine learning</p>
                                                <span class="date"><i class="icofont-ui-calendar"></i> 28.03.2021</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="students-arrow">

                                    <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                                    <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="students-map">
                            <h4 class="title">Student's locations and languages.</h4>
                            <div class="map">
                                <div id="vmap"></div>
                            </div>
                        </div>
                        <div class="students-widget">
                            <div class="row">
                                <div class="col-xxl-4">
                                    <div class="single-student-widget widget-color-01">
                                        <h4 class="widget-title">95 Country</h4>
                                        <div class="widget-items">
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-2.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Bangladesh</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (722)</p>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-3.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Pakistan</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 15%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>15%</span> (284)</p>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-4.png" alt="Flag">
                                                    </div>
                                                    <div class="title">USA</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 30%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>30%</span> (306)</p>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-1.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Brazil</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 90%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>90%</span> (835)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-5.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Belgium</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 10%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>10%</span> (152)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="item-flag">
                                                    <div class="flag">
                                                        <img src="assets/images/flag/flag-6.png" alt="Flag">
                                                    </div>
                                                    <div class="title">Azerbaijan</div>
                                                </div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 50%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>50%</span> (635)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4">
                                    <div class="single-student-widget widget-color-02">
                                        <h4 class="widget-title">30 Languages</h4>
                                        <div class="widget-items">
                                            <div class="single-item">
                                                <div class="title">1. English</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (538)</p>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="title">2. Spanish</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 2.5%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>2.5%</span> (189)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">3. French</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 6.8%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>6.8%</span> (263)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">4. Arabic</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 92%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>92%</span> (794)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">5. Greek</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 9.2%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>9.2%</span> (212)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">6. Russian</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 83%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>83%</span> (516)</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4">
                                    <div class="single-student-widget widget-color-03">
                                        <h4 class="widget-title">Additional Student Interests</h4>
                                        <div class="widget-items">
                                            <div class="single-item">
                                                <div class="title">1. WordPress</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 80%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>80%</span> (538)</p>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="title">2. SEO</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 25%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>25%</span> (189)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">3. Python</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 60%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>60%</span> (263)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">4. Marketing</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 92%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>92%</span> (794)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">5. Development</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 39%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>39%</span> (212)</p>
                                                </div>
                                            </div>

                                            <div class="single-item">
                                                <div class="title">6. UX Design</div>
                                                <div class="item-bar">
                                                    <div class="bar-line" style="width: 83%;"></div>
                                                </div>
                                                <div class="item-percentage">
                                                    <p><span>83%</span> (516)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                                                <li><a class="active" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="new-courses" style="background-image: url(assets/images/new-courses-banner.jpg);">
                            <div class="new-courses-title">
                                <h3 class="title">Your students want to learn more. <br> Consider creating new courses to meet that deman.</h3>
                            </div>
                            <img class="shape d-none d-xl-block" src="assets/images/shape/shape-27.png" alt="Shape">
                            <div class="new-courses-btn">
                                <a href="#" class="btn">Create New Course <i class="icofont-rounded-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section footer-section">
            <div class="footer-widget-section">
                <img class="shape-1 animation-down" src="assets/images/shape/shape-21.png" alt="Shape">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="assets/images/logo.png" alt="Logo"></a>
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
                                <h4 class="footer-widget-title">Subscribe</h4>
                                <div class="widget-subscribe">
                                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>
                                    <div class="widget-form">
                                        <form action="#">
                                            <input type="text" placeholder="Email here">
                                            <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="shape-2 animation-left" src="assets/images/shape/shape-22.png" alt="Shape">
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
                            <p>&copy; 2021 <span> Edule </span> Made with <i class="icofont-heart-alt"></i> by <a href="#">Codecarnival</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
    </div>

    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/plugins/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/student-map.js"></script>

</body>

</html>


















@endsection
@section('script')
@endsection