<?php
    $number = $averageRating;
    $formattedNumber = number_format($number, 2);

    $formattedNumber; // Output: 2.33
    $videoLink = "";
    $totalVideos = 0;
    $totalDurationInSeconds = 0; // Initialize the total duration in seconds to 0

    foreach ($singlecourse->getPrincipleTopic as $key => $lecture) {
        $firstVideo = $lecture->videos->first();
        $data = json_decode($firstVideo, true);
        if (isset($data['video'])) {
            $videoLink = $data['video'];
        }
        $videos = $lecture->videos->count();
        if (!is_numeric($videos)) {
        continue;
        }
        foreach ($lecture->videos as $index => $video) {
        // Parse the duration string and add it to the total duration in seconds
            if(isset($video->duratio)){
                list($hours, $minutes, $seconds) = explode(':', $video->duration);
                $hours = str_pad($hours, 2, '0', STR_PAD_LEFT);
                $minutes = str_pad($minutes, 2, '0', STR_PAD_LEFT);
                $totalDurationInSeconds += $hours * 3600 + $minutes * 60 + $seconds;
            }
        }
        $totalVideos += $videos;
    }

    // Calculate hours, minutes, and seconds from total duration in seconds
    if(isset($totalDurationInSeconds)){
        $hours = floor($totalDurationInSeconds / 3600);
        $minutes = floor(($totalDurationInSeconds % 3600) / 60);
        $seconds = $totalDurationInSeconds % 60;
    }else{
        $hours = 00;
        $minutes = 00;
        $seconds = 00;
    }
?>

@extends('user.comman.pro-header')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/professional-css/vendor/plugins.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/professional-css/style.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/professional-css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/school-css/fontAwesome5Pro.css')}}">

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
                <video class="" poster="{{ asset('assets/images/school-dashboard-main.jpeg') }}" width="100%" height="" controls>
                    <source src="{{ asset('assets/video/school-dashboard-main.mp4') }}" type="">
                    <source src="{{ asset('assets/video/school-dashboard-main.ogg') }}" type="">
                </video>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="float-section w-100">
    <div class="container">
        <div class="float-buttons" style="">
            <div class="d-flex align-items-center justify-content-start flex-wrap">
                @if(isset(Auth::guard('user_new')->user()->id))
                <a href="#" class="btn btn-primary btn-hover-dark text-center me-3 mb-2" data-bs-toggle="modal" data-bs-target="#flutter-wave-modal"><i class="fas fa-sack-dollar me-1"></i> Pay</a>
                <form method='post' action='{{ route('now-payment') }}'>
                    @csrf
                    <input type="hidden" name="price" value='{{ $singlecourse->actual_price }}'>
                    <input type="hidden" name="course_id" value='{{ $singlecourse->id }}'>
                    <input type="hidden" name="user_id" value="@if(isset(Auth::guard('user_new')->user()->id)){{ Auth::guard('user_new')->user()->id }} @endif">
                    <button type="submit" class="btn btn-primary btn-hover-dark text-center me-3 mb-2">
                        <svg class="me-1" role="img" fill="#fff" width="17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Crypto</title>
                            <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                        </svg> Crypto Pay
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-hover-dark text-center me-3 mb-2"><i class="fas fa-sack-dollar me-1"></i> Pay</a>

                <a href="{{ route('login') }}" class="btn btn-primary btn-hover-dark text-center me-3 mb-2">
                    <svg class="me-1" role="img" fill="#fff" width="17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Crypto</title>
                        <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                    </svg> Crypto Pay
                </a>
                @endif
                <a href="" class="btn btn-primary btn-hover-dark text-center me-3 mb-2"><i class="fas fa-sack-dollar me-1"></i> Pay For Me</a>
                <a href="" class="btn btn-primary btn-hover-dark text-center mb-2">
                    <i class="fas fa-shopping-cart me-1"></i> Add to Cart</a>
            </div>
        </div>
    </div>
</div>

