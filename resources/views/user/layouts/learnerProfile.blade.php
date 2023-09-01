{{-- <!DOCTYPE html>
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
    <style>
        


        .profile-body .pro-header {
            margin-bottom: 1.5rem;
        }

        .profile-body .in-pr-main-content-wrapper {
            padding-right: 20px;
            padding-top: 20px;
        }

        .profile-body .main__div {
            background-color: #fafafa;
            border-radius: 25px;
            padding: .4rem 1.5rem .4rem 1.5rem;
        }

        .profile-body .page-content-wrapper {
            padding-left: 110px;
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

        .cust-drop .nice-select.open .list {
            width: 100%;
        }

        label {
            font-size: 13px;
            margin-bottom: 5px;
        }

        /***************************************************************/
        form .btn-success {
            height: 45px;
            line-height: 45px;
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

        /***************** cust label *********************/
        .cust-label {
            position: relative;
            padding: .5rem 1rem .5rem 3rem;
            border: 1px solid #309255;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .cust-label.active {
            box-shadow: 1px 1px 14px -6px #309255;
            background-color: #40e68061;
        }

        .cust-label input {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            accent-color: #309255;
        }

        .cust-label label {
            font-size: 15px;
            height: 100%;
            width: 100%;
            margin-bottom: 0;
        }
    </style>
</head>
<!-- Modal -->
<div class="modal fade" id="logout_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logout_ModalLabel">Logout</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center justify-content-between my-4">
                    <p class="text-center my-10">You want to logout?</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="c_course_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="c_course_ModalLabel">Video</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center justify-content-center my-4">
                    <div class="col-12 col-md-5">
                        <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg') }}"
                            width="100%" height="" controls>
                            <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4') }}" type="">
                            <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg') }}" type="">
                        </video>
                    </div>
                    <div class="col-12">
                        <input class="form-control" placeholder="Write here...">
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="int_que_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="c_course_ModalLabel">Add Interactive Questions</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center my-4">
                    <div class="col-12 col-md-12 mb-5 text-center">
                        <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg') }}"
                            width="100%" height="" controls style="max-width: 300px;">
                            <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4') }}" type="">
                            <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg') }}" type="">
                        </video>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="text-center">
                            <a id="add_question" class="btn default-btn"> Add New Question </a>
                        </div>

                        <div class="add-course-section  border-bottom py-3" style="display: none">
                            <div class="form-group">
                                <label>Enter Question </label>
                                <input class="form-control" type="text" placeholder="Write here..."
                                    name="">
                            </div>

                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Select Display Time</label>
                                        <input class="form-control" type="time" placeholder="Write here..."
                                            name="">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Add Option</label> <br>
                                        <a id="add-option" href="#" class="btn default-btn">Add Option </a>
                                    </div>
                                </div>

                                <div id="option_list" class="row option-list">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="" class="btn default-btn">Add Question </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Q-1. What is first question ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="s_time">Display Time</label>
                                                    <input id="e_time" class="form-control" type="text"
                                                        value="12:01" name="ookk" disabled="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group cust-label">
                                            <input id="first" type="radio" name="ookk">
                                            <label for="first">Here is my first option</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Q-2. What is second question ?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="s_time">Display Time</label>
                                                    <input id="e_time" class="form-control" type="text"
                                                        value="10:10" name="ookk" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group cust-label">
                                            <input id="first" type="radio" name="ookk">
                                            <label for="first">Here is my first option</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Q-3. What is third question ?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="s_time">Display Time</label>
                                                    <input id="e_time" class="form-control" type="text"
                                                        value="09:10" name="ookk" disabled="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group cust-label">
                                            <input id="first" type="radio" name="ookk">
                                            <label for="first">Here is my first option</label>
                                        </div>
                                        <div class="form-group cust-label">
                                            <input id="second" type="radio" name="ookk">
                                            <label for="second">Here is my second option</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a class="active" href=""><img
                            src="{{ URL::asset('assets/images/menu-icon/icon-1.png') }}" alt="Icon"></a>
                    <a href="messages.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-2.png') }}"
                            alt="Icon"></a>
                    <a href="overview.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-3.png') }}"
                            alt="Icon"></a>
                    <a href="engagement.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-4.png') }}"
                            alt="Icon"></a>
                    <a href="traffic-conversion.html"><img
                            src="{{ URL::asset('assets/images/menu-icon/icon-5.png') }}" alt="icon"></a>
                </div>
            </div>
            <div class="page-content-wrapper py-0">

                <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
                    <a class="action author" href="{{ route('index') }}"
                        style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
                        <img src="{{ URL::asset('assets/images/apoGuru-logo.png') }}" alt="Author"
                            style="width:120px;">
                    </a>
                    <h5 class="title"> Instructor Dashboard</h5>
                    <!-- <a href="profile-home.html"><i class="icofont-home"></i> Home</a> -->
                    <a href="{{ route('instructor_profile') }}"><i class="icofont-user-alt-7"></i> My Profile &
                        Account</a>
                    <a href="{{ route('create_course') }}" class="active"><i class="icofont-ruler-compass-alt"></i>
                        Create a Course</a>
                    <a href="{{ route('course_i_have_created') }}"><i class="icofont-ruler-compass-alt"></i>Course I
                        have Created</a>

                    <a href="{{ route('wallet') }}"><i class="fas fa-sack-dollar"></i>Wallet</a>

                </div>
                <div class="main-content-wrapper in-pr-main-content-wrapper">
                    <div class="pro-header mb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none"
                                    style="font-size: 18px;"></i>
                                <h5 class="mb-0">Create Course</h5>
                                <ul class="list-inline text-center switch-toggler-list icon-switch"
                                    title="Learner Dashboard">
                                    <li>
                                        <a href="{{ route('learner_profile') }}">
                                            <label class="switch on">
                                                <span class="slider round"><img
                                                        src="{{ URL::asset('assets/images/icon-instructor-switch.png') }}"
                                                        width="40"></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-ui-user"></i></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-shopping-cart"></i></span>
                                                <div class="dropdown-body">
                                                    <a href="#">
                                                        <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-danger text-white"><i
                                                        class="icofont-book-mark"></i></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-heart-alt"></i></span>
                                                <div class="dropdown-body">
                                                    <a href="#">
                                                        <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-image"></i></span>
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
                                        <a class="all-notification" href="#">See all notifications <i
                                                class="icofont-simple-right"></i></a>
                                    </div>
                                </div>
                                <a class="action author" href="#">
                                    <img src="{{ URL::asset('assets/images/author/author-07.jpg') }}" alt="Author">
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown"
                                        style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
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
                    </div> --}}
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
    </style>
</head>
<!-- Modal -->
<div class="modal fade" id="logout_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

<div class="modal fade" id="ins_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

                            <img class="img-fluid mb-3" src="{{ asset('storage/users/' . $auth->avatar) }}"
                                style="border-radius: 20%; width:150px; height:150px;">
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
                    <a class="active" href=""><img src="{{ asset('assets/images/menu-icon/icon-1.png') }}"
                            alt="Icon"></a>
                    <a href="messages.html"><img src="{{ asset('assets/images/menu-icon/icon-2.png') }}"
                            alt="Icon"></a>
                    <a href="overview.html"><img src="{{ asset('assets/images/menu-icon/icon-3.png') }}"
                            alt="Icon"></a>
                    <a href="engagement.html"><img src="{{ asset('assets/images/menu-icon/icon-4.png') }}"
                            alt="Icon"></a>
                    <a href="traffic-conversion.html"><img src="{{ asset('assets/images/menu-icon/icon-5.png') }}"
                            alt="Icon"></a>
                </div>
            </div>
            <div class="page-content-wrapper py-0">
                <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
                    <a class="action author" href="{{ route('index') }}"
                        style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
                        <img src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="Author"
                            style="width:120px;">
                    </a>
                    <h5 class="title"> Instructor Dashboard</h5>
                    <!-- <a href="profile-home.html" class=""><i class="icofont-home"></i> Home</a> -->
                    <a href="{{ route('instructor_profile') }}" class="active"><i class="icofont-user-alt-7"></i> My
                        Profile & Account</a>
                    <a href="{{ route('create_course') }}"><i class="icofont-ruler-compass-alt"></i> Create a
                        Course</a>
                    <a href="{{ route('course_i_have_created') }}"><i class="icofont-ruler-compass-alt"></i>Course I
                        have Created</a>
                    <a href="{{ route('wallet') }}"><i class="fas fa-sack-dollar"></i>Wallet</a>
                </div>
                <div class="main-content-wrapper in-pr-main-content-wrapper">
                    <div class="pro-header mb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none"
                                    style="font-size: 18px;"></i>
                                <h5 class="mb-0">Home</h5>
                                <ul class="list-inline text-center switch-toggler-list icon-switch"
                                    title="Learner Dashboard">
                                    <li>
                                        <a href="{{ route('learner_profile') }}">
                                            <label class="switch on">
                                                <span class="slider round"><img
                                                        src="{{ asset('assets/images/icon-instructor-switch.png') }}"
                                                        width="40"></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-ui-user"></i></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-shopping-cart"></i></span>
                                                <div class="dropdown-body">
                                                    <a href="#">
                                                        <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-danger text-white"><i
                                                        class="icofont-book-mark"></i></span>
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
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-heart-alt"></i></span>
                                                <div class="dropdown-body">
                                                    <a href="#">
                                                        <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                    </a>
                                                </div>
                                                <span class="notify-time">3:20 am</span>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-image"></i></span>
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
                                        <a class="all-notification" href="#">See all notifications <i
                                                class="icofont-simple-right"></i></a>
                                    </div>
                                </div>
                                <a class="action author" href="#">
                                    <img src="{{ asset('assets/images/author/author-07.jpg') }}" alt="Author">
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown"
                                        style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
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
                <img class="shape-1 animation-down" src="{{ URL::asset('assets/images/shape/shape-21.png') }}"
                    alt="Shape">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ URL::asset('assets/images/apoGuru-logo.png') }}" alt="Logo"
                                            width="140"></a>
                                </div>
                                <div class="widget-address">
                                    <h4 class="footer-widget-title">Caribbean Ct</h4>
                                    <p>Haymarket, Virginia (VA).</p>
                                </div>
                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a
                                                href="mailto:address@gmail.com">address@gmail.com</a> </p>
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
                <img class="shape-2 animation-left" src="{{ URL::asset('assets/images/shape/shape-22.png') }}"
                    alt="Shape">
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
    <script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/professional-js/plugins.min.js') }}"></script>

    <script src="{{ asset('assets/js/professional-js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.world.js') }}"></script> --}}
    <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/professional-js/student-map.js') }}"></script> --}}
    <script src="{{ URL::asset('admin_theme/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('admin_theme/plugins/ckfinder/ckfinder.js') }}"></script>
    <script src="{{ asset('custom-notification/toastr.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <script type="">
    
    $(".switch.on").click(function(){
      $(this).removeClass("on");
      $(this).addClass("off");
      $(".switch img").attr("src" , "{{ URL::asset('assets/images/icon-learner-switch.png')}}");
    });

    $(".cust-label").click(function(){
      $(".cust-label").removeClass("active");
      $(this).addClass("active");
    });

    $("#add_question").click(function(){
      $(".add-course-section").slideToggle("slow");
    });

    $("#add-option").click(function () {
       $("#option_list").append('<div class="col-12 col-md-6 option"><div class="form-group"><label>Option A</label><input class="form-control" type="text" placeholder="Write here..." name=""></div></div>');
    });
  </script>
    <script>
        $(document).ready(function() {
            $('.choose_image').on('click', function() {
                $('#avtar').click();
            });

            // Handle "Add New" button click
            $('#addNewBtn').on('click', function() {
                cloneFields();
                updateDeleteButtonsVisibility();
            });

            // Handle "Delete" button click (using event delegation to handle dynamically added elements)
            $(document).on('click', '.delete-btn', function() {
                if (!$('.field').length) {
                    return;
                }

                $(this).closest('.field').remove();
                updateDeleteButtonsVisibility();
            });

            // Clone the fields and add them to the container
            function cloneFields() {
                var clonedFields = $('.field:first').clone();
                clonedFields.find('input').val(''); // Clear input values if needed
                $('.fields-container').append(clonedFields);
            }

            // Update the visibility of "Delete" buttons
            function updateDeleteButtonsVisibility() {
                var deleteButtons = $('.delete-btn');
                if (deleteButtons.length === 1) {
                    deleteButtons.hide();
                } else {
                    deleteButtons.show();
                }
            }

            $('#socialMediaSelect').on('change', function() {
                var selectedPlatforms = $(this).val();
                if (selectedPlatforms) {
                    var newInput = '';

                    // Check if the input box for the platform already exists
                    if (selectedPlatforms === 'Facebook') {
                        if ($('#additionalInputContainer input[name="facebook"]').length === 0) {
                            $('#additionalInputContainer').append('<div class="form-group">' +
                                '<input type="text" class="form-control" name="facebook" placeholder="Enter your Facebook profile link">' +
                                '</div>');
                        }
                    } else if (selectedPlatforms === 'Instagram') {
                        if ($('#additionalInputContainer input[name="instagram"]').length === 0) {
                            $('#additionalInputContainer').append('<div class="form-group">' +
                                '<input type="text" class="form-control" name="instagram" placeholder="Enter your Instagram profile link">' +
                                '</div>');
                        }
                    } else if (selectedPlatforms === 'Youtube') {
                        if ($('#additionalInputContainer input[name="youtube"]').length === 0) {
                            $('#additionalInputContainer').append('<div class="form-group">' +
                                '<input type="text" class="form-control" name="youtube" placeholder="Enter your Youtube profile link">' +
                                '</div>');
                        }
                    } else if (selectedPlatforms === 'LinkedIn') {
                        if ($('#additionalInputContainer input[name="linkedin"]').length === 0) {
                            $('#additionalInputContainer').append('<div class="form-group">' +
                                '<input type="text" class="form-control" name="linkedin" placeholder="Enter your LinkedIn profile link">' +
                                '</div>');
                        }
                    } else if (selectedPlatforms === 'Twitter') {
                        if ($('#additionalInputContainer input[name="twitter"]').length === 0) {
                            $('#additionalInputContainer').append('<div class="form-group">' +
                                '<input type="text" class="form-control" name="twitter" placeholder="Enter your Twitter profile link">' +
                                '</div>');
                        }
                    }
                }
            });

        });

        function deleteDocument(id) {
            $.ajax({
                url: "{{ route('profile-delete-document') }}",
                type: "POST",
                data: {
                    id,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(res) {
                    console.log(res);
                }
            })
        }
        $(document).ready(function() {
            $('#course-type-information').on('change', function() {
                $.ajax({
                    url: "{{ route('get-parent-subcategroy') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": this.value
                    },
                    success: function(res) {
                        if (res.status === 200) {
                            var selectElement = $('#parent-sub-category-information');
                            let htmlParentSubCategory =
                                '<option value="">Select Parent Subcategory</option>';
                            for (let index = 0; index < res.data.length; index++) {
                                let data = res.data[index];
                                htmlParentSubCategory +=
                                    `<option value="${data.id}">${data.name}</option>`;
                            }
                            // Clear the existing options before appending new ones
                            selectElement.find('option').remove();
                            // Append the new options
                            selectElement.append(htmlParentSubCategory);
                            // Update the "nice-select" plugin after modifying options
                            selectElement.niceSelect('update');
                        }
                    }
                });
            });
            $('#parent-sub-category-information').on('change', function() {
                $.ajax({
                    url: "{{ route('get-school-parent') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        main_category_id: $('#course-type-information').val(),
                        parent_sub_category_id: this.value
                    },
                    success: function(res) {
                        if (res.status === 200) {
                            var selectElement = $('#child-subcategory-information');
                            let htmlParentSubCategory =
                                '<option value="">Select Parent Subcategory</option>';
                            for (let index = 0; index < res.data.length; index++) {
                                let data = res.data[index];
                                htmlParentSubCategory +=
                                    `<option value="${data.id}">${data.name}</option>`;
                            }
                            // Clear the existing options before appending new ones
                            selectElement.find('option').remove();
                            // Append the new options
                            selectElement.append(htmlParentSubCategory);
                            // Update the "nice-select" plugin after modifying options
                            selectElement.niceSelect('update');
                        }
                    }
                })
            });
            var description = CKEDITOR.replace('desc');
            CKFinder.setupCKEditor(description);
            CKEDITOR.add

            $('#creat_course').on('click', function() {
                let courseType = $('#course-type-information').val();
                let parentSubCategory = $('#parent-sub-category-information').val();
                let childSubCategroy = $('#child-subcategory-information').val();
                let courseName = $('#course-name-information').val()
                let actualSellPriceType = $('#actual-sell-price').val();
                let actualSellCurrent = $('#usd-price-information').val();
                let sellPriceTypeOption = $('#sell-price-type-option').val();
                let sellPriceOption = $('#sell-price-option').val();
                let editor = CKEDITOR.instances.desc;
                let user_id = $('#user_id').val()
                $('#creat_course').prop("disabled", true);
                $.ajax({
                    url: "{{ route('save-learnere-course') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        courseType: courseType,
                        parentSubCategory: parentSubCategory,
                        childSubCategroy: childSubCategroy,
                        courseName: courseName,
                        actualSellPriceType: actualSellPriceType,
                        actualSellCurrent: actualSellCurrent,
                        sellPriceTypeOption: sellPriceTypeOption,
                        sellPriceOption: sellPriceOption,
                        desc: editor.getData(),
                        user_id: user_id
                    },
                    success: function(res) {
                        if(res.status === 200){
                            $('#creat_course').prop("disabled", false);
                            toastr.success(res.message);
                            CKEDITOR.instances.desc.setData('');
                            $('#course-information-form')[0].reset();
                            $('select').niceSelect('destroy');
                            $('select').niceSelect();
                        }
                    },error:function(err){
                        $('#creat_course').prop("disabled", false);
                        let error = err.responseJSON.errors;
                        if(error.courseType){
                            $('#course-type-error').text(error.courseType[0])
                        }
                        if(error.parentSubCategory){
                            $('#parent-sub-category-information-error').text(error.parentSubCategory[0])
                        }
                        if(error.childSubCategroy){
                            $('#child-subcategory-information-error').text(error.childSubCategroy[0])
                        }
                        if(error.courseName){
                            $('#course-name-information-error').text(error.courseName[0])
                        }
                        if(error.actualSellPriceType){
                            $('#actual-sell-price-error').text(error.actualSellPriceType[0])
                        }                       
                        //console.log('err',err.responseJSON.errors.main_category_id[0]);
                    }
                })
            });

            $('#add-principle-topic').on('click', function() {
                let principleCourseType = $('#principle-course-type').val()
                let principleTopic = $('#principle_topic').val()
                let user_id = $('#principl-user_id').val();
                $.ajax({
                    url: "{{ route('save-prinicple-topic') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        principleCourseType: principleCourseType,
                        principleTopic: principleTopic,
                        user_id: user_id
                    },
                    success: function(res) {
                        toastr.success(res.message);
                        $('#principle-form')[0].reset();
                        $('select').niceSelect('destroy');
                        $('select').niceSelect();
                    }
                })
            })

            $("#sortable-list").sortable({
                update: function(event, ui) {
                    // Get the order of list items after reordering
                    var order = $(this).sortable('toArray', {
                        attribute: 'data-id'
                    });

                    // Send an AJAX request to update the positions in the database
                    $.ajax({
                        url: "{{ route('principle-position-update') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            order: order
                        },
                        success: function(response) {
                            toastr.success(response.message);
                        }
                    });
                }
            });

            $('#principle-course').on('change', function() {
                $.ajax({
                    url: "{{ route('get-principle-topic') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        course_id: this.value
                    },
                    success: function(res) {
                        let html = '';
                        if (res.status === 200) {
                            for (let index = 0; index < res.data.length; index++) {
                                html +=
                                    `<li class="list-group-item draggable-item" draggable="true" data-id="${ res.data[index].id }">`
                                html +=
                                    `<span class="reposition-indicator">&#9679;&#9679;&#9679;</span>`
                                html += `<span class="item-name">${res.data[index].name}</span>`
                                html += `</li>`
                            }
                            $('#sortable-list').html(html)
                        }
                    }
                })
            });
            $('#course-type-video').on('change', function() {
                $.ajax({
                    url: "{{ route('get-principle-topic') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        course_id: this.value
                    },
                    success: function(res) {
                        let html = '';
                        if (res.status === 200) {
                            var selectElement = $('#topic-type-video');
                            let htmlParentSubCategory =
                                '<option value="">Select Topic</option>';
                            for (let index = 0; index < res.data.length; index++) {
                                let data = res.data[index];
                                htmlParentSubCategory +=
                                    `<option value="${data.id}">${data.name}</option>`;
                            }
                            // Clear the existing options before appending new ones
                            selectElement.find('option').remove();
                            // Append the new options
                            selectElement.append(htmlParentSubCategory);
                            // Update the "nice-select" plugin after modifying options
                            selectElement.niceSelect('update');
                        }
                    }
                })
            });

            $('#add-new-video').on('click', function() {
                cloneVideoFields();
                updateDeleteVideoButtonsVisibility();
            });

            function cloneVideoFields() {
                var clonedFields = $('.video-repeating-section:first').clone();
                clonedFields.find('input').val(''); // Clear input values if needed
                $('.fields-container-video').append(clonedFields);
            }

            function updateDeleteVideoButtonsVisibility() {
                var deleteButtons = $('.delete-btn-video');
                if (deleteButtons.length === 1) {
                    deleteButtons.hide();
                } else {
                    deleteButtons.show();
                }
            }
            updateDeleteVideoButtonsVisibility()
            $(document).on('click', '.delete-btn-video', function() {
                if ($('.video-repeating-section').length === 1) {
                    return;
                }
                //{{-- $(this).parent('.video-repeating-section').remove(); --}}
                $(this).closest('.video-repeating-section').remove();
                updateDeleteVideoButtonsVisibility();
            });
            $('#video-section-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            $('#video-section-form')[0].reset();
                            $('select').niceSelect('destroy');
                            $('select').niceSelect();
                        } else {
                            toastr.error('File upload failed: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error("Please upload valid Video format.");
                        //alert('An error occurred while uploading files.');
                    },
                });
            });

            $('#topic-video').on('change', function() {
                $.ajax({
                    url: "{{ route('get-principle-topic') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        course_id: this.value
                    },
                    success: function(res) {
                        let html = '';
                        if (res.status === 200) {
                            var selectElement = $('#topic-video-topic');
                            let htmlParentSubCategory =
                                '<option value="">Select Topic</option>';
                            for (let index = 0; index < res.data.length; index++) {
                                let data = res.data[index];
                                htmlParentSubCategory +=
                                    `<option value="${data.id}">${data.name}</option>`;
                            }
                            // Clear the existing options before appending new ones
                            selectElement.find('option').remove();
                            // Append the new options
                            selectElement.append(htmlParentSubCategory);
                            // Update the "nice-select" plugin after modifying options
                            selectElement.niceSelect('update');
                        }
                    }
                })
            });

            $('#topic-video-topic').on('change', function() {
                $('#video-id').val(this.value)
                $.ajax({
                    url: "{{ route('get-lecture-video') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        principal_topic_id: this.value
                    },
                    success: function(res) {
                        if (res.status === 200) {
                            $('#sortable-list-video').html(res.html)
                        }
                    }
                })
            });

            $("#sortable-list-video").sortable({
                update: function(event, ui) {
                    // Get the order of list items after reordering
                    var order = $(this).sortable('toArray', {
                        attribute: 'data-id'
                    });

                    // Send an AJAX request to update the positions in the database
                    $.ajax({
                        url: "{{ route('video-position-update') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            order: order
                        },
                        success: function(response) {
                            toastr.success(response.message);
                        }
                    });
                }
            });

        });

        function deleteVideo(id) {
            $.ajax({
                url: "{{ route('video-delete') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(res) {
                    if (res.status === 200) {
                        toastr.success(res.message);
                        $.ajax({
                            url: "{{ route('get-lecture-video') }}",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                principal_topic_id: $('#video-id').val()
                            },
                            success: function(res) {
                                if (res.status === 200) {
                                    $('#sortable-list-video').html(res.html)
                                }
                            }
                        })
                    }
                }
            })
        }

        var resultFrom;
        var resultTo;
        var searchValue;

        $("#actual-sell-price").keyup(function() {
            const api = "https://api.exchangerate-api.com/v4/latest/USD";
            resultFrom = geoplugin_currencyCode();
            window.id = resultFrom;
            console.log(window.id);
            resultTo = "USD";
            searchValue = $('#actual_price').val();
            fetch(`${api}`).then(currency => {
                return currency.json();
            }).then(displayResults);
        });

        $("#sell-price-type-option").keyup(function() {
            const api = "https://api.exchangerate-api.com/v4/latest/USD";
            resultFrom = geoplugin_currencyCode();
            window.id = resultFrom;
            console.log(window.id);
            resultTo = "USD";
            searchValue = $('#actual_price').val();
            fetch(`${api}`).then(currency => {
                return currency.json();
            }).then(displayResults);
        });

        function displayResults(currency) {
            let fromRate = currency.rates[resultFrom];
            let toRate = currency.rates[resultTo];
            // console.log(((toRate / fromRate) * searchValue).toFixed(2));
            $('#actual_price_in_usd').val(((toRate / fromRate) * searchValue).toFixed(2));
        }
    </script>
</body>

</html>
