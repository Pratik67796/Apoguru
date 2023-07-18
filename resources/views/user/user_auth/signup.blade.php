@extends('user.comman.header')
@section('title') Register @endsection @section('content') 

<style type="">
  header{
    display: none;
  }
</style>

<section class="signup__area po-rel-z1 pt-50 pb-145">
   <div class="sign__shape">
      <img class="man-1" src="{{ URL::asset('assets/img/icon/sign/man-3.png')}}" alt="">
      <img class="man-2 man-22" src="{{ URL::asset('assets/img/icon/sign/man-2.png')}}" alt="">
      <img class="circle" src="{{ URL::asset('assets/img/icon/sign/circle.png')}}" alt="">
      <img class="zigzag" src="{{ URL::asset('assets/img/icon/sign/zigzag.png')}}" alt="">
      <img class="dot" src="{{ URL::asset('assets/img/icon/sign/dot.png')}}" alt="">
      <img class="bg" src="{{ URL::asset('assets/img/icon/sign/sign-up.png')}}" alt="">
      <img class="flower" src="{{ URL::asset('assets/img/icon/sign/flower.png')}}" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
            <div class="section__title-wrapper text-center mb-55">
               <h2 class="section__title">Create Account</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="sign__wrapper white-bg">
               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                  </div>
               @endif
              @if (Session::has('msg'))
               <div class="alert alert-success">
                   {{Session::get('msg')}}
               </div>
              @endif
              @if (Session::has('error'))
               <div class="alert alert-success">
                   {{Session::get('error')}}
               </div>
              @endif
               <div class="sign__form">
                  <form action="{{route('reg')}}" method="POST">
                     {{ csrf_field() }}
                     <div class="sign__input-wrapper mb-25">
                        <h5>Full Name</h5>
                        <div class="sign__input">
                           <input type="text" placeholder="First name" name="name" required>
                           <i class="fal fa-user"></i>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-25">
                        <h5>Last Name</h5>
                        <div class="sign__input">
                           <input type="text" placeholder="Last name" name="last_name" required>
                           <i class="fal fa-user"></i>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-25">
                        <h5>Phone</h5>
                        <div class="sign__input">
                           <input type="number" placeholder="Phone" name="phone" required>
                           <i class="fal fa-phone"></i>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-25">
                        <h5>Country Code</h5>
                        <div class="sign__input">
                           <select class="form-select input--style-4" name="country_code" aria-label="Default select example" style="border: 2px solid transparent;background: #f6f6f7;">
                              @foreach($code as $code)
                                   <option value="{{$code['dial_code']}}" >{{ $code['flag'] }} {{" "}} {{$code['dial_code']}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-25">
                        <h5 class="d-inline">Email</h5> <span>(Optional)</span>
                        <div class="sign__input">
                           <input type="email" placeholder="Email address" name="email">
                           <i class="fal fa-envelope"></i>
                        </div>
                     </div>
                     <div class="sign__input-wrapper mb-25">
                        <h5>Password</h5>
                        <div class="sign__input">
                           <input type="password" placeholder="Password" name="password" required>
                           <i class="fal fa-lock"></i>
                        </div>
                     </div>
                     <!-- <div class="sign__input-wrapper mb-10">
                        <h5>Re-Password</h5>
                        <div class="sign__input">
                           <input type="text" placeholder="Re-Password">
                           <i class="fal fa-lock"></i>
                        </div>
                     </div> -->
                     <div class="sign__action d-flex justify-content-between mb-30">
                        <div class="sign__agree d-flex align-items-center">
                           <input class="m-check-input" type="checkbox" id="m-agree">
                           <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms & Conditions</a>
                              </label>
                        </div>
                     </div>
                     <button class="e-btn w-100"> <span></span> Sign Up</button>
                     <div class="sign__new text-center mt-20">
                        <p>Already in apoGuru ? <a href="{{ route('login') }}"> Sign In</a></p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
@section('script')

@endsection