<div class="main-wrapper">
    <div class="overlay"></div>
    <div class="section page-banner" style="height: 155px;padding-top: 155px;">

    </div>
    <div class="section section-padding mt-n10">
        <div class="container">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row gx-10">
                <div class="col-lg-8">
                    <div class="courses-details">
                        <div class="courses-details-images">
                            <img src="{{ asset('storage/course-images/'.$singlecourse->image) }}" alt="Courses Details">
                            <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                                <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                            </div>
                            <span class="tags">BESTSELLER</span>
                            <div class="courses-play">
                                <img src="{{ asset('assets/images/courses/circle-shape.png') }}" alt="Play">
                                <a class="play video-popup" href="{{ asset('storage/videos/'.$videoLink) }}"><i class="flaticon-play"></i></a>
                            </div>
                        </div>
                        <h2 class="title">{{ $singlecourse->title }}</h2>
                        <div class="courses-details-admin">
                            <div class="admin-author">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/author/author-01.jpg') }}" alt="Author">
                                </div>
                                <div class="author-content">
                                    <a class="name" href="#">{{ isset($singlecourse->getAdmin) ? $singlecourse->getAdmin->name : $singlecourse->getPublisher->name }}</a>
                                    <span class="Enroll">286 Enrolled Students</span>
                                </div>
                            </div>
                            <div class="admin-rating">
                                <span class="rating-count">{{ $formattedNumber }}</span>
                                <span class="rating-star">
                                    <span class="rating-bar" id="rating-stars" style="width: 80%;"></span>
                                </span>
                                <span class="rating-text">({{$totalRatings}} Rating)</span>
                            </div>
                        </div>

                        <div class="courses-details-tab">
                            <div class="details-tab-menu">
                                <ul class="nav justify-content-center">
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#outline">Outline</button></li>
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
                                                <p>{!! $singlecourse->description !!}</p>
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
                                                            <img src="{{ asset('assets/images/author/author-01.jpg') }}" alt="Author">
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
                                                            <img src="{{ asset('assets/images/author/author-02.jpg') }}" alt="Author">
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
                                                            <img src="{{ asset('assets/images/author/author-03.jpg') }}" alt="Author">
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
                                                            <img src="{{ asset('assets/images/author/author-04.jpg') }}" alt="Author">
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

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">
                                        <div class="tab-reviews">
                                            <h3 class="tab-title">Student Reviews:</h3>
                                            <div class="reviews-wrapper reviews-active">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">

                                                        @foreach ($singlecourse->getRating as $rating)
                                                        <div class="single-review swiper-slide">
                                                            <div class="review-author">
                                                                <div class="author-content" style="padding-left: 0px !important;">
                                                                    <h4 class="name">{{ $rating->getRatingUser->name }}</h4>
                                                                    {{-- <span class="designation">Product Designer, USA</span> --}}
                                                                    <span class="rating-star">
                                                                        @php
                                                                        $ratingBarSlider = number_format($rating->rating, 2) * 2 * 10;//$averageRating * 18;
                                                                        @endphp
                                                                        <span class="rating-bar {{ $ratingBarSlider }}-asd" style="width: {{ $ratingBarSlider }}% !important;"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <p>{{ $rating->comment }}</p>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
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
                                                            {{-- <form action="#"> --}}
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="reviews-rating">
                                                                        <label>Rating</label>
                                                                        <ul id="rating" class="rating">
                                                                            <li class="star" title='Poor' data-value='1' onClick="ratingFun(1)"><i class="icofont-star"></i></li>
                                                                            <li class="star" title='Not bad' data-value='2' onClick="ratingFun(2)"><i class="icofont-star"></i></li>
                                                                            <li class="star" title='Average' data-value='3' onClick="ratingFun(3)"><i class="icofont-star"></i></li>
                                                                            <li class="star" title='Good' data-value='4' onClick="ratingFun(4)"><i class="icofont-star"></i></li>
                                                                            <li class="star" title='Excellent' data-value='5' onClick="ratingFun(5)"><i class="icofont-star"></i></li>
                                                                        </ul>
                                                                    </div>
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
                                                                <div class="col-md-12">
                                                                    <div class="single-form">
                                                                        <textarea placeholder="Write your comments here" name="comment" id="comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="single-form">
                                                                        <button class="btn btn-primary btn-hover-dark" onClick="submitReview()">Submit Review</button>
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="outline">
                                        <div class="course__curriculum">
                                            @foreach($singlecourse->getPrincipleTopic as $key => $principleTopic)
                                            <div class="accordion mt-4" id="course__accordion">
                                                <div class="accordion-item mb-4">
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
                                                                            <div class="course__curriculum-info">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget widget-information">
                            <div class="info-price">
                                <span class="price">${{ $singlecourse->sell_price }}</span>
                            </div>
                            <div class="info-list">
                                
                                <ul>
                                    <li><i class="icofont-man-in-glasses"></i> <strong>Instructor</strong> <span>{{ isset($singlecourse->getAdmin) ? $singlecourse->getAdmin->name : $singlecourse->getPublisher->name }}</span></li>
                                    <li><i class="icofont-clock-time"></i> <strong>Duration</strong> <span>{{ "$hours hr $minutes mins $seconds sec" }}</span></li>
                                    <li><i class="icofont-ui-video-play"></i> <strong>Lectures</strong> <span>{{ $totalVideos }}</span></li>
                                    <li><i class="icofont-bars"></i> <strong>Level</strong> <span>Professional</span></li>
                                    <li><i class="icofont-book-alt"></i> <strong>Language</strong> <span>English</span></li>
                                    <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
                                </ul>
                            </div>
                            @if(isset(Auth::guard('user_new')->user()->id))
                            <div class="info-btn">
                                <a href="#" class="btn btn-primary btn-hover-dark" data-bs-toggle="modal" data-bs-target="#flutter-wave-modal"><i class="fas fa-sack-dollar me-1"></i> Pay </a>
                            </div>
                            <div class="info-btn">
                                <form method='post' action='{{ route('now-payment') }}'>
                                    @csrf
                                    <input type="hidden" name="price" value='{{ $singlecourse->actual_price }}'>
                                    <input type="hidden" name="course_id" value='{{ $singlecourse->id }}'>
                                    <input type="hidden" name="user_id" value="@if(isset(Auth::guard('user_new')->user()->id)){{ Auth::guard('user_new')->user()->id }} @endif">
                                    <button type="submit" class="btn btn-primary btn-hover-dark">
                                        <svg class="me-1" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Crypto</title>
                                            <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                                        </svg> Crypto Pay
                                    </button>
                                </form>
                            </div>
                            @else
                            <div class="info-btn">
                                <a href="{{ route('login') }}" class="btn btn-primary btn-hover-dark"><i class="fas fa-sack-dollar me-1"></i> Pay </a>
                            </div>
                            <div class="info-btn">
                                <a href="{{ route('login') }}" class="btn btn-primary btn-hover-dark">
                                    <svg class="me-1" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Crypto</title>
                                        <path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z" />
                                    </svg> Crypto Pay
                                </a>
                            </div>
                            @endif
                            <div class="info-btn">
                                <a href="#" class="btn btn-primary btn-hover-dark"><i class="fas fa-sack-dollar me-1"></i> Pay for me</a>
                            </div>
                        </div>
                        <div class="sidebar-widget share-widget">
                            <h4 class="widget-title">Surprise Discount:</h4>
                            <a class="btn btn-primary btn-hover-dark mt-5 text-start p-3" href="javascript:void(0)" style="font-size: 30px;">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-paper-plane me-5"></i>
                                    <h6 class="text-white">
                                        Share for a surprise discount
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

