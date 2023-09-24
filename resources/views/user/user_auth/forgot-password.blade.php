@extends('user.comman.header')
@section('title') Sign in @endsection @section('content') 

<style type="">
  header{
    display: none;
  }
</style>

<section class="signup__area po-rel-z1 pt-50 pb-145">
   <div class="sign__shape">
      <img class="man-1" src="{{ URL::asset('assets/img/icon/sign/man-1.png')}}" alt="">
      <img class="man-2" src="{{ URL::asset('assets/img/icon/sign/man-2.png')}}" alt="">
      <img class="circle" src="{{ URL::asset('assets/img/icon/sign/circle.png')}}" alt="">
      <img class="zigzag" src="{{ URL::asset('assets/img/icon/sign/zigzag.png')}}" alt="">
      <img class="dot" src="{{ URL::asset('assets/img/icon/sign/dot.png')}}" alt="">
      <img class="bg" src="{{ URL::asset('assets/img/icon/sign/sign-up.png')}}" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
            <div class="section__title-wrapper text-center mb-55">
               <h2 class="section__title">Forgot Password</h2>
               <!-- <p>it you don't have an account you can <a href="#">Register here!</a></p> -->
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="sign__wrapper white-bg">

                @if($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                @endif


               <div class="sign__form">
                  <form method="POST" action="#">
                      @csrf
                     <div class="sign__input-wrapper mb-25">
                        <h5>Phone</h5>
                        <div class="sign__input">
                           <input type="number" name="phone" placeholder="Phone" required>
                           <i class="fal fa-phone"></i>
                        </div>
                     </div>
                     <button class="e-btn  w-100"> <span></span> Submit</button>
                     <div class="sign__new text-center mt-20">
                        <p>New to apoGuru? <a href="{{ route('login') }}">Sign In</a></p>
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