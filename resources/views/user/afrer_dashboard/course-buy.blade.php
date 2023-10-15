@php
$rating = (int)$averageRating; // Replace with the actual rating value
@endphp
@extends('user.comman.header')
@section('title') Course @endsection
@section('content')
<style>
    .course__form-rating ul li a {
        font-size: 14px;
        color: #8987858a;
    }

    .icon_star:before {
        content: "\e033";
    }

    .course__form-rating ul li a.selected {
        color: #ff9415;
    }

    figure img {
        width: 100%;
        max-width: 500px;
        max-height: 500px;
    }

    p img {
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 500px;
    }

</style>

<div class="modal fade" id="course_vdo_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog course-vdo-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="course_vdo_ModalLabel">Video </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body position-relative">
            @php
              $videoLink = "";
              foreach($singlecourse->getPrincipleTopic as $principleTopic){
                $firstVideo = $principleTopic->videos->first();
                $data = json_decode($firstVideo, true);
                if (isset($data['video'])) {
                    $videoLink = $data['video'];
                }
              }
              //echo $videoLink;
              
              @endphp
                <video class="" poster="{{ asset('storage/course-images/'.$singlecourse->image )}}" width="100%" height="" controls>
                    <source src="{{ asset('storage/videos/'.$videoLink) }}" type="">
                    <source src="{{ asset('storage/videos/'.$videoLink) }}" type="">
                </video>
              
                <div class="question-section">
                    <div class="form-group mb-4">
                        <p>Which is option A ?</p>
                    </div>
                    <div class="form-group cust-label cust-option-label mb-3">
                        <input id="first" type="radio" name="ookk">
                        <label for="first">Here is my A option</label>
                    </div>

                    <div class="form-group cust-label cust-option-label mb-3">
                        <input id="first" type="radio" name="ookk">
                        <label for="first">Here is my B option</label>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="float-section w-100">
    <div class="container">
        <div class="pay-float-buttons float-buttons">
            <div class="d-flex align-items-center justify-content-start flex-wrap">
                @if(isset(Auth::guard('user_new')->user()->id))
                <a href="#" class="e-btn e-btn-7 text-center me-3 mb-20 pay-btn" data-bs-toggle="modal" data-bs-target="#flutter-wave-modal">
                    <i class="fas fa-sack-dollar me-2"></i> Pay
                </a>
                <form method='post' action='{{ route('now-payment') }}'>
                    @csrf
                    <input type="hidden" name="price" value='{{ $singlecourse->actual_price }}'>
                    <input type="hidden" name="course_id" value='{{ $singlecourse->id }}'>
                    <input type="hidden" name="user_id" value="@if(isset(Auth::guard('user_new')->user()->id)){{ Auth::guard('user_new')->user()->id }} @endif">
                    <button type='submit' class="e-btn e-btn-7 text-center me-3 mb-20" style="padding: 1.6rem; display: flex; justify-content: center; align-items: center;">
                        <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Crypto</title>
                            <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                        </svg> Crypto Pay
                    </button>
                </form>
                <a href="" class="e-btn e-btn-7 text-center me-3 mb-20"><i class="fas fa-sack-dollar me-2"></i> Pay For Me</a>
                <a href="javascript:void(0);" class="e-btn e-btn-7 text-center mb-20" onClick="addToWishList({{ Auth::guard('user_new')->user()->id }},{{ $singlecourse->id }})">
                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                </a>
                @else
                <a href="{{ route('login') }}" class="e-btn e-btn-7 text-center me-3 mb-20 pay-btn"><i class="fas fa-sack-dollar me-2"></i> Pay</a>
                <a href="{{ route('login') }}" class="e-btn e-btn-7 text-center me-3 mb-20">
                    <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Crypto</title>
                        <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                    </svg> Crypto Pay
                </a>

                <a href="{{ route('login') }}" class="e-btn e-btn-7 text-center me-3 mb-20"><i class="fas fa-sack-dollar me-2"></i> Pay For Me</a>
                <a href="{{ route('login') }}" class="e-btn e-btn-7 text-center mb-20">
                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

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
                <a href="index.html">
                    <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo">
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
                            <circle class="st0" cx="9" cy="21" r="1" />
                            <circle class="st0" cx="20" cy="21" r="1" />
                            <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6" />
                        </svg>
                    </div>
                    <span class="cart-item">2</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="body-overlay"></div>

