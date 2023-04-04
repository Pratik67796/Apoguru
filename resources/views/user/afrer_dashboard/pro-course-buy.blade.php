@extends('user.comman.pro-header')
@section('content') 
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">

  <div class="float-section w-100">
    <div class="container">
      <div class="float-buttons" style="">
        <div class="d-flex align-items-center justify-content-start flex-wrap">
          <a href="" class="btn btn-primary btn-hover-dark text-center me-3 mb-2"><i class="fas fa-sack-dollar me-1"></i> Pay</a>
          <!-- <a href="" class="btn btn-primary btn-hover-dark text-center me-3 mb-2"><i class="fas fa-sack-dollar"></i>  Binance Pay</a> -->
          <a href="" class="btn btn-primary btn-hover-dark text-center me-3 mb-2">
            <svg class="me-1" role="img" fill="#fff" width="17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Binance</title><path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z"/></svg>  Binance Pay
          </a>
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
        <div class="row gx-10">
          <div class="col-lg-8">
            <div class="courses-details">
              <div class="courses-details-images">
                <img src="assets/images/courses/courses-details.jpg" alt="Courses Details">
                <div class="position-absolute" style="top: 1rem;left: 1rem;z-index: 2">
                  <a href="javascript:void(0)"><i class="far fa-heart wishlist-heart fa-lg"></i></a>
                </div>
                <span class="tags">BESTSELLER</span>
                <div class="courses-play">
                  <img src="assets/images/courses/circle-shape.png" alt="Play">
                  <a class="play video-popup" href="https://www.youtube.com/watch?v=Wif4ZkwC0AM"><i class="flaticon-play"></i></a>
                </div>
              </div>
              <h2 class="title">Finance & Investment Series: Learn to Budget and Calculate Your Net Worth.</h2>
              <div class="courses-details-admin">
                <div class="admin-author">
                  <div class="author-thumb">
                    <img src="assets/images/author/author-01.jpg" alt="Author">
                  </div>
                  <div class="author-content">
                    <a class="name" href="#">Pamela Foster</a>
                    <span class="Enroll">286 Enrolled Students</span>
                  </div>
                </div>
                <div class="admin-rating">
                  <span class="rating-count">4.9</span>
                  <span class="rating-star">
                    <span class="rating-bar" style="width: 80%;"></span>
                  </span>
                  <span class="rating-text">(5,764 Rating)</span>
                </div>
              </div>
              
              <div class="courses-details-tab">
                <div class="details-tab-menu">
                  <ul class="nav justify-content-center">
                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                    <li><button  data-bs-toggle="tab" data-bs-target="#outline">Outline</button></li>
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
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                        </div>
                        <div class="description-wrapper">
                          <h3 class="tab-title">Curriculum:</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                        </div>
                        <div class="description-wrapper">
                          <h3 class="tab-title">Certification:</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
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
                                <img src="assets/images/author/author-01.jpg" alt="Author">
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
                                <img src="assets/images/author/author-02.jpg" alt="Author">
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
                                <img src="assets/images/author/author-03.jpg" alt="Author">
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
                                <img src="assets/images/author/author-04.jpg" alt="Author">
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
                        <!-- <div class="row gx-10">
                          <div class="col-lg-6">
                            <div class="tab-rating-content">
                              <h3 class="tab-title">Rating:</h3>
                              <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the i dustry's standard dummy text ever since the 1500 unknown printer took a galley of type.</p>
                              <p>Lorem Ipsum is simply dummy text of printing and typesetting industry text ever since</p>
                              <p>Lorem Ipsum is simply dummy text of printing and dustry's standard dummy text ever since the 1500 unknown printer took a galley of type.</p>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="tab-rating-box">
                              <span class="count">4.8 <i class="icofont-star"></i></span>
                              <p>Rating (86K+)</p>
                              <div class="rating-box-wrapper">
                                <div class="single-rating">
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 100%;"></span>
                                  </span>
                                  <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 75%;"></div>
                                  </div>
                                </div>
                                <div class="single-rating">
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 80%;"></span>
                                  </span>
                                  <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 90%;"></div>
                                  </div>
                                </div>
                                <div class="single-rating">
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 60%;"></span>
                                  </span>
                                  <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 500%;"></div>
                                  </div>
                                </div>
                                <div class="single-rating">
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 40%;"></span>
                                  </span>
                                  <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 80%;"></div>
                                  </div>
                                </div>
                                <div class="single-rating">
                                  <span class="rating-star">
                                    <span class="rating-bar" style="width: 20%;"></span>
                                  </span>
                                  <div class="rating-progress-bar">
                                    <div class="rating-line" style="width: 40%;"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="reviews">
                      <div class="tab-reviews">
                        <h3 class="tab-title">Student Reviews:</h3>
                        <div class="reviews-wrapper reviews-active">
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="single-review swiper-slide">
                                <div class="review-author">
                                  <div class="author-thumb">
                                    <img src="assets/images/author/author-06.jpg" alt="Author">
                                    <i class="icofont-quote-left"></i>
                                  </div>
                                  <div class="author-content">
                                    <h4 class="name">Sara Alexander</h4>
                                    <span class="designation">Product Designer, USA</span>
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 100%;"></span>
                                    </span>
                                  </div>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                              </div>
                              <div class="single-review swiper-slide">
                                <div class="review-author">
                                  <div class="author-thumb">
                                    <img src="assets/images/author/author-07.jpg" alt="Author">
                                    <i class="icofont-quote-left"></i>
                                  </div>
                                  <div class="author-content">
                                    <h4 class="name">Karol Bachman</h4>
                                    <span class="designation">Product Designer, USA</span>
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 100%;"></span>
                                    </span>
                                  </div>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                              </div>
                              <div class="single-review swiper-slide">
                                <div class="review-author">
                                  <div class="author-thumb">
                                    <img src="assets/images/author/author-03.jpg" alt="Author">
                                    <i class="icofont-quote-left"></i>
                                  </div>
                                  <div class="author-content">
                                    <h4 class="name">Gertude Culbertson</h4>
                                    <span class="designation">Product Designer, USA</span>
                                    <span class="rating-star">
                                      <span class="rating-bar" style="width: 100%;"></span>
                                    </span>
                                  </div>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                        <div id="vertical_reviews" class="vertical_reviews" style="display: none;">
                          <div class="single-review">
                            <div class="review-author">
                              <div class="author-thumb">
                                <img src="assets/images/author/author-06.jpg" alt="Author">
                                <i class="icofont-quote-left"></i>
                              </div>
                              <div class="author-content">
                                <h4 class="name">Sara Alexander</h4>
                                <span class="designation">Product Designer, USA</span>
                                <span class="rating-star">
                                  <span class="rating-bar" style="width: 100%;"></span>
                                </span>
                              </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                          </div>
                          <div class="single-review">
                            <div class="review-author">
                              <div class="author-thumb">
                                <img src="assets/images/author/author-07.jpg" alt="Author">
                                <i class="icofont-quote-left"></i>
                              </div>
                              <div class="author-content">
                                <h4 class="name">Karol Bachman</h4>
                                <span class="designation">Product Designer, USA</span>
                                <span class="rating-star">
                                  <span class="rating-bar" style="width: 100%;"></span>
                                </span>
                              </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                          </div>
                          <div class="single-review">
                            <div class="review-author">
                              <div class="author-thumb">
                                <img src="assets/images/author/author-03.jpg" alt="Author">
                                <i class="icofont-quote-left"></i>
                              </div>
                              <div class="author-content">
                                <h4 class="name">Gertude Culbertson</h4>
                                <span class="designation">Product Designer, USA</span>
                                <span class="rating-star">
                                  <span class="rating-bar" style="width: 100%;"></span>
                                </span>
                              </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500 when unknown printer took a galley of type and scrambled to make type specimen book has survived not five centuries but also the leap into electronic type and book.</p>
                          </div>
                          <button type="button" class="btn btn-primary mt-5 btn-hover-dark mx-auto text-center d-block">View More</button>
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
                                <form action="#">
                                  <div class="row">
                                    <!-- <div class="col-md-6">
                                      <div class="single-form">
                                        <input type="text" placeholder="Enter your name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="single-form">
                                        <input type="text" placeholder="Enter your Email">
                                      </div>
                                    </div> -->
                                    <div class="col-md-12">
                                      <div class="reviews-rating">
                                        <label>Rating</label>
                                        <ul id="rating" class="rating">
                                          <li class="star" title='Poor' data-value='1'><i class="icofont-star"></i></li>
                                          <li class="star" title='Poor' data-value='2'><i class="icofont-star"></i></li>
                                          <li class="star" title='Poor' data-value='3'><i class="icofont-star"></i></li>
                                          <li class="star" title='Poor' data-value='4'><i class="icofont-star"></i></li>
                                          <li class="star" title='Poor' data-value='5'><i class="icofont-star"></i></li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="single-form">
                                        <textarea placeholder="Write your comments here"></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="single-form">
                                        <button class="btn btn-primary btn-hover-dark">Submit Review</button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="outline">
                      <div class="course__curriculum">
                        <div class="accordion mt-4" id="course__accordion">
                        <div class="accordion-item mb-4">
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
                                        <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                            <polygon class="st0" points="23,7 16,12 23,17 "/>
                                            <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                          </svg>
                                          <span class="time"> Video to help</span>
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
                                        <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                            <polygon class="st0" points="23,7 16,12 23,17 "/>
                                            <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                          </svg>
                                          <span class="time"> Video to help</span>
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
                                        <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                            <polygon class="st0" points="23,7 16,12 23,17 "/>
                                            <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                          </svg>
                                          <span class="time"> Video to help</span>
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
                                        <div class="course__curriculum-info">
                                          <svg viewBox="0 0 24 24">
                                            <polygon class="st0" points="23,7 16,12 23,17 "/>
                                            <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                          </svg>
                                          <span class="time"> Video to help</span>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-widget widget-information">
                <div class="info-price">
                  <span class="price">$420.38</span>
                </div>
                <div class="info-list">
                  <ul>
                    <li><i class="icofont-man-in-glasses"></i> <strong>Instructor</strong> <span>Pamela Foster</span></li>
                    <li><i class="icofont-clock-time"></i> <strong>Duration</strong> <span>08 hr 15 mins</span></li>
                    <li><i class="icofont-ui-video-play"></i> <strong>Lectures</strong> <span>29</span></li>
                    <li><i class="icofont-bars"></i> <strong>Level</strong> <span>Professional</span></li>
                    <li><i class="icofont-book-alt"></i> <strong>Language</strong> <span>English</span></li>
                    <li><i class="icofont-certificate-alt-1"></i> <strong>Certificate</strong> <span>Yes</span></li>
                  </ul>
                </div>
                <div class="info-btn">
                  <a href="#" class="btn btn-primary btn-hover-dark"><i class="fas fa-sack-dollar me-1"></i> Pay </a>
                </div>
                <div class="info-btn">
                  <!-- <a href="#" class="btn btn-primary btn-hover-dark"><i class="fas fa-sack-dollar"></i> Binance Pay </a> -->
                  <a href="#" class="btn btn-primary btn-hover-dark">
                    <svg class="me-1" role="img" fill="#fff" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Binance</title><path d="M16.624 13.9202l2.7175 2.7154-7.353 7.353-7.353-7.352 2.7175-2.7164 4.6355 4.6595 4.6356-4.6595zm4.6366-4.6366L24 12l-2.7154 2.7164L18.5682 12l2.6924-2.7164zm-9.272.001l2.7163 2.6914-2.7164 2.7174v-.001L9.2721 12l2.7164-2.7154zm-9.2722-.001L5.4088 12l-2.6914 2.6924L0 12l2.7164-2.7164zM11.9885.0115l7.353 7.329-2.7174 2.7154-4.6356-4.6356-4.6355 4.6595-2.7174-2.7154 7.353-7.353z"/></svg> Binance Pay 
                  </a>
                  </div>

                  <div class="info-btn">
                    <a href="#" class="btn btn-primary btn-hover-dark"><i class="fas fa-sack-dollar me-1"></i> Pay for me</a>
                  </div>
                </div>
                <div class="sidebar-widget share-widget">
                  <h4 class="widget-title">Surprise Discount:</h4>
                <!-- <ul class="social">
                  <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                  <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                  <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                  <li><a href="#"><i class="flaticon-skype"></i></a></li>
                  <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul> -->
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

