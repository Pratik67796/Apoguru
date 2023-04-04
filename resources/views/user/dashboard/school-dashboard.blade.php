@extends('user.comman.header')
@section('title') 
School Dashboard 
@endsection

@section('content') 
<div id="floating-icon" class="pq-section">
  <button href="" class="e-btn cust-fixed-btn fixed-pq-btn"><img src="{{ URL::asset('assets/ficon/bowling.gif')}}" width="35"> Past Questions </button>
  <button href="" class="e-btn cust-fixed-btn fixed-champ-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ URL::asset('assets/ficon/trophy.gif')}}" width="35"> Championship </button>
  
</div>

<form class="hide-pq-dropdown">
    <div id="one" class="form-group first-dropdown">
      <select class="form-control">
        <option value="default">Select Option</option>
        <option value="second">Select first Option</option>
      </select>
    </div>
    <div id="two" class="form-group second-dropdown">
      <select class="form-control">
        <option value="default">Select Option</option>
        <option value="second">Select second Option</option>
      </select>
    </div>
    <div id="three" class="form-group third-dropdown">
      <select class="form-control">
        <option value="default">Select Option</option>
        <option value="second">Select third Option</option>
      </select>
    </div>
    <div id="four" class="form-group fourth-dropdown">
      <select class="form-control">
        <option value="default">Select Option</option>
        <option value="second">Select fourth Option</option>
      </select>
    </div>
  </form>


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
          <img src="{{ URL::asset('assets/img/logo/logo.png')}}" alt="logo">
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
          <a href="#">
             <div class="header__cart-icon">
                <svg viewBox="0 0 24 24">
                   <circle class="st0" cx="9" cy="21" r="1"/>
                   <circle class="st0" cx="20" cy="21" r="1"/>
                   <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                </svg>
             </div>
             <span class="cart-item">2</span>
          </a>
       </div>

       <div class="header__btn ml-20 d-none d-sm-block">
        <a href="{{ route('signup') }}" class="e-btn"><i class="fad fa-user"></i> Sign Up</a>
      </div>
      <div class="header__btn ml-20 d-none d-sm-block">
        <a href="{{ route('login') }}" class="e-btn"><i class="fad fa-user"></i> Login</a>
      </div>
       
    </div>
  </div>
</div>


<section class="hero__area d-flex align-items-center grey-bg-2 p-relative min-vh-100">
  <div class="hero__shape">
    <!-- <img class="hero-1-circle" src="{{ URL::asset('assets/img/shape/hero/hero-1-circle.png')}}" alt=""> -->
    <img class="hero-1-circle-2" src="{{ URL::asset('assets/img/shape/hero/hero-1-circle-2.png')}}" alt="">
    <img class="hero-1-dot-2" src="{{ URL::asset('assets/img/shape/hero/hero-1-dot-2.png')}}" alt="">
  </div>
  <div class="container">
    <div class="hero__content-wrapper mt-90">
      <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="hero__content p-relative z-index-1">
            <h1 class="hero__title">
              <span style="display: none;">Access 2700+</span>
              <span class="yellow-shape">apoGuru <img src="{{ URL::asset('assets/img/shape/yellow-bg.png')}}" alt="yellow-shape">
              </span>
            </h1>
            <p>Learn Smart, Learn Smart</p>
            <h4 id="main_blink_text"></h4>
            <a href="" class="e-btn"> <i class="fad fa-eye"></i> All course</a>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="hero__thumb d-flex p-relative">
            <div class="hero__thumb-shape">
              <img class="hero-1-dot" src="{{ URL::asset('assets/img/shape/hero/hero-1-dot.png')}}" alt="">
              <!-- <img class="hero-1-circle-3" src="{{ URL::asset('assets/img/shape/hero/hero-1-circle-3.png')}}" alt=""> -->
              <img class="hero-1-circle-4" src="{{ URL::asset('assets/img/shape/hero/hero-1-circle-4.png')}}" alt="">
            </div>
            <div class="hero__thumb-big mr-30">
              <!-- <img src="{{ URL::asset('assets/img/main-section-img.jpg')}}" alt=""> -->
              <video class="school-main-video" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg')}}" width="350" height="267" controls>
                <source src="assets/video/school-dashboard-main.mp4" type="">
              </video>
              <div class="hero__quote hero__quote-animation school-instructor-quote"><h4><a href="{{ route('signup') }}"> Join as an instructor </a></h4></div>
            </div>
            <!-- <div class="hero__thumb-sm mt-50 d-none d-lg-block">
              <img src="{{ URL::asset('assets/img/hero/hero-sm-1.jpg')}}" alt="">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-tb-pad">
   <div class="container">
      <div class="row">
         @foreach($schoolparentcat as $key => $value)
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="category__item mb-30 transition-3 d-flex align-items-center">
               <div class="category__icon mr-30">
                  <img src="{{URL::asset('parent_sub_category_images')}}/{{$value['image']}}" alt="Italian Trulli"   width="50">
               </div>
               <div class="category__content">
                  <h4 class="category__title"><a href="<?php echo '/subcategory/'.$value['id']?>">{{$value['name']}}</a></h4>
                  <p>{{$value['description']}}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section> 


