<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apoGuru - Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css') }}">
    <style>
        body.profile-body {
            background-color: #b7dfabbd;
            background-image: url('{{ URL::asset('assets/images/bg-2.png') }}');
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
                                    <h5>{{ $auth->country_code }}{{ " " }}{{ $auth->phone }}</h5>
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

                    <div class="profile-img-section">
                        <form action="{{ route('profile-image-update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $auth->id }}" />
                            <input type="hidden" name="profile_type" value="instructor_profile" />
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-wrap">
                                    <img class="img-fluid me-3" src="{{ asset('storage/users/' . $auth->avatar) }}"
                                        style="border-radius: 20%; width:150px; height:150px;">
                                    <div>
                                        <h4 class="mb-3">{{ $auth->name }}{{ " " }}{{ $auth->last_name }}</h4>
                                        <input type="file" name="avtar" id="avtar" style="display:none;">
                                        <input type="hidden" name="old_avtar" value="{{ $auth->avatar }}"
                                            style="display:none;">
                                        <button type="button" class="btn btn-light btn-sm choose_image"
                                            style="line-height: 20px;">Change Image</button>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-outline-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container-fluid main__div">
                        <div class="admin-top-bar students-top">
                            <div class="courses-select pt-0">
                                <h4 class="title mt-0 mb-3">Personal Information</h4>
                            </div>

                        </div>

                        <div>
                            <form class="form profile-form" action="{{ route('profile-update') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $auth->id }}" />
                                <input type="hidden" name="personal_informations" value="personal_informations" />
                                <input type="hidden" name="profile_type" value="instructor_profile" />
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input class="form-control" type="text" name="fname"
                                                value="{{ $auth->name }}" id="fname"
                                                placeholder="Write here...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input class="form-control" type="text" name="lname"
                                                value="{{ $auth->last_name }}" id="lname"
                                                placeholder="Write here...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="text" value="{{ $auth->email }}"
                                                name="email" id="email" placeholder="Write here...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <div class="input-field d-flex align-items-center">
                                                <select class="form-control" style="max-width: 120px;"
                                                    name="phone_code">
                                                    <option>Select Code</option>
                                                    @foreach ($codes as $key => $country)
                                                        <option value="{{ $country['dial_code'] }}"
                                                            @if ($country['dial_code'] == $auth->country_code) selected @endif>
                                                            <span class="country-flag">{{ $country['flag'] }}</span>
                                                            {{ ' ' }} {{ $country['dial_code'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input class="form-control" type="text" name="phone"
                                                    value="{{ $auth->phone }}" id="phone"
                                                    placeholder="Write here...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control" id="country" name="country">
                                                <option>Select Country</option>
                                                @foreach ($codes as $key => $country)
                                                    <option value="{{ $country['name'] }}"
                                                        @if ($country['name'] == $auth->country) selected @endif>
                                                        {{ $country['flag'] }} {{ ' ' }}
                                                        {{ $country['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <input class="w-100 btn btn-success submit-btn" type="submit"
                                                value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ins-info">
                        <h4>Instructor Profile</h4>
                        <form class="profile-form" action="{{ route('profile-update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $auth->id }}" />
                            <input type="hidden" name="personal_informations" value="instructor_profile" />
                            <input type="hidden" name="profile_type" value="instructor_profile" />

                            <div class="form-group">
                                <label for="i_about">About me</label>
                                <textarea id="i_about" class="form-control" name="about_me" placeholder="Write here...">{{ $auth->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="i_profession">Profession / Workplace</label>
                                <textarea id="i_profession" class="form-control" name="profession_work" placeholder="Write here...">{{ $auth->workplace }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="i_teaching">Teaching / Mentorship Experience</label>
                                <textarea id="i_teaching" class="form-control" name="teaching_mentorship" placeholder="Write here...">{{ $auth->teaching_experience }}</textarea>
                            </div>

                            <div class="form-group pb-4">
                                <label for="i-qua">Qualifications</label>
                                <textarea id="i-qua" class="form-control" name="qualifications" placeholder="Write here...">{{ $auth->qualification }}</textarea>
                            </div>

                            <i class="">Whould you like to provide documentary evidence to make your verification
                                process easy and straightforward?</i>
                            <div class="fields-container">
                                @foreach ($auth->getdocument as $key => $document)
                                    <div class="row align-items-end field">
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="i-doc[]">Document Name</label>
                                                <input type="text" name="document_name[]" class="form-control"
                                                    placeholder="Write here..."
                                                    value="{{ $document->document_name }}">
                                                <input type="hidden" name="document_id[]"
                                                    value="{{ $document->id }}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                                            <div class="form-group">
                                                <label for="i-sup[]">Supporting Document</label><br>
                                                <input type="file" name="supporting_document[]" class="">
                                                <input type="hidden" name="old_document[]"
                                                    value="{{ $document->user_document }}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-2 col-lg-3">
                                            <!-- Add a condition to prevent deletion of the default fields -->
                                            <button type="button" class="btn btn-danger delete-btn"
                                                @if ($key == 0) style="display: none;" @endif
                                                @if ($key != 0) onClick="deleteDocument({{ $document->id }})" @endif>Delete</button>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <button type="button" id="addNewBtn" class="btn btn-primary">Add New</button>

                            <div class="form-group">
                                <label>Social Media Profiles</label>
                                <select class="form-control" id="socialMediaSelect">
                                    <option>Select Platform</option>
                                    <option>Facebook</option>
                                    <option>Instagram</option>
                                    <option>Youtube</option>
                                    <option>LinkedIn</option>
                                    <option>Twitter</option>
                                </select>
                            </div>

                            <div id="additionalInputContainer" class="mt-6">
                                <!-- New input boxes will be added here -->
                                @if ($auth->Facebook || count($errors->all()) > 0)
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="facebook"
                                            placeholder="Enter your Facebook profile link"
                                            value="{{ $auth->Facebook }}">
                                        @error('facebook')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                @if ($auth->Instagram || count($errors->all()) > 0)
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="instagram"
                                            placeholder="Enter your Instagram profile link"
                                            value="{{ $auth->Instagram }}">
                                        @error('instagram')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                @if ($auth->YouTube || count($errors->all()) > 0)
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="youtube"
                                            placeholder="Enter your Youtube profile link"
                                            value="{{ $auth->YouTube }}">
                                        @error('youtube')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                @if ($auth->LinkedIn || count($errors->all()) > 0)
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="linkedin"
                                            placeholder="Enter your LinkedIn profile link"
                                            value="{{ $auth->LinkedIn }}">
                                        @error('linkedin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                @if ($auth->Twitter || count($errors->all()) > 0)
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="twitter"
                                            placeholder="Enter your Twitter profile link"
                                            value="{{ $auth->Twitter }}">
                                        @error('twitter')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                            </div>

                            <div class="row pt-3">
                                <div class="col-6 col-sm-3 col-md-3 col-lg-4">
                                    <div class="form-group">
                                        <a class="btn default-btn d-block text-center" data-bs-toggle="modal"
                                            data-bs-target="#ins_Modal">Preview</a>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn default-btn d-block text-center">Save</button>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-5 col-md-5 col-lg-4">
                                    <div class="form-group">
                                        <a class="btn default-btn d-block text-center">Get Me Verified</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="change-password-section">
                        <h4 class="title mb-3">Change Password</h4>
                        <form class="form profile-form" action="{{ route('profile-change-password') }}"
                            method="post">
                            @csrf
                            <div class="row">
                                
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="old-pass">Old Password</label>
                                        <input type="text" class="form-control" name="old_password"
                                            placeholder="Write here..." id="old-pass">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="new-pass">New Password</label>
                                        <input type="password" class="form-control" name="new_password"
                                            placeholder="Write here..." id="new-pass">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="conf-pass">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Write here..."
                                            name="new_password_confirmation" id="conf-pass">
                                    </div>
                                    @error('old_pass', 'user_new')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="w-100 btn btn-success submit-btn"
                                            value="Update Password">
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
                <img class="shape-1 animation-down" src="{{ asset('assets/images/shape/shape-21.png') }}"
                    alt="Shape">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/images/apoGuru-logo.png') }}" alt="Logo"
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
                <img class="shape-2 animation-left" src="{{ asset('assets/images/shape/shape-22.png') }}"
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
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.world.js')}}"></script> --}}
    <script src="{{ asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/professional-js/student-map.js')}}"></script> --}}

    <script type="">
    $(".switch.on").click(function(){
      $(this).removeClass("on");
      $(this).addClass("off");
      $(".switch img").attr("src" , "{{ asset('assets/images/icon-learner-switch.png')}}");
    });
    $(document).ready(function(){
      $('.choose_image').on('click',function(){
        $('#avtar').click();
      });

         // Handle "Add New" button click
        $('#addNewBtn').on('click', function () {
            cloneFields();
            updateDeleteButtonsVisibility();
        });

        // Handle "Delete" button click (using event delegation to handle dynamically added elements)
        $(document).on('click', '.delete-btn', function () {
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

        $('#socialMediaSelect').on('change', function () {
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
    function deleteDocument(id){
      console.log("id -->>-->> : ",id);
      $.ajax({
        url:"{{ route('profile-delete-document') }}",
        type:"POST",
        data:{id,"_token": "{{ csrf_token() }}",},
        success:function(res){
          console.log(res);
        }
      })
    }
  </script>

</body>

</html>