@endsection
@section('script')
    <script src="assets/js/professional-js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="assets/js/professional-js/vendor/jquery-3.5.1.min.js"></script>
  <script src="assets/js/professional-js/plugins.min.js"></script>
  <script src="assets/js/school-js/owl.carousel.min.js"></script>
  <script src="assets/js/professional-js/main.js"></script>
  <script src="assets/js/professional-js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="assets/js/professional-js/vendor/jquery-3.5.1.min.js"></script>
  <script src="assets/js/professional-js/plugins.min.js"></script>
  <script src="assets/js/professional-js/main.js"></script>


  <script src="{{ URL::asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/main.js')}}"></script>


      <script type="">
    $(document).ready(function(){
      $(".wishlist-heart").click(function(){
        $(this).toggleClass("far");
        $(this).toggleClass("fas");
      })
    });
  </script>

  <script type="">
    $(document).ready(function(){
      $(".extra-buttons .wishlist-heart").click(function(){
        $(this).toggleClass("far");
        $(this).toggleClass("fas");
      })
    });
  </script>

  <script type="">
    $("#btn-vertical_reviews").click(function(){
      $(".reviews-wrapper").slideToggle("fast");
      $(".vertical_reviews").slideToggle("slow");
      
      // var x = $("#btn-vertical_reviews");
      // if (x.innerHTML === "View Reviews Vertically"){
      //   x.innerHTML = "View Reviews Horrizontaly";
      // }
      // else {
      //    x.innerHTML = "View Reviews Vertically";
      // }
    })
  </script>
@endsection