<section class="course__area pt-115 pb-120 grey-bg sch-courses-section">
  <div class="container">
     <div class="row align-items-end">
        <div class="col-12">
           <div class="section__title-wrapper text-center mb-60">
              <h2 class="section__title">The Right <span class="yellow-bg yellow-bg-big">Course<img src="{{ URL::asset('assets/img/shape/yellow-bg.png')}}" alt=""></span> <br> for you</h2>
              <!-- <p>You don't have to struggle alone, you've got our assistance and help.</p> -->
           </div>
        </div>
        <div class="col-12">
           <div class="course__menu d-flex mb-60">
              <div class="masonary-menu filter-button-group">
                 <button class="active" data-filter="*">
                    See All
                    <!-- <span class="tag">new</span> -->
                 </button>
                 <button data-filter=".cat1">Recommended for you</button>
                 <button data-filter=".cat2">Trending</button>
                 <button data-filter=".cat3">Most Popular</button>
                 <button data-filter=".cat4">Featured</button>
                 <button data-filter=".cat5">Best sellers</button>
                 <button data-filter=".cat6">New</button>
             </div>
           </div>
        </div>
     </div>
     <div class="row grid">
      @foreach($new as $key=> $course)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat3 cat5 cat2 cat4 cat6">
           <div class="course__item white-bg mb-30 fix">
              <div class="course__thumb w-img p-relative fix">
                 <a href="{{ route('course-buy') }}">
                    <img src="{{asset('course_images/').'/'.$course['image']}}" alt="">
                 </a>
                 <div class="course__tag">
                    <a href="#" class="pink">BESTSELLER</a>
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
                 <h3 class="course__title"><a href="{{ route('course-buy') }}">{{strip_tags($course['title'])}}</a></h3>
                 <div class="course__teacher d-flex align-items-center">
                    <div class="course__teacher-thumb mr-15">
                       <img src="{{ URL::asset('assets/img/course/teacher/teacher-1.jpg')}}" alt="">
                    </div>
                    <h6><a href="instructor-details.html">{{isset($course['User']['name'])?$course['User']['name']:'Admin'}}</a></h6>
                 </div>
              </div>
              <div class="course__more d-flex justify-content-between align-items-center">
                 <div class="course__status">
                    <span>Free</span>
                 </div>
                 <div class="course__btn">
                    <a href="{{ route('course-buy') }}" class="link-btn">
                       Know Details
                       <i class="far fa-arrow-right"></i>
                       <i class="far fa-arrow-right"></i>
                    </a>
                 </div>
              </div>
           </div>
        </div>
      @endforeach
     </div>
  </div>
</section>



<section class="section-tb-pad">
  <div class="container-fluid">
      <a href="javascript:void(0);">
        <img class="w-100" src="{{ URL::asset('assets/img/4.jpg')}}" style="max-height: 250px;">
      </a>
  </div>
</section> 

