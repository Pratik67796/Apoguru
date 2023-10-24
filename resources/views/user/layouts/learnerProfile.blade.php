<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apoGuru - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('custom-notification/toastr.css') }}">
    <style>
        body.profile-body {
            background-color: #b7dfabbd;
            background-image: url('{{ URL::asset('assets/images/bg-2.png') }}');
        }

        form .flex-input-field {
            display: flex;
            align-items: center;
        }

        form .flex-input-field .icon-input {
            width: 47px;
            padding-right: 18px;
            background-color: #cccbcb;
            margin-right: -2px;
        }

        .profile-body .btn-outline-success {
            color: #198754;
        }

        .profile-body .btn-outline-success:hover {
            color: #fff;
        }

        .profile-body .submit-btn {
            line-height: 41px;
            font-size: 15px;
        }

        .profile-body .profile-form .form-group {
            padding-top: 1rem;
            padding-bottom: .5rem;
        }

        .profile-body .profile-form .form-group label {
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 15px;
        }

        .profile-body .profile-form .form-group .form-control {
            border: 1px solid #198754;
            border-radius: 10px;
            padding: .54rem;
            width: 100%;
            font-size: 15px;
            margin-bottom: 0;
        }

        .profile-body .profile-form .form-group .form-control:focus {
            background-color: #23bd7812;
        }

        .profile-body .pro-header {
            /*background: #fafafa;
                          border-radius: 25px;*/
            margin-bottom: 1.5rem;
        }

        .profile-body .in-pr-main-content-wrapper {
            /*padding-left: 216px;*/
            padding-right: 20px;
            padding-top: 20px;
        }

        .profile-body .main__div {
            background-color: #fafafa;
            border-radius: 25px;
            padding: 1.5rem;
        }

        .profile-body .admin-tab-menu {
            background-color: #fafafa;
            margin-right: 1.5rem;
            margin-left: 1.3rem;
            border-radius: 25px;
            top: 20px;
            padding-top: 25px;
        }

        .profile-body .admin-tab-menu a,
        .profile-body .admin-tab-menu button {
            border-radius: 0;
            font-weight: 500;
            background-color: transparent;
            border: none;
        }

        .profile-body .admin-tab-menu a.active,
        .profile-body .admin-tab-menu a:hover {
            border: none;
            background-color: #e0fbeb;
            border-radius: 0;
            color: #309255;
            border-left: 4px solid #c1e0cd;
        }

        .profile-body .admin-tab-menu button.active,
        .profile-body .admin-tab-menu button:hover {
            border: none;
            background-color: #e0fbeb;
            border-radius: 0;
            color: #309255;
            border-left: 4px solid #c1e0cd;
        }

        .profile-body .in-pro-admin-tab-menu a i {
            font-size: 19px;
            margin-right: 8px;
        }

        .profile-body .in-pro-admin-tab-menu button i {
            font-size: 19px;
            margin-right: 8px;
        }

        .profile-body .profile-img-section {
            border-radius: 25px;
            background: #fff;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /*********************************************************************/

        .change-password-section {
            padding: 1.5rem;
            border-radius: 25px;
            background-color: #fafafa;
            margin-top: 1.5rem;
        }

        .change-password-section .title {
            font-size: 22px;
        }

        .body-shade {
            position: absolute;
            width: 100vw;
            height: 100vh;
            background: #404040;
            left: -100px;
        }

        .body-shade.open {
            left: 0;
        }

        /***************************/

        .input-field .nice-select {
            max-width: 124px;
            border-top-right-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }

        .input-field input {
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .default-btn {
            border: 1px solid #1f9a4d;
            background: #309255;
            font-size: 16px;
            padding: 9px;
            border-radius: 10px;
            color: #fff;
            line-height: 1.5rem;
            transition: .5s;
            width: 100%;
        }

        .default-btn:hover {
            border: 1px solid #309255;
            background: #fff;
            color: #309255;
            transition: .5s;
        }

        .ins-details h5 {
            font-size: 16px;
        }

        .ins-details h6 {
            font-size: 14px;
            color: #555;
        }

        @media screen and (min-width: 768px) {
            .modal .modal-md {
                max-width: 700px;
            }
        }


        /* Style to indicate that the list item can be dragged */
        .draggable-item {
            position: relative;
            cursor: grab;
            padding-left: 60px;
            /* Add space for both the indicator and item name */
        }

        /* Style for the reposition indicator (dots) */
        .reposition-indicator {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 12px;
            /* Adjust the size as needed */
            color: black;
            /* Change the color as needed */
            margin-left: 20px;
            /* Add spacing between the indicator and item name */
        }

        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
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
                @if (isset($auth))
                <div class="">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-5">

                        <img class="img-fluid mb-3" src="{{ asset('storage/users/' . $auth->avatar) }}" style="border-radius: 20%; width:150px; height:150px;">
                        <div>
                            <h4 class="mb-3">{{ $auth->name }} {{ ' ' }} {{ $auth->last_name }}</h4>
                        </div>

                    </div>

                    <form class="profile-form ins-details">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Email: </h6>
                                    <h5>{{ $auth->email }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Phone: </h6>
                                    <h5>{{ $auth->country_code }}{{ ' ' }}{{ $auth->phone }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Country: </h6>
                                    <h5>{{ $auth->country }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Qualification: </h6>
                                    <h5>{{ $auth->qualification }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Profession / Workplace:</h6>
                                    <h5>{{ $auth->workplace }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Teaching / Mentorship Experience:</h6>
                                    <h5>{{ $auth->teaching_experience }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">About me:</h6>
                                    <h5>{{ $auth->summary }}</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Document submit list:</h6>
                                    @foreach ($auth->getdocument as $key => $document)
                                    <h5>{{ $document->document_name }}</h5>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <h6 class="mb-1">Social media list:</h6>
                                    @if (isset($auth->Facebook) && $auth->Facebook != null)
                                    <h5><a href="{{ $auth->Facebook }}" target="_blank">Facebook</a></h5>
                                    @endif
                                    @if (isset($auth->Instagram) && $auth->Instagram != null)
                                    <h5><a href="{{ $auth->Instagram }}" target="_blank">Instagram</a></h5>
                                    @endif
                                    @if (isset($auth->LinkedIn) && $auth->LinkedIn != null)
                                    <h5><a href="{{ $auth->LinkedIn }}" target="_blank">LinkedIn</a></h5>
                                    @endif
                                    @if (isset($auth->Twitter) && $auth->Twitter != null)
                                    <h5><a href="{{ $auth->Twitter }}" target="_blank">Twitter</a></h5>
                                    @endif
                                    @if (isset($auth->YouTube) && $auth->YouTube != null)
                                    <h5><a href="{{ $auth->YouTube }}" target="_blank">YouTube</a></h5>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                @endif
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
                    <a class="active" href=""><img src="{{ asset('assets/images/menu-icon/icon-1.png') }}" alt="Icon"></a>
                    <a href="messages.html"><img src="{{ asset('assets/images/menu-icon/icon-2.png') }}" alt="Icon"></a>
                    <a href="overview.html"><img src="{{ asset('assets/images/menu-icon/icon-3.png') }}" alt="Icon"></a>
                    <a href="engagement.html"><img src="{{ asset('assets/images/menu-icon/icon-4.png') }}" alt="Icon"></a>
                    <a href="traffic-conversion.html"><img src="{{ asset('assets/images/menu-icon/icon-5.png') }}" alt="Icon"></a>
                </div>
            </div>
            <div class="page-content-wrapper py-0">
                <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
                    <a class="action author" href="{{ route('index') }}" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
                        <img src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="Author" style="width:120px;">
                    </a>
                    <h5 class="title"> Instructor Dashboard</h5>
                    <!-- <a href="profile-home.html" class=""><i class="icofont-home"></i> Home</a> -->
                    <a href="{{ route('instructor_profile') }}" class="@if(\Request::route()->getName() == 'instructor_profile' ) active @endif"><i class="icofont-user-alt-7"></i> My
                        Profile & Account</a>
                    <a href="{{ route('create_course') }}" class="@if(\Request::route()->getName() == 'create_course' ) active @endif">
                        <i class="icofont-ruler-compass-alt"></i>
                        Create a Course
                    </a>
                    <a href="{{ route('my-course') }}" class="@if(\Request::route()->getName() == 'my-course' ) active @endif">
                        <i class="icofont-ruler-compass-alt"></i>
                        Course I have Created
                    </a>
                    <a href="{{ route('wallet') }}"><i class="fas fa-sack-dollar"></i>Wallet</a>
                </div>
                <div class="main-content-wrapper in-pr-main-content-wrapper">
                    <div class="pro-header mb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none" style="font-size: 18px;"></i>
                                <h5 class="mb-0">Home</h5>
                                <ul class="list-inline text-center switch-toggler-list icon-switch" title="Learner Dashboard">
                                    <li>
                                        <a href="{{ route('learner_profile') }}">
                                            <label class="switch on">
                                                <span class="slider round"><img src="{{ asset('assets/images/icon-instructor-switch.png') }}" width="40"></span>
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
                                                            <strong>Martin</strong> has added a
                                                            <strong>customer</strong> Successfully
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
                                                        <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                            unsolved.
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
                                                        <p><strong> James.</strong> has added a<strong>customer</strong>
                                                            Successfully
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
                                    <img src="{{ asset('assets/images/author/author-07.jpg') }}" alt="Author">
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown" style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="" href="#"><i class="icofont-user"></i> Profile</a>
                                        </li>
                                        <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a>
                                        </li>
                                        <li><a class="" href="#"><i class="icofont-logout"></i> Sign
                                                Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="login-header-action d-flex align-items-center justify-content-end flex-wrap pe-0">
                            <button class="btn-green mb-3" data-bs-toggle="modal" data-bs-target="#signature-modal">Add Signature</button>
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
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    @yield('content')

                </div>
            </div>
        </div>



        <div class="section footer-section">
            <div class="footer-widget-section">
                <img class="shape-1 animation-down" src="{{ URL::asset('assets/images/shape/shape-21.png') }}" alt="Shape">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="{{ route('index') }}"><img src="{{ URL::asset('assets/images/apoGuru-logo.png') }}" alt="Logo" width="140"></a>
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
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970)
                                                262-1413</a> </p>
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
                <img class="shape-2 animation-left" src="{{ URL::asset('assets/images/shape/shape-22.png') }}" alt="Shape">
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
    <style>
        div[contenteditable] {
            outline: 1px solid black;
        }

    </style>
    <script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/professional-js/plugins.min.js') }}"></script>

    <script src="{{ asset('assets/js/professional-js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.world.js') }}"></script> --}}
    <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/professional-js/student-map.js') }}"></script> --}}
    <!-- <script src="{{ URL::asset('admin_theme/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('admin_theme/plugins/ckfinder/ckfinder.js') }}"></script> -->
    <script src="{{ asset('custom-notification/toastr.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/inline/ckeditor.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <!-- Include CKEditor library -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            const canvas = document.getElementById('signatureCanvas');
            const ctx = canvas.getContext('2d');
            const clearButton = document.getElementById('clearButton');
            const signatureDataInput = document.getElementById('signatureData');
            let isDrawing = false;
            const signatureImage = document.getElementById('signatureImage'); // Reference to the <img> tag

            canvas.addEventListener('mousedown', function() {
                isDrawing = true;
            });

            canvas.addEventListener('mouseup', () => {
                if (isDrawing) {
                    isDrawing = false;
                    updateSignatureData();
                }
            });
            canvas.addEventListener('mousemove', (e) => {
                if (!isDrawing) return;
                ctx.lineWidth = 2;
                ctx.lineCap = 'round';
                ctx.strokeStyle = 'black';
                ctx.lineTo(e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
                ctx.stroke();
            });

            clearButton.addEventListener('click', () => {
                clearCanvas();
            });

            function clearCanvas() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                signatureDataInput.value = '';
                location.reload();
            }

            function updateSignatureData() {
                signatureDataInput.value = canvas.toDataURL('image/png');
                $('#sign-submit-btn').removeAttr('disabled');
            }
            if ($('#signatureData').val() === '') {
                $('#sign-submit-btn').attr('disabled', 'disabled');
            }
        });

    </script>
    @if (session('message'))
    <script>
        toastr.success("{{ session('message') }}");

    </script>
    @endif


    @include('user.layouts.ajax')
</body>

</html>
