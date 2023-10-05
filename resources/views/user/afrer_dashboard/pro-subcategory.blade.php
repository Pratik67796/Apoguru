<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/plugins/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">

<section class="pt-5 pb-100 pro-sub-cat-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 mb-5 text-end">
        <h1>{{$parentcat_name['name']}} </h1>
      </div>
      @foreach($childsubcat as $key => $data)
        <div class="col-12 col-md-12 mt-3 d-flex align-items-center justify-content-between flex-wrap">
          <h3 class="mb-20"><img class="mr-5" src="{{ URL::asset('assets/ficon/voting.gif')}}" width="50">{{$data['name']}}</h3>
          <div class="category__more mb-2 fix">
            <a href="<?php echo '/course/'.$data['id']?>" class="link-btn">View all<i class="icofont-arrow-right"></i><i class="icofont-arrow-right"></i></a>
          </div>
        </div>
        @foreach($data->getcourse_new as $k =>$data2)
          @php
            $ratings = $data2->getRating->pluck('rating');
            $totalRatings = count($ratings);
            $averageRating = $totalRatings > 0 ? $ratings->sum() / $totalRatings : 0;
            $totalAverageRatings = $averageRating * 2 * 10;
          @endphp
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <div class="single-courses">
              <div class="courses-images">
                <a href="{{ route('pro-course-buy',['slug' => $data2->slug,'uid'=>$data2->uid]) }}">
                  <img src="{{ asset('storage/course-images/'.$data2->image) }}" alt="Courses">
                </a>
              </div>
              <div class="courses-content">
                <div class="courses-author">
                  <div class="author">
                    <div class="author-thumb">
                      <a href="javascript:void(0)"><img src="{{ URL::asset('assets/images/author/author-02.jpg')}}" alt="Author"></a>
                    </div>
                    <div class="author-name">
                      <a class="name" href="{{ route('pro-course-buy',['slug' => $data2->slug,'uid'=>$data2->uid]) }}">{{isset($data2['User']['name'])?$data2['User']['name']:'Admin'}}</a>
                    </div>
                  </div>
                  <div class="tag">
                    <a href="javascript:void(0)">Science</a>
                  </div>
                </div>
                <h4 class="title">
                  <a href="{{ route('pro-course-buy',['slug' => $data2->slug,'uid'=>$data2->uid]) }}">{{strip_tags($data2['title'])}}</a>
                </h4>
                <div class="courses-meta">
                  <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                  <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                </div>
                <div class="courses-price-review">
                  <div class="courses-price">
                    <span class="sale-parice">${{$data2['sell_price']}}</span>
                  </div>
                  <div class="courses-review">
                    <span class="rating-count">{{ $averageRating }}</span>
                    <span class="rating-star">
                    <span class="rating-bar" style="width: {{ $totalAverageRatings }}% !important;"></span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endforeach  
    </div>
  </div>
</section>
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

<script src="{{ URL::asset('assets/js/school-js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/vendor/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/jquery.meanmenu.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/swiper-bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/jquery.fancybox.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/isotope.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/parallax.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/backToTop.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/jquery.counterup.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/ajax-form.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/wow.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/school-js/main.js')}}"></script>