<main>

    <section class="page__title-area pt-120 pb-90">
        <div class="page__title-shape">
            <img class="page-title-shape-5 d-none d-sm-block" src="{{asset('assets/img/page-title/page-title-shape-1.png')}}" alt="">
            <img class="page-title-shape-6" src="{{asset('assets/img/page-title/page-title-shape-6.png')}}" alt="">
            <img class="page-title-shape-7" src="{{asset('assets/img/page-title/page-title-shape-4.png')}}" alt="">
        </div>
        <div class="container">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="course__wrapper">

                        <div class="course__meta-2 d-sm-flex mb-30">
                            <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                                <div class="course__teacher-thumb-3 mr-15">
                                    <img src="{{ asset('assets/img/course/teacher/teacher-1.jpg') }}" alt="">
                                </div>
                                <div class="course__teacher-info-3">
                                    <h5>Teacher</h5>
                                    <p><a href="javascript:void(0)">{{ isset($singlecourse->getAdmin) ? $singlecourse->getAdmin->name : $singlecourse->getPublisher->name }}</a></p>
                                </div>
                            </div>
                            <div class="course__update mr-80 mb-30">
                                <h5>Last Update:</h5>
                                <p>{{ $singlecourse->updated_at->format('M d, Y') }}</p>
                            </div>
                            <div class="course__rating-2 mb-30">
                                <h5>Review:</h5>
                                <div class="course__rating-inner d-flex align-items-center">
                                    <ul>
                                        <li><a href="javascript:void(0)" id="{{$rating}}" style="@if($rating >= 1) color:#ff9415 @else color:#898785 @endif"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" id="{{$rating}}" style="@if($rating >= 2) color:#ff9415 @else color:#898785 @endif"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" id="{{$rating}}" style="@if($rating >= 3) color:#ff9415 @else color:#898785 @endif"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" id="{{$rating}}" style="@if($rating >= 4) color:#ff9415 @else color:#898785 @endif"> <i class="icon_star"></i> </a></li>
                                        <li><a href="javascript:void(0)" id="{{$rating}}" style="@if($rating >= 5) color:#ff9415 @else color:#898785 @endif"> <i class="icon_star"></i> </a></li>
                                    </ul>
                                    <p>({{ $rating }})</p>
                                </div>
                            </div>
                        </div>
                        <div class="course__img w-img mb-30 position-relative">

                            <img src="{{ asset('storage/course-images/'.$singlecourse->image )}}" alt="">
                            <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                                <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                            </div>
                        </div>
                        <h2 class="title">{{ $singlecourse->title }}</h2>
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
                                        <p>{!! $singlecourse->description !!}</p>
                                        <div class="course__tag-2 mb-35 mt-35">
                                            <i class="fal fa-tag"></i>
                                            <a href="javascript:void(0)">Big data,</a>
                                            <a href="javascript:void(0)">Data analysis,</a>
                                            <a href="javascript:void(0)">Data modeling</a>
                                        </div>
                                        <div class="course__instructor mb-45">
                                            <h3>Other Instructors</h3>
                                            <div class="course__instructor-wrapper d-md-flex align-items-center">
                                                <div class="course__instructor-item d-flex align-items-center mr-70">
                                                    <div class="course__instructor-thumb mr-20">
                                                        <img src="{{asset('assets/img/course/teacher/teacher-3.jpg')}}" alt="">
                                                    </div>
                                                    <div class="course__instructor-content">
                                                        <h3>Eleanor Fant</h3>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div class="course__instructor-item d-flex align-items-center mr-70">
                                                    <div class="course__instructor-thumb mr-20">
                                                        <img src="{{asset('assets/img/course/teacher/teacher-2.jpg')}}" alt="">
                                                    </div>
                                                    <div class="course__instructor-content">
                                                        <h3>Lauren Stamps</h3>
                                                        <p>Teacher</p>
                                                    </div>
                                                </div>
                                                <div class="course__instructor-item d-flex align-items-center mr-70">
                                                    <div class="course__instructor-thumb mr-20">
                                                        <img src="{{ asset('assets/img/course/teacher/teacher-1.jpg') }}" alt="">
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
                                            @foreach($singlecourse->getPrincipleTopic as $key => $principleTopic)
                                            <div class="accordion-item mb-40">


                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="true" aria-controls="collapseOne">
                                                        {{ $principleTopic->name }}
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#course__accordion">
                                                    @foreach($principleTopic->videos as $videoKey => $video)
                                                    <div class="accordion-body">
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 24 24">
                                                                    <polygon class="st0" points="23,7 16,12 23,17 " />
                                                                    <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z" />
                                                                </svg>
                                                                <h3> <span>Lecture Title: </span> {{ $video->name }}</h3>
                                                            </div>
                                                        </div>
                                                        @foreach($video->getSupplementary as $supplementaryKey => $supplementary)
                                                        <div class="border-bottom">
                                                            <div class="row justify-content-end">
                                                                <div class="col-12 col-lg-10">
                                                                    <div class="course__curriculum-content d-sm-flex justify-content-between border-0">
                                                                        <div c/lass="course__curriculum-info">
                                                                            <svg class="document" viewBox="0 0 24 24">
                                                                                <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                                <polyline class="st0" points="14,2 14,8 20,8 " />
                                                                                <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                                                <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                                                <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                            </svg>
                                                                            <h3> <span>Supplementry Materials:</span> </h3>
                                                                        </div>
                                                                        <div class="course__curriculum-meta">
                                                                            <div class="course__curriculum-info">
                                                                                <svg class="document" viewBox="0 0 24 24">
                                                                                    <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                                                    <polyline class="st0" points="14,2 14,8 20,8 " />
                                                                                    <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                                                    <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                                                    <polyline class="st0" points="10,9 9,9 8,9 " />
                                                                                </svg>
                                                                                <span class="time">
                                                                                    <a href='{{ asset('storage/supplementary-files/'.$supplementary->document) }}' download>
                                                                                        Simplified Reading
                                                                                    </a>
                                                                                </span>
                                                                            </div>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="course__review">
                                        <h3>Reviews</h3>
                                        <div class="course__comment mb-75">
                                            <ul>
                                                @foreach ($singlecourse->getRating as $rating)
                                                <li>
                                                    <div class="course__comment-box ">
                                                        {{-- <div class="course__comment-thumb float-start">
                                  <img src="{{asset('assets/img/course/comment/course-comment-1.jpg')}}" alt="">
                                                    </div> --}}
                                                    <div class="course__comment-content">
                                                        <div class="course__comment-wrapper ml-7 fix">
                                                            <div class="course__comment-info float-start">
                                                                <h4>{{ $rating->getRatingUser->name }}</h4>
                                                                @if(isset($rating->created_at))
                                                                <span>{{ $rating->created_at->format('F d, Y') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="course__comment-rating float-start float-sm-end">
                                                                <ul>
                                                                    <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                                                    <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                                                    <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                                                    <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                                                    <li><a href="javascript:void(0)"> <i class="icon_star"></i> </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="course__comment-text ml-7">
                                                            <p>{{ $rating->comment }}</p>
                                                        </div>
                                                    </div>
                                        </div>
                                        </li>
                                        @endforeach

                                        </ul>
                                    </div>
                                    <div class="course__form">
                                        <h3>Write a Review</h3>
                                        <div class="course__form-inner">
                                            <input type="hidden" name="course_id" value="{{$singlecourse['id']}}">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div class="course__form-input">
                                                        <div class="course__form-rating">
                                                            <span>Rating : </span>
                                                            <ul>
                                                                <li><a href="javascript:void(0)" onClick="ratingFun(1)"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="javascript:void(0)" onClick="ratingFun(2)"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="javascript:void(0)" onClick="ratingFun(3)"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="javascript:void(0)" onClick="ratingFun(4)"> <i class="icon_star"></i> </a></li>
                                                                <li><a href="javascript:void(0)" onClick="ratingFun(5)"> <i class="icon_star"></i> </a></li>
                                                            </ul>
                                                        </div>
                                                        <input type="hidden" name="rating" class="rating-input">
                                                        @php
                                                        $id = 0;
                                                        if(isset(Auth::guard('user_new')->user()->id)){
                                                        $id = Auth::guard('user_new')->user()->id;
                                                        }
                                                        @endphp
                                                        <input type="hidden" name="user_id" class="user_id" value="{{ $id }}">
                                                        <input type="hidden" name="course_id" class="course_id" value={{ $singlecourse->id }}>
                                                        <textarea placeholder="Review Summary" name="comment" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-6">
                                                    <div class="course__form-btn mt-10 mb-55">
                                                        <button type="button" class="e-btn" onClick="submitReview()">Submit Review</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-success-message"></div>
                                                </div>
                                            </div>
                                            {{-- </form> --}}
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
                                                    <img src="{{asset('assets/img/course/instructor/course-instructor-1.jpg')}}" alt="">
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
                                                    <img src="{{asset('assets/img/course/instructor/course-instructor-2.jpg')}}" alt="">
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
                                                    <img src="{{asset('assets/img/course/instructor/course-instructor-3.jpg')}}" alt="">
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
                                    @if(count($singlecourse->getRecommendedCourses) > 0)
                                    <h2 class="section__title">Related <span class="yellow-bg yellow-bg-big">Course<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                                    <p>You don't have to struggle alone, you've got our assistance and help.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12">
                                @if(count($singlecourse->getRecommendedCourses) > 0)
                                <div class="course__slider swiper-container pb-60">
                                    <div class="swiper-wrapper">
                                        @foreach ($singlecourse->getRecommendedCourses as $courses)
                                        <div class="course__item course__item-3 swiper-slide white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="{{ route('course-details',['slug'=>$courses->getCourse->slug,'uid'=>$courses->getCourse->uid]) }}">
                                                    <img src="{{ asset('storage/course-images/'.$courses->getCourse->image )}}" alt="">
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
                                                <h3 class="course__title"><a href="{{ route('course-details',['slug'=>$courses->getCourse->slug,'uid'=>$courses->getCourse->uid]) }}">{{$courses->getCourse->title}}</a></h3>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="course__teacher d-flex align-items-center">
                                                        <div class="course__teacher-thumb mr-15">
                                                            <img src="{{ asset('assets/img/course/teacher/teacher-1.jpg') }}" alt="">
                                                        </div>
                                                        <h6><a href="instructor-details.html">{{ isset($singlecourse->getAdmin) ? $singlecourse->getAdmin->name : $singlecourse->getPublisher->name }}</a></h6>
                                                    </div>
                                                    <div class="extra-buttons">
                                                        <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                                        <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__status">
                                                    {{-- <span>Free</span> --}}
                                                    <span class="green actual_price_{{$courses->getCourse->id}}" data-id="{{$courses->getCourse->id}}">${{$courses->getCourse->actual_price}}</span>
                                                    <span class="old-price sellprice_{{$courses->getCourse->id}}" data-id="{{$courses->getCourse->id}}">${{$courses->getCourse->sell_price}}</span>
                                                </div>
                                                <div class="course__btn">
                                                    <a href="{{ route('course-details',['slug'=>$courses->getCourse->slug,'uid'=>$courses->getCourse->uid]) }}" class="link-btn">
                                                        Know Details
                                                        <i class="far fa-arrow-right"></i>
                                                        <i class="far fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="course__sidebar pl-70 p-relative">
                    <div class="course__shape">
                        <img class="course-dot" src="{{asset('assets/img/course/course-dot.png')}}" alt="">
                    </div>
                    <div class="course__sidebar-widget-2 white-bg mb-20">
                        <div class="course__video">
                            <div class="course__video-thumb w-img mb-25">

                                <img src="{{ asset('storage/course-images/'.$singlecourse->image )}}" alt="">
                                <div class="course__video-play">
                                    <a href="https://youtu.be/yJg-Y5byMMw" data-fancybox="" class="play-btn" data-bs-toggle="modal" data-bs-target="#course_vdo_Modal"> <i class="fas fa-play"></i> </a>
                                </div>
                            </div>
                            <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                                <div class="course__video-price">
                                    <h5>${{$singlecourse->actual_price}}</h5>
                                    <h5 class="old-price">${{ $singlecourse->sell_price }}</h5>
                                </div>
                                <div class="course__video-discount">
                                    <span>68% OFF</span>
                                </div>
                            </div>
                            <div class="course__video-content mb-35">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="course__video-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                                <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                                <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                            </svg>
                                        </div>
                                        <div class="course__video-info">
                                            <h5><span>Instructor :</span> Eleanor Fant</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="course__video-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20" />
                                                <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z" />
                                            </svg>
                                        </div>
                                        <div class="course__video-info">
                                            @php
                                            $totalVideos = 0;
                                            $totalDurationInSeconds = 0; // Initialize the total duration in seconds to 0

                                            foreach ($singlecourse->getPrincipleTopic as $key => $lecture) {
                                              $videos = $lecture->videos->count();
                                              if (!is_numeric($videos)) {
                                                continue;
                                              }
                                              foreach ($lecture->videos as $index => $video) {
                                              // Parse the duration string and add it to the total duration in seconds
                                                list($hours, $minutes, $seconds) = explode(':', $video->duration);
                                                $hours = str_pad($hours, 2, '0', STR_PAD_LEFT);
                                                $minutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
                                                $totalDurationInSeconds += $hours * 3600 + $minutes * 60 + $seconds;
                                              }
                                              $totalVideos += $videos;
                                            }

                                            // Calculate hours, minutes, and seconds from total duration in seconds
                                            $hours = floor($totalDurationInSeconds / 3600);
                                            $minutes = floor(($totalDurationInSeconds % 3600) / 60);
                                            $seconds = $totalDurationInSeconds % 60;
                                            

                                            //exit;
                                            @endphp
                                            <h5><span>Lectures :</span>{{ $totalVideos }}</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="course__video-icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                                <circle class="st0" cx="8" cy="8" r="6.7" />
                                                <polyline class="st0" points="8,4 8,8 10.7,9.3 " />
                                            </svg>
                                        </div>
                                        <div class="course__video-info">
                                            {{-- <h5><span>Duration :</span>{{ $formattedTotalDuration = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds) }}</h5> --}}
                                            <h5><span>Duration :</span>{{ "$hours hr $minutes mins $seconds sec" }}</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="course__video-icon">
                                            <svg>
                                                <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14" />
                                                <circle class="st0" cx="8" cy="4.7" r="2.7" />
                                            </svg>
                                        </div>
                                        <div class="course__video-info">
                                            <h5><span>Enrolled :</span>20 students</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="course__video-icon">
                                            <svg>
                                                <circle class="st0" cx="8" cy="8" r="6.7" />
                                                <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8" />
                                                <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z" />
                                            </svg>
                                        </div>
                                        <div class="course__video-info">
                                            <h5><span>Language :</span>English</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @if(isset(Auth::guard('user_new')->user()->id))
                            <div class="course__enroll-btn">
                                <button type='button' id="flutter-user-form" class="e-btn e-btn-7 w-100" data-bs-toggle="modal" data-bs-target="#flutter-wave-modal">
                                    <i class="fas fa-sack-dollar me-2"></i>
                                    Pay
                                </button>
                            </div>
                            <div class="course__enroll-btn mt-20">
                                <form method='post' action='{{ route('now-payment') }}'>
                                    @csrf
                                    <input type="hidden" name="price" value='{{ $singlecourse->actual_price }}'>
                                    <input type="hidden" name="course_id" value='{{ $singlecourse->id }}'>
                                    <input type="hidden" name="user_id" value="@if(isset(Auth::guard('user_new')->user()->id)){{ Auth::guard('user_new')->user()->id }} @endif">
                                    <button type='submit' class="e-btn e-btn-7 w-100">
                                        <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Crypto</title>
                                            <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                                        </svg>
                                        Crypto Pay
                                    </button>
                                </form>

                            </div>
                            @else
                            <div class="course__enroll-btn">
                                <a href="{{ route('login') }}" id="flutter-user-form" class="e-btn e-btn-7 w-100">
                                    <i class="fas fa-sack-dollar me-2"></i>
                                    Pay
                                </a>
                            </div>
                            <div class="course__enroll-btn mt-20">
                                <a href="{{ route('login') }}" class="e-btn e-btn-7 w-100">
                                    <svg class="me-2" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Crypto</title>
                                        <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                                    </svg>
                                    Crypto Pay
                                </a>
                            </div>
                            @endif

                            <div class="course__enroll-btn mt-20">
                                <a href="{{ route('signup') }}" class="e-btn e-btn-7 w-100"><i class="fas fa-sack-dollar me-2"></i> Pay for me</a>
                            </div>
                        </div>
                    </div>
                    <div class="course__sidebar-widget-2 white-bg mb-20">
                        <div class="course__sidebar-course">
                            <h3 class="course__sidebar-title">Surprise Discount</h3>
                            <ul>
                                <li>
                                    <a href="#" class="e-btn e-btn-7 text-start h-auto p-2">
                                        <div class="course__sm d-flex align-items-center">
                                            <div class="course__sm-thumb ml-10 mr-30">
                                                <i class="far fa-paper-plane" style="font-size: 17px;"></i>
                                            </div>
                                            <div class="course__sm-content">

                                                <h6 class="mb-0 text-white">Share for a surprise discount</h6>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>


{{-- Flutter Wave Modal Start Here --}}
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="flutter-wave-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PAY WITH FLUTTER WAVE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('pay-with-flutterwave') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="price" value='{{ $singlecourse->actual_price }}'>
                    <input type="hidden" name="course_id" value='{{ $singlecourse->id }}'>
                    <input type="hidden" name="user_id" value="@if(isset(Auth::guard('user_new')->user()->id)){{ Auth::guard('user_new')->user()->id }} @endif">
                    <input type="email" name="email" class="form-control mt-2" placeholder="Email">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" name="name" class="form-control mt-2" placeholder="Name">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="number" name="phone" class="form-control mt-2" placeholder="Phone Number">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Flutter Wave Modal End Here --}}
@endsection
@section('script')
<script src="{{ asset('assets/js/school-js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/vendor/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/jquery.meanmenu.js')}}"></script>
<script src="{{ asset('assets/js/school-js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/parallax.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/backToTop.js')}}"></script>
<script src="{{ asset('assets/js/school-js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/school-js/ajax-form.js')}}"></script>
{{-- <script src="{{ asset('assets/js/school-js/wow.min.js')}}"></script> --}}
<script src="{{ asset('assets/js/school-js/imagesloaded.pkgd.min.js')}}"></script>


@if ($errors->any())
<script>
    $(document).ready(function() {
        $('#flutter-wave-modal').modal('show');
    });

</script>
@endif
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

<script language="JavaScript" src="https://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script>
    var resultFrom;
    var resultTo;
    var simbol
    var searchValue;


    $(document).ready(function() {
                const api = "https://api.exchangerate-api.com/v4/latest/USD";
                searchValue = <?php echo json_encode($singlecourse['actual_price']);?>;
          searchValue_sell = <?php echo json_encode($singlecourse['sell_price']);?>;
          resultFrom = <?php echo json_encode($singlecourse['currency']);?>;
          resultTo = geoplugin_currencyCode();
          simbol = getCurrencySymbol('en', resultTo);
          fetch(`${api}`).then(currency =>{
            return currency.json();
          }).then(displayResults); 
      });

      function displayResults(currency) {
        let fromRate = currency.rates[resultFrom];
        let toRate = currency.rates[resultTo];
        console.log("toRate",toRate);
        console.log('fromRate',fromRate);
        console.log(((toRate / fromRate) * searchValue).toFixed(2));
        // $('#amount').val(((toRate / fromRate) * searchValue).toFixed(2));
        // $('#amount_someone').val(((toRate / fromRate) * searchValue).toFixed(2));
        $('#actual_price').text(simbol+((toRate / fromRate) * searchValue).toFixed(2));
        $('#sell_price').text(simbol+((toRate / fromRate) * searchValue_sell).toFixed(2));
        $('#curr').val(resultTo);
        $('#curr_someone').val(resultTo);
      }

      function getCurrencySymbol (locale, currency) {
        return (0).toLocaleString(
          locale,
          {
            style: 'currency',
            currency: currency,
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
          }
        ).replace(/\d/g, '').trim()
      }
      $(document).ready(function() {
        // Handle hover event
        $(".course__form-rating ul li a").hover(function() {
          var index = $(this).parent().index();
          $(this).closest("ul").find("li:lt(" + (index + 1) + ") a").addClass("yellow");
        }, function() {
          var index = $(this).parent().index();
          $(this).closest("ul").find("li:lt(" + (index + 1) + ") a").removeClass("yellow");
        }); 
        // Handle click event
        $(".course__form-rating ul li a").click(function() {
          var index = $(this).parent().index();
          $(this).closest("ul").find("li:lt(" + (index + 1) + ") a").addClass("selected");
          $(this).closest("ul").find("li:gt(" + index + ") a").removeClass("selected");
        });
      });
      function ratingFun(rating){
        $('.rating-input').val(rating)
      }

      function submitReview(){
      let ratingInput = $('.rating-input').val();
      let comment = $('#comment').val();
      let user_id = $('.user_id').val();
      let course_id = $('.course_id').val()
      $.ajax({
        url:"{{ route('give-rating') }}",
        method: "POST",
        data:{
          rating: ratingInput,
          comment: comment,
          course_id:course_id,
          user_id:user_id,
          "_token": "{{ csrf_token() }}",
        },success:function(res){
          if(res.status === 200){
            $('.rating-success-message').html(`<span class="alert alert-success">${res.message}</span>
                `);
          } 
          if(res.status === 401){
            $('.rating-success-message').html(` < span class = "alert alert-danger" > $ {
                    res.message
                }
                </span>
                `);
          }
          setTimeout(() => {
            $('.btn-close').click();
            $('.rating-success-message').html("");
            location.reload(true);
          },1000)
        }
      })
    }

</script>
@endsection
