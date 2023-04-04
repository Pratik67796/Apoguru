@extends('user.comman.header')
@section('title')
Subcategory @endsection @section('content') 

<style type="">
  header{
    display: none;
  }
</style>
<section class="pt-5 pb-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 mb-60 mt-30 text-end">
        <h1>{{$parentcat_name['name']}}</h1>
      </div>
      @foreach($childsubcat as $key => $data)
        <div class="col-12 col-md-12 mt-3 d-flex align-items-center justify-content-between flex-wrap">
          <h3 class="mb-20"><img class="mr-5" src="{{ URL::asset('assets/ficon/voting.gif')}}" width="50">{{$data['name']}}</h3>
          <div class="category__more mb-2 fix">
            <a href="<?php echo '/course/'.$data['id']?>" class="link-btn">View all <i class="far fa-arrow-right"></i> <i class="far fa-arrow-right"></i></a>
          </div>
        </div>
        @foreach($data['getcourse_new'] as $k =>$data2)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat5 cat6">
          <div class="course__item white-bg mb-30 fix">
            <div class="course__thumb w-img p-relative fix">
              <a href="{{ route('course-buy') }}">
              <img src="{{asset('course_images/').'/'.$data2['image']}}" alt="">
              </a>
              <div class="course__tag">
                <a href="#" class="pink">BESTSELLER</a>
              </div>
            </div>
            <div class="course__content">
              <div class="course__meta d-flex align-items-center justify-content-between">
                <div class="course__lesson">
                  <span><i class="far fa-book-alt"></i>14 Lesson</span>
                </div>
                <div class="course__rating">
                  <span><i class="icon_star"></i>3.5 (55)</span>
                </div>
              </div>
              <h3 class="course__title"><a href="{{ route('course-buy') }}">{{strip_tags($data2['title'])}}</a></h3>
              <div class="course__teacher d-flex align-items-center">
                <div class="course__teacher-thumb mr-15">
                  <img src="{{ URL::asset('assets/img/course/teacher/teacher-3.jpg')}}" alt="">
                </div>
                <h6><a href="{{ route('course-buy') }}">{{isset($data2['User']['name'])?$data2['User']['name']:'Admin'}}</a></h6>
              </div>
            </div>
            <div class="course__more d-flex justify-content-between align-items-center">
              <div class="course__status d-flex align-items-center">
                <span class="green actual_price_{{$data2->id}}" data-id="{{$data2->id}}">${{$data2['actual_price']}}</span>
                <span class="old-price sellprice_{{$data2->id}}" data-id="{{$data2->id}}">${{$data2['sell_price']}}</span>
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
      @endforeach
    </div>
  </div>
</section>
@endsection
@section('script')

<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    const api = "https://api.exchangerate-api.com/v4/latest/USD";
    const data = <?php echo json_encode($childsubcat);?>;
    // console.log(data);
    $.each(data, function( index, value ) {
      $.each(value.getcourse_new,function(i,v){
        var id = v.id;
        var searchValue = v.actual_price;
        var searchValue_sell = v.sell_price;
        var resultFrom = v.currency;
        var resultTo = geoplugin_currencyCode();
        var simbol = getCurrencySymbol('en', resultTo);
        // console.log(simbol);
        fetch(`${api}`)
          .then((response) => {
            return response.json();
          })
          .then((data) => {
            // console.log(data)
            let fromRate = data.rates[resultFrom];
            let toRate = data.rates[resultTo];
            // console.log(simbol+((toRate / fromRate) * searchValue).toFixed(2));
            $('.actual_price_'+id).text(simbol+((toRate / fromRate) * searchValue).toFixed(2));
            $('.sellprice_'+id).text(simbol+((toRate / fromRate) * searchValue_sell).toFixed(2));
          });
      });
    }); 
  });

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


</script>

@endsection
