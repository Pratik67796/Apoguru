@extends('admin.layouts.master')

@section('title')
apoGuru - Admin-add
@endsection

@section('styles')

<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
{{-- <link href="../../../css/app.css"> --}}
<link rel="stylesheet" href="../css/app.css">

<style>
    .eye-icon{
        position: absolute;
        top: 26%;
        left: 95%;
        z-index: 120;
        opacity: 0;
    }

    .show-password{
        background-image: url('../../../../image/icon-form-control-password.png');
        /* icon-form-control-password.png */
        background-repeat: no-repeat;
        background-size: 20px;
        background-position: right;

    }

    .hide-password{
        background-image: url('../../../../image/icon-form-control-password-hidden.png' );  
        /* url("../../image/icon-form-control-password-hidden.png"); */
        background-repeat: no-repeat;
        background-size: 20px;
        background-position: right;
    }

    .eye-icon1{
        position: absolute;
        top: 26%;
        left: 95%;
        z-index: 120;
        opacity: 0;
    }
    .show-password1{
        background-image: url('../../../../image/icon-form-control-password.png');
        /* icon-form-control-password.png */
        background-repeat: no-repeat;
        background-size: 20px;
        background-position: right;

    }

    .hide-password1{
        background-image: url('../../../../image/icon-form-control-password-hidden.png' );  
        /* url("../../image/icon-form-control-password-hidden.png"); */
        background-repeat: no-repeat;
        background-size: 20px;
        background-position: right;
    }

</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Admin</h2>
        </div>

        <!-- Vertical Layout -->

        <!-- #END# Vertical Layout -->
        <!-- Vertical Layout | With Floating Label -->

        <!-- Vertical Layout | With Floating Label -->
        <!-- Horizontal Layout -->

        <!-- #END# Horizontal Layout -->
        <!-- Inline Layout -->

        <!-- #END# Inline Layout -->
        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                <div class="card">
                    <div class="header">
                        <h2>
                            Add New Admin
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.add.admin') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" name="name" class="form-control" required>
                                          <label class="form-label">Admin Name</label>
                                      </div>
                                    </div>
                                </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" name="email" class="form-control" required>
                                          <label class="form-label">Email</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control password-input1 hide-password1" required>
                                        <i class="fa-solid fa-eye eye-icon1"></i>
                                        <label class="form-label">Enter Password</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line position-relative">
                                        <input type="password" name="password_confirmation" class="form-control password-input hide-password" required>
                                        <i class="fa-solid fa-eye eye-icon"></i>
                                        <label class="form-label">Confirm Password</label>
                                    </div>
                                  </div>
                              </div>
                              
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                    <select id="user_id" class="form-control show-tick" name="role_as"  required>
                                            <option value="">--Select Role--</option>
                                            <option value="0">Senior Admin</option>
                                            <option value="1">Junior Admin</option>
                                            <option value="2">Customer Care</option>
                                          
                                          </select>
                                    </div>
                                  </div>
                              </div>
                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="ADD-ADMIN"/>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


      
        <!-- #END# Inline Layout | With Floating Label -->
        <!-- Multi Column -->
        <!-- #END# Multi Column -->
    </div>
</section>
@endsection

@section('scripts')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>


<!-- Ckeditor -->
<script src="{{ URL::asset('admin_theme/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/ckfinder/ckfinder.js')}}"></script>
<script>
//CKEditor
var description = CKEDITOR.replace( 'description' );
CKFinder.setupCKEditor( description );
//CKEDITOR.replace( 'Description' );
//CKFinder.setupCKEditor( Description );
CKEDITOR.add

//CKEDITOR.replace( 'question' );
var question = CKEDITOR.replace( 'question' );
CKFinder.setupCKEditor( question );
CKEDITOR.add

</script>

<script>
    $(".eye-icon").click(function(){
        $(".password-input").toggleClass("show-password");
        $(".show-password").attr("type" , "text");
        $(".password-input").toggleClass("hide-password");
        $(".hide-password").attr("type" , "password");
    })
</script>

<script>
    $(".eye-icon1").click(function(){
        $(".password-input1").toggleClass("show-password1");
        $(".show-password1").attr("type" , "text");
        $(".password-input1").toggleClass("hide-password1");
        $(".hide-password1").attr("type" , "password");
    })
</script>


@endsection