</div>
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
<script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/school-js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/main.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/professional-js/main.js') }}"></script>


<script src="{{ asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{ asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/professional-js/plugins.min.js')}}"></script>
<script src="{{ asset('assets/js/professional-js/main.js')}}"></script>


<script type="">
    $(document).ready(function(){
      $(".wishlist-heart").click(function(){
        $(this).toggleClass("far");
        $(this).toggleClass("fas");
      })
      var ratingPercentage = 80; // Replace with the actual rating percentage value
    
    var ratingBarWidth = {{ $formattedNumber }} * 20 + '%';
    $('#rating-stars').css('width', ratingBarWidth);
    });
  </script>

<script type="">
    $(document).ready(function(){
      $(".extra-buttons .wishlist-heart").click(function(){
        $(this).toggleClass("far");
        $(this).toggleClass("fas");
      })
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
            $('.rating-success-message').html(`<span class="alert alert-success">${res.message}</span>`);
          } 
          if(res.status === 401){
            $('.rating-success-message').html(`<span class="alert alert-danger">${res.message}</span>`);
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

<script type="">
    $("#btn-vertical_reviews").click(function(){
      $(".reviews-wrapper").slideToggle("fast");
      $(".vertical_reviews").slideToggle("slow");
    })
  </script>
@endsection