<section class="counter__area pt-80 pb-100">
  <div class="container">
     <div class="row">
        <div class="col-xxl-6 offset-xl-3 col-xl-6 offset-xl-3">
           <div class="section__title-wrapper text-center mb-60">
              <h2 class="section__title">We are <span class="yellow-bg yellow-bg-big">Proud<img src="{{ URL::asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
              <!-- <p>You don't have to struggle alone, you've got our assistance and help.</p> -->
           </div>
        </div>
     </div>
     <div class="row justify-content-sm-center">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
           <div class="counter__item counter-items-cust mx-sm-auto mb-30">
              <div class="counter__icon user mb-15">
                 <svg viewBox="0 0 490.7 490.7">
                    <path class="st0" d="m245.3 98c-39.7 0-72 32.3-72 72s32.3 72 72 72 72-32.3 72-72-32.3-72-72-72zm0 123.3c-28.3 0-51.4-23-51.4-51.4s23-51.4 51.4-51.4 51.4 23 51.4 51.4-23 51.4-51.4 51.4z"></path>
                    <path class="st0" d="m389.3 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4c28.3 0 51.4-23 51.4-51.4s-23.1-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.9 30.8-30.8 30.8z"></path>
                    <path class="st0" d="m102.9 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4 51.4-23 51.4-51.4-23-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.7 30.8-30.8 30.8z"></path>
                    <path class="st0" d="m245.3 262.5c-73.7 0-133.6 59.9-133.6 133.6 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-62.3 50.7-113 113-113s113.1 50.7 113.1 113c0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-73.7-60-133.6-133.7-133.6z"></path>
                    <path class="st0" d="m389.3 303.6c-17 0-33.5 4.6-47.9 13.4-4.8 3-6.4 9.2-3.5 14.2 3 4.8 9.2 6.4 14.2 3.5 11.2-6.8 24.1-10.4 37.3-10.4 39.7 0 72 32.3 72 72 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c-0.2-51.3-41.8-92.7-92.7-92.7z"></path>
                    <path class="st0" d="m149.4 316.9c-14.5-8.7-30.9-13.3-47.9-13.3-51 0-92.5 41.5-92.5 92.5 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-39.7 32.3-72 72-72 13.2 0 26 3.6 37.2 10.4 4.8 3 11.2 1.4 14.2-3.5 2.9-4.9 1.2-11.1-3.6-14.1z"></path>
                 </svg>
              </div>
              <div class="counter__content">
                 <h4><span class=" total">4578976</span></h4>
                 <p>Users</p>
              </div>
           </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
           <div class="counter__item counter-items-cust mx-sm-auto mb-30">
              <div class="counter__icon book mb-15">
                 <svg viewBox="0 0 512 512">
                 <path class="st0" d="M458.7,512h-384c-29.4,0-53.3-23.9-53.3-53.3V53.3C21.3,23.9,45.3,0,74.7,0H416c5.9,0,10.7,4.8,10.7,10.7v74.7  h32c5.9,0,10.7,4.8,10.7,10.7v405.3C469.3,507.2,464.6,512,458.7,512z M42.7,96v362.7c0,17.6,14.4,32,32,32H448v-384H74.7  C62.7,106.7,51.6,102.7,42.7,96L42.7,96z M74.7,21.3c-17.6,0-32,14.4-32,32s14.4,32,32,32h330.7v-64H74.7z"></path>
                 <path class="st0" d="M309.3,298.7c-2.8,0-5.5-1.1-7.6-3.1l-56.4-56.5l-56.4,56.4c-3.1,3.1-7.6,4-11.6,2.3c-4-1.6-6.6-5.5-6.6-9.8V96  c0-5.9,4.8-10.7,10.7-10.7S192,90.1,192,96v166.3l45.8-45.8c4.2-4.2,10.9-4.2,15.1,0l45.8,45.8V96c0-5.9,4.8-10.7,10.7-10.7  S320,90.1,320,96v192c0,4.3-2.6,8.2-6.6,9.9C312.1,298.4,310.7,298.7,309.3,298.7L309.3,298.7z"></path>
                 </svg>
              </div>
              <div class="counter__content">
                 <h4><span class=" total-1">456 </span></h4>
                 <p>Instructors</p>
              </div>
           </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
           <div class="counter__item counter-items-cust mx-sm-auto mb-30">
              <div class="counter__icon graduate mb-15">
                 <svg viewBox="0 0 512 512">
                    <g id="Page-1">
                       <g id="_x30_01---Degree">
                          <path id="Shape" class="st0" d="M500.6,86.3L261.8,1c-3.8-1.3-7.9-1.3-11.7,0L11.3,86.3C4.5,88.7,0,95.2,0,102.4    s4.5,13.6,11.3,16.1L128,160.1v53.2c0,33.2,114.9,34.1,128,34.1s128-1,128-34.1v-53.2l25.6-9.1v19.6c0,9.4,7.6,17.1,17.1,17.1    h17.1c9.4,0,17.1-7.6,17.1-17.1V145c0-4-1-7.8-2.8-11.4l42.7-15.3c6.8-2.4,11.3-8.9,11.3-16.1S507.5,88.8,500.6,86.3L500.6,86.3z     M366.9,194.6c-32.5-14.8-101-15.4-110.9-15.4s-78.4,0.6-110.9,15.4v-74.3c5.1-6.6,45.4-17.8,110.9-17.8s105.8,11.2,110.9,17.8    V194.6z M256,230.4c-63.1,0-102.8-10.4-110.2-17.1c7.4-6.6,47.1-17.1,110.2-17.1s102.8,10.4,110.2,17.1    C358.8,220,319.1,230.4,256,230.4z M413.6,131.5L384,142v-22.5c0-33.2-114.9-34.1-128-34.1s-128,1-128,34.1V142L17.1,102.4    l239.1-85.3L426.7,78v43C421.3,123,416.7,126.6,413.6,131.5z M443.7,170.7h-17.1v-25.6c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5    v25.6H443.7z M443.7,120.7V84.1l51.2,18.3L443.7,120.7z"></path>
                          <path id="Shape_1_" class="st0" d="M486.4,264.5c-0.5,0-1,0-1.5,0.1C409.2,276.4,332.6,282,256,281.5    c-76.6,0.5-153.2-5.2-228.9-16.9c-0.5-0.1-1-0.1-1.5-0.1c-6,0-25.6,6.8-25.6,93.9s19.6,93.9,25.6,93.9c0.5,0,1-0.1,1.5-0.2    c58.2-9.2,116.9-14.6,175.8-16l-16.7,40c-2.6,6.4-1,13.7,3.9,18.5s12.3,6.1,18.6,3.4l6.5-2.8l2.8,6.5c2.7,6.3,8.9,10.4,15.7,10.4    h0.2c6.9-0.1,13.1-4.3,15.6-10.6l14.8-35.5l14.8,35.3c2.6,6.5,8.8,10.7,15.7,10.8h0.3c6.8,0,12.9-4,15.6-10.2l2.9-6.5l6.4,2.8    c6.3,2.8,13.8,1.5,18.7-3.4c5-4.8,6.5-12.2,3.9-18.6L326.3,437c53.1,1.9,106,7,158.5,15.4c0.5,0.1,1,0.1,1.5,0.1    c6,0,25.6-6.8,25.6-93.9S492.4,264.5,486.4,264.5L486.4,264.5z M283.3,298.4c3.5,13,5.6,26.4,6.2,39.9c-19.3-9-42-6.9-59.4,5.5    c-0.4-15.3-2.4-30.6-5.9-45.5c10.3,0.2,20.9,0.3,31.8,0.3C265.3,298.7,274.4,298.6,283.3,298.4z M264.5,435.2    c-23.6,0-42.7-19.1-42.7-42.7s19.1-42.7,42.7-42.7s42.7,19.1,42.7,42.7S288.1,435.2,264.5,435.2z M25.6,285.9    c6.5,23.6,9.4,48.1,8.5,72.5c0.9,24.5-2,48.9-8.5,72.5c-6.5-23.6-9.4-48.1-8.5-72.5C16.2,333.9,19.1,309.5,25.6,285.9z     M42.8,432.4c4.7-13.5,8.4-36.2,8.4-74s-3.7-60.5-8.4-74c54.2,7.5,108.8,12,163.5,13.5c5.1,19.7,7.5,40.1,7,60.5    c0,1.2,0,2.4-0.1,3.6c-10.2,17-11.3,38-2.7,55.9l-0.4,0.9C154.2,420.2,98.3,424.7,42.8,432.4L42.8,432.4z M233.9,494.9l-6.2-14.3    c-1.9-4.3-6.9-6.3-11.2-4.4l-14.4,6.3l20-48c8.2,8.3,18.7,14.1,30.1,16.5L233.9,494.9z M312.6,476.2c-4.3-1.9-9.3,0.1-11.2,4.4    l-6.3,14.2L276.8,451c11.5-2.4,21.9-8.1,30.2-16.5l20,47.8L312.6,476.2z M484.7,434.8c-54.8-8.4-110.1-13.6-165.5-15.4l-0.6-1.5    c10.7-22.6,6.1-49.5-11.5-67.3c-0.1-17.7-2.1-35.3-6.1-52.6c61.5-1.4,122.9-6.7,183.7-16.1c4,6.7,10.2,33.3,10.2,76.4    S488.6,428,484.7,434.8L484.7,434.8z"></path>
                       </g>
                    </g>
                    </svg>
              </div>
              <div class="counter__content">
                 <h4><span class=" total-2">45678</span></h4>
                 <p>Courses</p>
              </div>
           </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center">
          <div class="hero__quote school-instructor-quote position-static">
            <h4><a href="{{ route('signup') }}"> Join as an instructor </a></h4>
          </div>
        </div>
     </div>
  </div>
