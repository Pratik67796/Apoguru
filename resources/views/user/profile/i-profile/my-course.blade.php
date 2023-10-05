@extends('user.layouts.learnerProfile')
@section('title', 'Create a course')
@section('content')
<div class="container-fluid main__div">
    <div class="courses-tab-content">
        <div class="courses-wrapper">


            <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex2-tab-1" data-bs-toggle="tab" href="#published" role="tab" aria-controls="published" aria-selected="true">
                        {{ COURSE_STATUS_PUBLISHED }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-2" data-bs-toggle="tab" href="#unpublished" role="tab" aria-controls="unpublished" aria-selected="false">
                        {{ COURSE_STATUS_UNPUBLISHED }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-3" data-bs-toggle="tab" href="#under-review" role="tab" aria-controls="under-review" aria-selected="false">
                        {{ COURSE_STATUS_UNDER_REVIEW }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-3" data-bs-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false">
                        {{ COURSE_STATUS_PENDING }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-3" data-bs-toggle="tab" href="#reject" role="tab" aria-controls="reject" aria-selected="false">
                        {{ COURSE_STATUS_REJECT }}
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade show active" id="published" role="tabpanel" aria-labelledby="published">
                    <div class="row">
                        @if(count($courses->where('status', COURSE_STATUS_PUBLISHED)) > 0)
                        @foreach($courses->where('status', COURSE_STATUS_PUBLISHED) as $key => $course)
                        <div class="col-lg-6 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="../details-course.html"><img src="{{ asset('storage/course-images/'.$course->image) }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    {{ $course->User->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="extra-buttons">
                                            <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                            <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="../details-course.html">
                                            {{ $course->title }}
                                        </a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">${{ $course->actual_price }}</span>
                                            <span class="old-parice">${{ $course->sell_price }}</span>
                                        </div>
                                        <div class="courses-review">
                                            <?php
                                                $ratings = $course->getRating()->pluck('rating');
                                                $totalRatings = count($ratings);
                                                $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
                                                $number = $averageRating;
                                                $formattedNumber = number_format($number, 1);
                                                $averagePercentage = $formattedNumber * 20
                                            ?>
                                            <span class="rating-count">{{ $formattedNumber }}</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" id='rating-stars' style="width: {{ $averagePercentage }}%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <h1>
                                        Sorry, You don't have {{ COURSE_STATUS_PUBLISHED }} course.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="tab-pane fade" id="unpublished" role="tabpanel" aria-labelledby="ex2-tab-2">

                    <div class="row">
                        @if(count($courses->where('status', COURSE_STATUS_UNPUBLISHED)) > 0)
                        @foreach($courses->where('status', COURSE_STATUS_UNPUBLISHED) as $key => $course)
                        <div class="col-lg-6 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="../details-course.html"><img src="{{ asset('storage/course-images/'.$course->image) }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    {{ $course->User->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="extra-buttons">
                                            <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                            <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="../details-course.html">
                                            {{ $course->title }}
                                        </a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">${{ $course->actual_price }}</span>
                                            <span class="old-parice">${{ $course->sell_price }}</span>
                                        </div>
                                        <div class="courses-review">
                                            <?php
                                                $ratings = $course->getRating()->pluck('rating');
                                                $totalRatings = count($ratings);
                                                $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
                                                $number = $averageRating;
                                                $formattedNumber = number_format($number, 1);
                                                $averagePercentage = $formattedNumber * 20
                                            ?>
                                            <span class="rating-count">{{ $formattedNumber }}</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" id='rating-stars' style="width: {{ $averagePercentage }}%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <h1>
                                        Sorry, You don't have {{ COURSE_STATUS_UNPUBLISHED }} course.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="tab-pane fade" id="under-review" role="tabpanel" aria-labelledby="ex2-tab-3">

                    <div class="row">
                        @if(count($courses->where('status', COURSE_STATUS_UNDER_REVIEW)) > 0)
                        @foreach($courses->where('status', COURSE_STATUS_UNDER_REVIEW) as $key => $course)
                        <div class="col-lg-6 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="../details-course.html"><img src="{{ asset('storage/course-images/'.$course->image) }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    {{ $course->User->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="extra-buttons">
                                            <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                            <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="../details-course.html">
                                            {{ $course->title }}
                                        </a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">${{ $course->actual_price }}</span>
                                            <span class="old-parice">${{ $course->sell_price }}</span>
                                        </div>
                                        <div class="courses-review">
                                            <?php
                                                $ratings = $course->getRating()->pluck('rating');
                                                $totalRatings = count($ratings);
                                                $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
                                                $number = $averageRating;
                                                $formattedNumber = number_format($number, 1);
                                                $averagePercentage = $formattedNumber * 20
                                            ?>
                                            <span class="rating-count">{{ $formattedNumber }}</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" id='rating-stars' style="width: {{ $averagePercentage }}%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <h1>
                                        Sorry, You don't have {{ COURSE_STATUS_UNDER_REVIEW }} course.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="ex2-tab-3">
                    <div class="row">
                        @if(count($courses->where('status', COURSE_STATUS_PENDING)) > 0)
                        @foreach($courses->where('status', COURSE_STATUS_PENDING) as $key => $course)
                        <div class="col-lg-6 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="../details-course.html"><img src="{{ asset('storage/course-images/'.$course->image) }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    {{ $course->User->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="extra-buttons">
                                            <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                            <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="../details-course.html">
                                            {{ $course->title }}
                                        </a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">${{ $course->actual_price }}</span>
                                            <span class="old-parice">${{ $course->sell_price }}</span>
                                        </div>
                                        <div class="courses-review">
                                            <?php
                                                $ratings = $course->getRating()->pluck('rating');
                                                $totalRatings = count($ratings);
                                                $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
                                                $number = $averageRating;
                                                $formattedNumber = number_format($number, 1);
                                                $averagePercentage = $formattedNumber * 20
                                            ?>
                                            <span class="rating-count">{{ $formattedNumber }}</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" id='rating-stars' style="width: {{ $averagePercentage }}%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="publish-course" value={{ $course->id }}>
                                <button class="btn btn-outline-primary mt-4 publish" type="button" id="publish">Publish 10 USD</button>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <h1>
                                        Sorry, You don't have {{ COURSE_STATUS_PENDING }} course.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
                <div class="tab-pane fade" id="reject" role="tabpanel" aria-labelledby="ex2-tab-3">

                    <div class="row">
                        @if(count($courses->where('status', COURSE_STATUS_REJECT)) > 0)
                        @foreach($courses->where('status', COURSE_STATUS_REJECT) as $key => $course)
                        <div class="col-lg-6 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="../details-course.html"><img src="{{ asset('storage/course-images/'.$course->image) }}" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    <img src="{{ URL::asset('assets/images/author/author-01.jpg')}}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" data-bs-toggle="modal" data-bs-target="#ins_Modal">
                                                    {{ $course->User->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="extra-buttons">
                                            <a href="javascript:void(0)"><i class="far fa-paper-plane me-2"></i></a>
                                            <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="../details-course.html">
                                            {{ $course->title }}
                                        </a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review">
                                        <div class="courses-price">
                                            <span class="sale-parice">${{ $course->actual_price }}</span>
                                            <span class="old-parice">${{ $course->sell_price }}</span>
                                        </div>
                                        <div class="courses-review">
                                            <?php
                                                $ratings = $course->getRating()->pluck('rating');
                                                $totalRatings = count($ratings);
                                                $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
                                                $number = $averageRating;
                                                $formattedNumber = number_format($number, 1);
                                                $averagePercentage = $formattedNumber * 20
                                            ?>
                                            <span class="rating-count">{{ $formattedNumber }}</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" id='rating-stars' style="width: {{ $averagePercentage }}%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single-courses">
                                <div class="courses-images">
                                    <h1>
                                        Sorry, You don't have {{ COURSE_STATUS_REJECT }} course.
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
