@extends('user.comman.header')
@section('title') Course @endsection @section('content') 

<style>
  header{
    display: none;
  }
</style>

<section class="pt-5 pb-50">
  <div class="container">
    <h1 class="text-end mt-3">{{$course[0]['parentSubCategory']['name']}}</h1>
    <div class="mt-40">
        <h3 class="mb-20"><img class="mr-5" src="{{URL::asset('child_sub_category_images')}}/{{$course[0]['childSubCategory']['image']}}" width="50">{{$course[0]['childSubCategory']['name']}}</h3>
      </div>
      <div class="row">
        @foreach($course as $k => $val)
            @php
              //$route = '';
              if($val->mainCategory->name == 'Professional'){
                $route = 'pro-course-buy';
              }elseif($val->mainCategory->name == 'school'){
                $route = 'course-details';
              }
            @endphp
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
              <div class="grid-item cat1 cat3 cat5">
                <div class="course__item white-bg mb-30 fix">
                  <div class="course__thumb w-img p-relative fix">
                    <a href="{{ route($route,['slug' => $val->slug,'uid' => $val->uid]) }}">
                      <img src="{{ asset('storage/course-images/'.$val->image )}}" alt="">
                    </a>
                    <div class="course__tag">
                      <a href="#" class="pink">BESTSELLER</a>
                    </div>
                  </div>
                  <div class="course__content">
                    <div class="course__meta d-flex align-items-center justify-content-between">
                      <div class="course__lesson">
                        <span><i class="far fa-book-alt"></i>72 Lesson</span>
                      </div>
                      <div class="course__rating">
                        <span><i class="icon_star"></i>4.5 (44)</span>
                      </div>
                    </div>
                    <h3 class="course__title">
                        <a href="{{ route($route,['slug' => $val->slug,'uid' => $val->uid]) }}">
                          {{strip_tags($val['title'])}}</a>
                    </h3>
                    <div class="course__teacher d-flex align-items-center">
                      <div class="course__teacher-thumb mr-15">
                        <img src="{{ URL::asset('assets/img/course/teacher/teacher-2.jpg')}}" alt="">
                      </div>
                      <h6><a href="{{ route('course-details',['slug' => $val->slug,'uid' => $val->uid]) }}">{{isset($val['User']['name'])?$val['User']['name']:'Admin'}}</a></h6>
                    </div>
                  </div>
                  <div class="course__more d-flex justify-content-between align-items-center">
                    <div class="course__status d-flex align-items-center">
                      <span class="green actual_price_{{$val->id}}"  data-id="{{$val->id}}">${{$val['actual_price']}}</span>
                      <span class="old-price sellprice_{{$val->id}}" data-id="{{$val->id}}">${{$val['sell_price']}}</span>
                    </div>
                    <div class="course__btn">
                      <a href="{{ route('course-details',['slug' => $val->slug,'uid' => $val->uid]) }}" class="link-btn">
                        Know Details
                        <i class="far fa-arrow-right"></i>
                        <i class="far fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    const data = <?php echo json_encode($course);?>;
        $.each(data,function(i,v){
            var id = v.id;
            var searchValue = v.actual_price;
            // console.log(searchValue);
            var searchValue_sell = v.sell_price;
            var resultFrom = v.currency;
            var resultTo = geoplugin_currencyCode();
            var simbol = getCurrencySymbol('en', resultTo);
            fetch(`${api}`)
              .then((response) => {
                return response.json();
              })
              .then((data) => {
                let fromRate = data.rates[resultFrom];
                let toRate = data.rates[resultTo];
                $('.actual_price_'+id).text(simbol+((toRate / fromRate) * searchValue).toFixed(2));
                $('.sellprice_'+id).text(simbol+((toRate / fromRate) * searchValue_sell).toFixed(2));
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