</section>

@endsection
@section('script')
<script type="">
  // var roles = [ 'WASSCE', 'BECE', 'CSEC', 'NABTEX' ];
  var data = <?php echo json_encode($schoolparentcat);?>;
  let test = [];
  for(let a in data) {
      test[a]  = data[a]['name'];
   }
  var roles = test;
  var roleId = 0;

  window.setInterval(function () {
      $('#main_blink_text').html(roles[roleId]);
      roleId = roleId + 1;
      if(roleId >= roles.length) { roleId = 0; }
  }, 1000);
</script>

<script type="">
let triggered = false;

$(window).on('scroll',function() { 
   if (window.scrollY > ($('.counter__area').offset().top+$('.counter__area').outerHeight()-window.innerHeight) & !triggered)
   {
      $({ counter: 0 }).animate({ counter: 4578976 },
   {
      duration: 5000,
      easing: "linear",
   step: function () {
      $(".total").text(Math.ceil(this.counter));
   },
   complete: function () {
   }
});

$({ counter: 0 }).animate(
  { counter: 456 },
  {
    duration: 5000,
    easing: "linear",
    step: function () {
      $(".total-1").text(Math.ceil(this.counter));
    },
    complete: function () {
    }
  }
);

$({ counter: 0 }).animate(
  { counter: 45678 },
  {
    duration: 5000,
    easing: "linear",
    step: function () {
      $(".total-2").text(Math.ceil(this.counter));
    },
    complete: function () {
    }
  }
);

triggered = true;
}

});

$(document).ready(function(){

   $(".fixed-pq-btn").click(function(){
      $(".hide-pq-dropdown").slideToggle("slow");
      $(".first-dropdown").slideToggle("slow");
   });

   $('.first-dropdown select').on('change', function() {
      if ( this.value == 'second')
      {
         $(".second-dropdown").show();
      }
   });

   $('.second-dropdown select').on('change', function() {
      if ( this.value == 'second')
      {
         $(".third-dropdown").show();
      }
   });

   $('.third-dropdown select').on('change', function() {
      if ( this.value == 'second')
      {
         $(".fourth-dropdown").show();
      }
   });
 });
</script>
@endsection