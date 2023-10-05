@extends('admin.layouts.master')

@section('title')
apoGuru - Reminders
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Reminders</h2>
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
                            Add New Reminders
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.user.reminder.update',$userreminder->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                      <select id="user_id" class="form-control show-tick" name="user_id"  required disabled>
                                            <option value="">--Select User--</option>
                                            @foreach($users as $category)
                                                    <option value="{{$category->id}}" {{ ($category->id == $userreminder->user_id) ? 'Selected':'' }}>{{$category->name}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <input type="text" name="title" value ="{{$userreminder->title}}" class="form-control" required>
                                        <label class="form-label">Reminder Title</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <label for="Date of Birth" style="font-weight: 100;margin-bottom: 8px;color: #ac8e8ef5;border: 0px;">
                                        <input type="date" name="date"  value ="{{$userreminder->date}}">
                                    </label>
                                 </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group form-float">
                                      <div class="form-line" style="padding: 7px;top: -7px;">   
                                        <input type="time" id="appt" name="time"  value ="{{$userreminder->time}}">
                                       </div>
                                  </div>
                              </div>
                              
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                 Reminder Description
                                            </h2>
                                        </div>
                                        <div class="body">
                                          <textarea name="description" class="ckeditor"> {!! $userreminder->description !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update"/>
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


@endsection
