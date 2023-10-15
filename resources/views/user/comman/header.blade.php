<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/school-css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/elegantFont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/school-css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('custom-notification/toastr.css') }}">
</head>

<body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="" width="220">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="{{ asset('assets/img/logo/logo-icon.png') }}" alt="">
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
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="logo" width="120">
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
                                <div id="cart-block"></div>
                                {{-- <div class="header__cart">
                                    <a href="javascript:void(0);" class="cart-toggle-btn">
                                        <div class="header__cart-icon">
                                            <svg viewBox="0 0 24 24">
                                                <circle class="st0" cx="9" cy="21" r="1">
                                                </circle>
                                                <circle class="st0" cx="20" cy="21" r="1">
                                                </circle>
                                                <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="cart-item">2</span>
                                    </a>
                                </div> --}}
                            </div>

                            @if (Auth::guard('user_new')->check())
                            <div class="menu-item dropdown dropdown-mobile-full" style="margin-left: 40px;">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link" aria-expanded="false" style="display: flex; flex-direction: column; align-items: center;">
                                    <div class="menu-img online">
                                        <div class="d-flex align-items-center justify-content-center bg-white bg-opacity-25 text-inverse text-opacity-50 rounded-circle overflow-hidden" style="width:40px; height:40px;">
                                            @if(Auth::guard('user_new')->user()->avatar != null)
                                            <img src="{{ asset('storage/users/' . Auth::guard('user_new')->user()->avatar) }}" style="width:40px; height:40px;">
                                            @else
                                            <img src="{{ asset('/image/dummy.jpg') }}" style="width:40px; height:40px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="menu-text d-sm-block d-none">{{ Auth::guard('user_new')->user()->name }}</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">



                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('learner_profile') }}">
                                        My Profile & Account <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <div>
                                        <a href="{{ route('professional-dashboard') }}" class="dropdown-item d-flex align-items-center">
                                            Go To Apoguru Professional
                                        </a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="header__btn ml-20 d-none d-sm-block">
                                        <a href="{{ route('logout') }}"><i class="fad fa-user"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="header__btn ml-20 d-none d-sm-block">
                                <a href="{{ route('signup') }}" class="e-btn"><i class="fad fa-user"></i> Sign
                                    Up</a>
                            </div>
                            <div class="header__btn ml-20 d-none d-sm-block">
                                <a href="{{ route('login') }}" class="e-btn"><i class="fad fa-user"></i>
                                    Login</a>
                            </div>
                            @endif
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
    @yield('content')
    <div class="cartmini__area">
        <div class="cartmini__wrapper">
            <div class="cartmini__title">
                <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
                <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div id="cart-list-block"></div>
            {{-- <div class="cartmini__widget">
                <div class="cartmini__inner">
                    <ul>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('assets/img/course/sm/cart-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="javascript:void(0)">Strategy law and organisation Foundation </a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
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
                                    <img src="{{ asset('assets/img/course/sm/cart-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="javascript:void(0)">Fundamentals of music theory Learn new</a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
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
                                    <img src="{{asset('assets/img/course/sm/cart-3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="javascript:void(0)">Strategy law and organization Foundation </a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
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
            </div> --}}
        </div>
    </div>
    <div class="body-overlay"></div>
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
                                            <img src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="" width="120">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-body">
                                    <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize
                                        lesson plans to best.</p>

                                    <div class="footer__social">
                                        <ul>
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a>
                                            </li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a>
                                            </li>
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

    <script src="{{ asset('assets/js/school-js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/school-js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/school-js/imagesloaded.pkgd.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/school-js/main.js') }}"></script> --}}
    <script src="{{ asset('assets/js/school-js/main.js')}}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="{{ asset('custom-notification/toastr.js') }}"></script>
    <script>
        function addToWishList(authId, courseId) {
            $.ajax({
                url: "{{ route('add-to-wishlist') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , user_id: authId
                    , course_id: courseId
                }
                , success: function(res) {
                    if (res.status === 200) {
                        //$(`#fas-${courseId}`).addClass('fas')
                        callingCart()
                        toastr.success(res.message)
                    }
                }
            })
        }
        $(document).ready(function() {
            callingCart()
        }); 
        function callingCart(){
            $.ajax({
                url: "{{ route('cart-view') }}"
                , type: "GET"
                , success: function(res) {
                    $('#cart-block').html(res.content)
                    $(".cart-toggle-btn").on("click", function() {
                        cartList(res.authId)
                        $(".cartmini__wrapper").addClass("opened");
                        $(".body-overlay").addClass("opened");
                    });
                    $(".cartmini__close-btn").on("click", function() {
                        $(".cartmini__wrapper").removeClass("opened");
                        $(".body-overlay").removeClass("opened");
                    });
                    $(".body-overlay").on("click", function() {
                        $(".cartmini__wrapper").removeClass("opened");
                        $(".sidebar__area").removeClass("sidebar-opened");
                        $(".header__search-3").removeClass("search-opened");
                        $(".body-overlay").removeClass("opened");
                    });
                }
            })
        }
        function cartList(authId){
            $.ajax({
                url:"{{ route('cart-list') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    authId:authId
                },success:function(res){
                    $('#cart-list-block').html(res.content)
                }
            })
        }
        function removeFromCart(id){
            $.ajax({
                url:"{{ route('remove-from-cart') }}",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id:id
                },success:function(res){
                    callingCart()
                    toastr.success(res.message)
                    $(".cartmini__wrapper").removeClass("opened");
                        $(".body-overlay").removeClass("opened");
                }
            })
        }
    </script>

    @yield('script')
</body>

</html>
