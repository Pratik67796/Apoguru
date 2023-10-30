<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Professional</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('assets/css/professional-css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/professional-css/style.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/professional-css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/fontAwesome5Pro.css')}}">
</head>
<body>
    <div class="main-wrapper">
        <div class="header-section">
            <div class="header-main">
                <div class="container">
                    <div class="header-main-wrapper">
                        <div class="header-logo">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="120"></a>
                        </div>

                        <div class="header-menu d-none ">
                            <ul class="nav-menu">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>
                                    <a href="#">All Course</a>
                                    <ul class="sub-menu">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="#">Courses Details</a></li>
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
                        @if(Auth::guard('user_new')->check())
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                                <li><a class="sign-up" href="{{ route('logout') }}">Logout</a></li>
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
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>
                        <a href="#">All Course</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="#">Courses Details</a></li>
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
        @yield('content')
        <div class="section footer-section">
            <div class="footer-widget-section">
                <img class="shape-1 animation-down" src="{{ asset('assets/images/shape/shape-21.png') }}" alt="Shape">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="Logo" width="120"></a>
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
                <img class="shape-2 animation-left" src="{{ asset('assets/images/shape/shape-22.png') }}" alt="Shape">
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

    <script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/professional-js/plugins.min.js')}}"></script>
    <script src="{{ asset('assets/js/professional-js/main.js')}}"></script>
    @yield('script')
</body>
</html>
