<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>apoGuru - Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/school-css/fontAwesome5Pro.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/vendor/plugins.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/style.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/professional-css/custom.css')}}">
  <style>
    body.profile-body {
      background-color: #b7dfabbd;
      background-image: url('{{ URL::asset('assets/images/bg-2.png')}}');
    }
    .profile-body .pro-header{
      /*background: #fafafa;
      border-radius: 25px;*/
      margin-bottom: 1.5rem;
    }
    .profile-body .in-pr-main-content-wrapper {
      /*padding-left: 216px;*/
      padding-right: 20px;
      padding-top: 20px;
    }

    .profile-body .main__div{
      background-color: #fafafa;
      border-radius: 25px;
      padding: .4rem 1.5rem .4rem 1.5rem;
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

  </style>
</head>

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
        <p class="text-center my-10">You want to logout?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="withdraw_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="withdraw_ModalLabel">Withdraw</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="text-left mb-3">Select Withdrawal Option</h6>
        <form>
          <div class="form-group">
            <select class="destroy form-control select-withrow" id="Withdraw-option">
              <option value="Two">Mobile Money</option>
              <option value="One">Bank Transfer</option>
              <option value="Three">Crypto</option>
            </select>
          </div>
        </form>
        <div class="withdraw-content mt-5">
          <div class="myDiv" id="showOne">
            <div class="first-wrapper">
              <h6 class="mb-3">Specify Payment Details :</h6>
              <form>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Bank Name">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Branch Name">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Bank Address">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Account Number">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Account Holder's Name">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" name="" placeholder="Enter Amount In USD">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="myDiv first" id="showTwo">
            <div class="second-wrapper">
              <h6 class="mb-3">Specify Payment Details :</h6>
              <form>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <div class="input-field d-flex align-items-center">
                        <select class="form-control" style="max-width: 120px; display: none;">
                          <option>Select Code</option>
                          <option>+ 01</option>
                          <option>+ 02</option>
                          <option>+ 03</option>
                          <option>+ 04</option>
                          <option>+ 05</option>
                        </select>
                        <input type="text" class="form-control" name="" placeholder="Phone Number">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="" placeholder="Mobile Network">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" name="" placeholder="Enter Amount In USD">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <div class="myDiv" id="showThree">
            <div class="third-wrapper">
              <h6 class="mb-3">Specify Payment Details :</h6>
              <form>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option>Select Cryptocurrency</option>
                        <option>USDT</option>
                        <option>BUSD</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="texts" class="form-control" name="" placeholder="Binance Pay ID">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" name="" placeholder="Enter Amount In USD">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
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
      <div class="page-content-wrapper py-0">
        <div class="nav flex-column admin-tab-menu in-pro-admin-tab-menu">
          <a class="action author" href="index.html" style="height: 58px;text-align: center;background: none;border:none;padding-left: 0;padding-right: 0;">
              <img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Author" style="width:120px;">
          </a>
          <h5 class="title"> Instructor Dashboard</h5>
          <!-- <a href="profile-home.html"><i class="icofont-home"></i> Home</a> -->
          <a href="my-profile.html"><i class="icofont-user-alt-7"></i> My Profile & Account</a>
          <a href="creat-course.html"><i class="icofont-ruler-compass-alt"></i> Create a Course</a>
          <a href="created-course.html"><i class="icofont-ruler-compass-alt"></i>Course I have Created</a>
          <a class="active" href="wallet.html"><i class="fas fa-sack-dollar"></i> Wallet</a>
          <!-- <a href="my-course"><i class="icofont-computer"></i> My Courses</a>
          <a href="my-wishlist"><i class="icofont-heart"></i> My Wishlist</a>
          <a href="subscription-history"><i class="icofont-history"></i> Subscription History</a>
          <a href="cart"><i class="icofont-shopping-cart"></i> View Cart</a>
          <a href="payouts"  class="active"><i class="icofont-credit-card"></i> Payouts</a>
          <button data-bs-toggle="modal" data-bs-target="#logout_Modal"><i class="icofont-logout"></i> Logout</button> -->
        </div>
        <div class="main-content-wrapper in-pr-main-content-wrapper">
          <div class="pro-header mb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="d-flex align-items-center">
                <i class="fas fa-chevron-circle-right mob-menu-opener me-3 d-md-none" style="font-size: 18px;"></i>
                <h5 class="mb-0">Wallet</h5>

                <ul class="list-inline text-center switch-toggler-list icon-switch" title="Learner Dashboard">
                  <li>
                    <a href="../s-profile/s-my-profile.html">
                      <label class="switch on">
                        <span class="slider round"><img src="{{ URL::asset('assets/images/icon-instructor-switch.png')}}" width="40"></span>
                      </label>
                    </a>
                  </li>
                </ul>
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
                  <!-- <button class="action more" data-bs-toggle="dropdown">
                    <span></span>
                    <span></span>
                    <span></span>
                  </button> -->
                  <a href="javascript:voidmain(0);" class="" data-bs-toggle="dropdown" style="font-weight: 500;"> Martin nel <i class="icofont-caret-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a class="" href="#"><i class="icofont-user"></i> Profile</a></li>
                    <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li>
                    <li><a class="" href="#"><i class="icofont-logout"></i> Sign Out</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="login-header-action d-flex align-items-center justify-content-end flex-wrap pe-0">
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
            <div class="row">
              <div class="col-12 col-md-9 col-lg-6">
                <div class="total-bal">
                  <p class="text-center">Total Balance <i class="icofont-info-circle" title="Info" style="font-size: 20px;color: #309255;"></i></p>
                  <div class="row">
                    <div class="col-6 my-5 text-center">
                      <h6>USD</h6>
                      <h5 class=""> $ 7610.00</h5>
                    </div>
                    <div class="col-6 my-5 text-center">
                      <h6>Local</h6>
                      <h5 class=""> $ 7610.00</h5>
                    </div>
                  </div>
                  <div class="text-center">
                    <a class="btn btn-cust-success" data-bs-toggle="modal" data-bs-target="#withdraw_Modal">Withdraw</a>
                  </div>
                </div>
              </div>
              <!-- <div class="col-12 col-md-6">
                <div class="total-bal">
                  <span>Total Balance</span>
                  <h4 class="text-center my-4">$ 7610.00</h4>
                  <a href="" class="btn btn-cust-light">Deposit</a>
                  <a href="" class="btn btn-cust-success">Withdraw</a>
                </div>
              </div> -->
              
            </div>
            
            <div class="history-table">
              <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-6">
                  <h6>Transaction History</h6>
                </div>
                <div class="col-12 col-sm-6">
                  <input type="text" name="" class="search-input form-control" placeholder="Search here...">
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="thead-success">
                    <tr>
                      <th>#</th>
                      <th>Transaction Id</th>
                      <th>Course Name</th>
                      <th>Location</th>
                      <th>Amount</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>010101</td>
                      <td>Data Science and Machine Learning</td>
                      <td>Debited</td>
                      <td>$ 120</td>
                      <td>10/10/2023</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>020101</td>
                      <td>Digital Learning Online</td>
                      <td>Credited</td>
                      <td>$ 100</td>
                      <td>12/10/2023</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>030101</td>
                      <td>Learn what you Love</td>
                      <td>Credited</td>
                      <td>$ 500</td>
                      <td>13/10/2023</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
            </div>

            <div class="history-table">
              <div class="row align-items-center justify-content-between">
                <div class="col-12 col-sm-6">
                  <h6>Withdrawal History</h6>
                </div>
                <div class="col-12 col-sm-6">
                  <input type="text" name="" class="search-input form-control" placeholder="Search here...">
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="thead-success">
                    <tr>
                      <th>#</th>
                      <th>Currency</th>
                      <th>Withdrawal Method</th>
                      <th>Status</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>USDT</td>
                      <td>Bank Transfer</td>
                      <td>Pending</td>
                      <td>10/10/2023</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cash</td>
                      <td>Mobile Money</td>
                      <td>Completed</td>
                      <td>12/10/2023</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>BUSD</td>
                      <td>Crypto</td>
                      <td>Failed</td>
                      <td>13/10/2023</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
            </div>

            <!-- <div class="students-map">
              <h4 class="title">Student's locations and languages.</h4>
              <div class="map">
                <div id="vmap"></div>
              </div>
            </div> -->
            <!-- <div class="students-widget">
              <div class="row">
                <div class="col-xxl-4">
                  <div class="single-student-widget widget-color-01">
                    <h4 class="widget-title">95 Country</h4>
                    <div class="widget-items">
                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-2.png')}}" alt="Flag">
                          </div>
                          <div class="title">Bangladesh</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 80%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>80%</span> (722)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-3.png')}}" alt="Flag">
                          </div>
                          <div class="title">Pakistan</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 15%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>15%</span> (284)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-4.png')}}" alt="Flag">
                          </div>
                          <div class="title">USA</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 30%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>30%</span> (306)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-1.png')}}" alt="Flag">
                          </div>
                          <div class="title">Brazil</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 90%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>90%</span> (835)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-5.png')}}" alt="Flag">
                          </div>
                          <div class="title">Belgium</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 10%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>10%</span> (152)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="item-flag">
                          <div class="flag">
                            <img src="{{ URL::asset('assets/images/flag/flag-6.png')}}" alt="Flag">
                          </div>
                          <div class="title">Azerbaijan</div>
                        </div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 50%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>50%</span> (635)</p>
                        </div>
                      </div>

                    </div>

                    <div class="page-pagination">
                      <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                      </ul>
                    </div>

                  </div>

                </div>

                <div class="col-xxl-4">

                  <div class="single-student-widget widget-color-02">
                    <h4 class="widget-title">30 Languages</h4>

                    <div class="widget-items">

                      <div class="single-item">
                        <div class="title">1. English</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 80%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>80%</span> (538)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="title">2. Spanish</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 2.5%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>2.5%</span> (189)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">3. French</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 6.8%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>6.8%</span> (263)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">4. Arabic</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 92%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>92%</span> (794)</p>
                        </div>
                      </div>

                      <div class="single-item">
                        <div class="title">5. Greek</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 9.2%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>9.2%</span> (212)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">6. Russian</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 83%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>83%</span> (516)</p>
                        </div>
                      </div>
                    </div>
                    <div class="page-pagination">
                      <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4">
                  <div class="single-student-widget widget-color-03">
                    <h4 class="widget-title">Additional Student Interests</h4>
                    <div class="widget-items">
                      <div class="single-item">
                        <div class="title">1. WordPress</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 80%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>80%</span> (538)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">2. SEO</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 25%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>25%</span> (189)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">3. Python</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 60%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>60%</span> (263)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">4. Marketing</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 92%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>92%</span> (794)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">5. Development</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 39%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>39%</span> (212)</p>
                        </div>
                      </div>
                      <div class="single-item">
                        <div class="title">6. UX Design</div>
                        <div class="item-bar">
                          <div class="bar-line" style="width: 83%;"></div>
                        </div>
                        <div class="item-percentage">
                          <p><span>83%</span> (516)</p>
                        </div>
                      </div>
                    </div>
                    <div class="page-pagination">
                      <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
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
                  <a href="index.html"><img src="{{ URL::asset('assets/images/apoGuru-logo.png')}}" alt="Logo" width="140"></a>
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

  <script>
    $(document).ready(function(){
        $('.select-withrow').on('change', function(){
          var demovalue = $(this).val(); 
            $("div.myDiv").hide();
            $("#show"+demovalue).show();
        });
    });
  </script> 

  <script type="">
    $("select.destroy").niceSelect("destroy");
  </script>

</body>

</html>