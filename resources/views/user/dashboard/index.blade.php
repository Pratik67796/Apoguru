<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ut-8" />
  <meta name="description" content="appoguru">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>apoGuru</title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/school-css/main.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/school-css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/school-css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/default.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/style.css')}}">
</head>
<body class="">
  <video id="video" autoplay loop style="">
    <source src="{{ URL::asset('assets/video/bg-video.mp4')}}" type="video/mp4">
  </video>
    <div class="main-section mb-5">
      <div class="logo-section">
        <div class="row">
          <div class="col-12 col-md-10 col-lg-9 text-center text-md-end">
            <img class="logo" src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" style="max-width: 150px">
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                  <div class="teacher__thumb w-img fix">
                     <!-- <a href="{{ route('school-dashboard') }}">
                        <img src="{{ URL::asset('assets/img/main-section-img.jpg')}}" alt="">
                     </a> -->

                     <a href="{{ route('school-dashboard') }}">
                        <img src="{{ URL::asset('assets/img/main-section-img.jpg')}}" alt="">
                     </a>
                  </div>
                  <div class="teacher__content">
                     <h3 class="teacher__title"><a href="{{ route('school-dashboard') }}">apoGuru <sup>School</sup></a></h3> 
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                  <div class="teacher__thumb w-img fix">
                     <a href="{{ route('professional-dashboard') }}">
                        <img src="{{ URL::asset('assets/img/4.jpg')}}" alt="">
                     </a>
                  </div>
                  <div class="teacher__content">
                     <h3 class="teacher__title"><a href="{{ route('professional-dashboard') }}">apoGuru <sup>Professional</sup></a></h3> 
                  </div>
               </div>
            </div>
         </div>

      </div>
    </div>
    <script type="" src="{{ URL::asset('assets/js/school-js/bootstrap.js')}}"></script>
    <script type="" src="{{ URL::asset('assets/js/school-js/bootstrap.min.js')}}"></script>
  </body>
  </html>
