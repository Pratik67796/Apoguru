<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>apoGuru - Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
  <style>

    .profile-body .pro-header{
      margin-bottom: 1.5rem;
    }

    .profile-body .in-pr-main-content-wrapper {
      padding-right: 20px;
      padding-top: 20px;
    }

    .profile-body .page-content-wrapper{
      padding-left: 110px;
    }

    .profile-body .admin-tab-menu{
      background-color: #fafafa;
      margin-right: 1.5rem;
      margin-left: 1.3rem;
      border-radius: 25px;
      top: 20px;
      padding-top: 25px;
    }

    .profile-body .admin-tab-menu a,.profile-body .admin-tab-menu button{
      border-radius: 0;
      font-weight: 500;
      background-color: transparent; 
      border: none;
    }

    .profile-body .admin-tab-menu a.active, .profile-body .admin-tab-menu a:hover{
      border:none;
      background-color: #e0fbeb;
      border-radius: 0;
      color: #309255;
      border-left: 4px solid #c1e0cd;
    }

    .profile-body .admin-tab-menu button.active, .profile-body .admin-tab-menu button:hover{
      border:none;
      background-color: #e0fbeb;
      border-radius: 0;
      color: #309255;
      border-left: 4px solid #c1e0cd;
    }

    .profile-body .in-pro-admin-tab-menu a i{
      font-size: 19px;
      margin-right: 8px;
    }

    .profile-body .in-pro-admin-tab-menu button i{
      font-size: 19px;
      margin-right: 8px;
    }

    .cust-drop .nice-select.open .list{
      width: 100%;
    }

    label{
      font-size: 13px;
      margin-bottom: 5px;
    }

    /***************************************************************/

    form .btn-success{
      height: 45px;
      line-height: 45px;
    }

    form .flex-input-field{
      display: flex;
      align-items: center;
    }

    form .flex-input-field .icon-input{
      width: 47px;
      padding-right: 18px;
      background-color: #cccbcb;
      margin-right: -2px;
    }

  </style>
</head>

<!-- Modal -->
<div class="modal fade" id="logout_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logout_ModalLabel">Logout</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-items-center justify-content-between my-4">
          <p class="text-center my-10">You want to logout?</p>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<body class="profile-body">
  <div class="main-wrapper main-wrapper-02 inst-pro-main">
    <div class="section overflow-hidden position-relative" id="wrapper">
      <div class="sidebar-wrapper in-pro-sidewraper">
        <div class="menu-list">
          <a class="active" href=""><img src="{{ URL::asset('assets/images/menu-icon/icon-1.png')}}" alt="Icon"></a>
          <a href="messages.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-2.png')}}" alt="Icon"></a>
          <a href="overview.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-3.png')}}" alt="Icon"></a>
          <a href="engagement.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-4.png')}}" alt="Icon"></a>
          <a href="traffic-conversion.html"><img src="{{ URL::asset('assets/images/menu-icon/icon-5.png')}}" alt="icon"></a>
        </div>
      </div>
      <div class="page-content-wrapper ps-0 py-0">
        <div class="main-content-wrapper in-pr-main-content-wrapper ms-md-4 ps-0">
          <div class="pro-header mb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div>
                <a href="{{ route('details-course') }}" class="course-back-btn"><i class="icofont-simple-left"></i> Back</a>

              </div>
              <div class="login-header-action ml-auto pe-0">
                <div class="dropdown">
                  <button class="action notification" data-bs-toggle="dropdown">
                    <i class="flaticon-notification"></i>
                    <span class="active"></span>
                  </button>
                  <div class="dropdown-menu dropdown-notification">
                    <ul class="notification-items-list">
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p>
                              <strong>Martin</strong> has added a <strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-shopping-cart"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                      <li class="notification-item">
                        <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                        <div class="dropdown-body">
                          <a href="#">
                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#">See all notifications <i class="icofont-simple-right"></i></a>
                  </div>
                </div>
                <a class="action author" href="#">
                  <img src="{{ URL::asset('assets/images/author/author-07.jpg')}}" alt="Author">
                </a>
                <div class="dropdown">
                  <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown" style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a class="" href="#"><i class="icofont-user"></i> Profile</a></li>
                    <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li>
                    <li><a class="" href="#"><i class="icofont-logout"></i> Sign Out</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="login-header-action d-flex flex-wrap align-items-center justify-content-end pe-0">
              <button class="btn-white mb-3"><i class="far fa-filter"></i></button>
              <div class="d-flex align-items-center cust-dropdown mb-3">
                <p class="mb-0">Sort by</p>
                <select style="font-weight: 600;">
                  <option data-display="All Category">All Category</option>
                  <option value="1">option</option>
                  <option value="2">option</option>
                  <option value="3">option</option>
                </select>
              </div>
              <button class="btn-white mb-3"><i class="fas fa-bars"></i></button>
              <button class="btn-green mb-3"><i class="fas fa-border-all"></i></button>
            </div>
          </div>
          <div class="container-fluid main__div">

            <h4 class="my-3">Edit Course Information</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Choose Course Type</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="parent-sub-category">Parent Subcategory</label>
                <select id="parent-sub-category" class="w-100" >
                  <option>Select Parent Subcategory</option>
                  <option>Parent Subcategory</option>
                  <option>Parent Subcategory</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="child-subcategory">Child Subcategory</label>
                <select class="w-100" id="child-subcategory">
                  <option>Select Child Subcategory</option>
                  <option>Child Subcategory</option>
                  <option>Child Subcategory</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="course-name">Course Name</label>
                <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
              </div>

              <div class="row g-0">
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="course-name">Actual Selling Price</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="usd-price">Price In USD</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input class="w-100 nice-select float-none" type="text" placeholder="Price In USD" name="usd-price" id="usd-price">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="sell-price">Sell Price (Optional)</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input type="text" class="w-100 nice-select float-none" placeholder="Write here..." name="sell-price" id="sell-price">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                  <div class="form-group pb-3">
                    <label for="sell-price">Sell Price In USD</label>
                    <div class="flex-input-field">
                      <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                      <input type="text" class="w-100 nice-select float-none" placeholder="Sell Price In USD" name="sell-price" id="sell-price">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group mb-3">
                <label>Description</label>
                <textarea class="w-100 nice-select float-none" placeholder="Write here..." id="desc" name="desc"></textarea>
              </div>

              <div class="form-group mb-3 text-center">
                <a id="creat_course" href="" class="btn btn-success">Update</a>
              </div>
            </form>
          </div>

          <div class="container-fluid main__div mt-4">
            <h4 class="mb-3">Edit Topics</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Choose Course</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="course-name">Add Principle Topic</label>
                <input class="w-100 nice-select float-none" type="text" placeholder="Write here..." name="course-name" id="course-name">
              </div>
              <div class="form-group mb-3 text-center">
                <a id="creat_course" href="" class="btn btn-success">Update</a>
              </div>
            </form>
          </div>

          <div class="container-fluid main__div mt-4">
            <h4 class="my-3">Edit Course Resources</h4>
            <form class="row cust-drop">
              <div class="form-group pb-3">
                <label for="course-type">Select Course</label>
                <select id="course-type" class="w-100">
                  <option>Select Course Type</option>
                  <option>Course Type</option>
                  <option>Course Type</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <label for="topic-type">Select topic</label>
                <select id="topic-type" class="w-100">
                  <option>Select Topic </option>
                  <option>Topic 1</option>
                  <option>Topic 2</option>
                </select>
              </div>
              <div class="form-group mb-3 text-center">
                <a id="creat_course" href="" class="btn btn-success">Update</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="section footer-section">
      <div class="footer-widget-section">
        <img class="shape-1 animation-down" src="{{ URL::asset('assets/images/shape/shape-21.png')}}" alt="Shape">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">
              <div class="footer-widget">
                <div class="widget-logo">
                  <a href="index.html"><img src="{{ asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="140"></a>
                </div>
                <div class="widget-address">
                  <h4 class="footer-widget-title">Caribbean Ct</h4>
                  <p>Haymarket, Virginia (VA).</p>
                </div>
                <ul class="widget-info">
                  <li>
                    <p> <i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a> </p>
                  </li>
                  <li>
                    <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                  </li>
                </ul>
                <ul class="widget-social">
                  <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                  <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                  <li><a href="#"><i class="flaticon-skype"></i></a></li>
                  <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 order-md-3 order-lg-2">
              <div class="footer-widget-link">
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Category</h4>
                  <ul class="widget-link">
                    <li><a href="#">Creative Writing</a></li>
                    <li><a href="#">Film & Video</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Business Analytics</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Quick Links</h4>
                  <ul class="widget-link">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Discussion</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Course FAQ’s</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">
              <div class="footer-widget">
                <h4 class="footer-widget-title">Join Now</h4>
                <div class="widget-subscribe">
                  <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>
                  <div class="widget-form">
                    <form action="#">
                      <input type="text" placeholder="Email here">
                      <button class="btn btn-primary btn-hover-dark">Join Now</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="shape-2 animation-left" src="{{ URL::asset('assets/images/shape/shape-22.png')}}" alt="Shape">
      </div>
      <div class="footer-copyright">
        <div class="container">
          <div class="copyright-wrapper">
            <div class="copyright-link">
              <a href="#">Terms of Service</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Sitemap</a>
              <a href="#">Security</a>
            </div>
            <div class="copyright-text">
              <p>&copy; 2023 <span> apoGuru </span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="back-to-top">
      <i class="icofont-simple-up"></i>
    </a>
  </div>

  <script src="{{ URL::asset('assets/js/professional-js/vendor/modernizr-3.11.2.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/vendor/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/main.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.world.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/plugins/jquery.vmap.sampledata.js')}}"></script>
  <script src="{{ URL::asset('assets/js/professional-js/student-map.js')}}"></script>

  <script type="">
    $(".switch.on").click(function(){
      $(this).removeClass("on");
      $(this).addClass("off");
      $(".switch img").attr("src" , "{{ URL::asset('assets/images/icon-learner-switch.png')}}");
    });
  </script>


  <script type="text/javascript">
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
        title: {
            text: "Subscription Graph"               
        },
        axisX:{      
            valueFormatString: "DD-MM-YYYY" ,
            labelAngle: -50
        },
        axisY: {
          valueFormatString: "#,###"
      },

      data: [
      {        
        type: "area",
        color: "#c9e7c0",
        dataPoints: [

        { x: new Date(2012, 06, 15), y: 0},       
        { x: new Date(2012, 06, 18), y: 20 }, 
        { x: new Date(2012, 06, 23), y: 30 }, 
        { x: new Date(2012, 07, 1), y: 10}, 
        { x: new Date(2012, 07, 11), y: 21}, 
        { x: new Date(2012, 07, 23), y: 50} ,
        { x: new Date(2012, 07, 31), y: 75}, 
        { x: new Date(2012, 08, 18), y: 20}, 
        { x: new Date(2012, 08, 21), y: 22}, 
        { x: new Date(2012, 08, 24), y: 25}, 
        { x: new Date(2012, 08, 26), y: 27}, 
        { x: new Date(2012, 08, 28), y: 30} 
        ]
    }
    
    ]
});

chart.render();
}
</script>
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js')}}"></script>

</body>

</html>