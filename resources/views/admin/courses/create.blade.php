@extends('admin.layouts.master')

@section('title')
apoGuru - Create Course
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Courses</h2>
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
                            Add New Course
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.course.store') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="currency" value="" id="currency">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="main_category" class="form-control show-tick" name="main_category_id" required>
                                            <option value="">--Select Main Category--</option>
                                            @foreach($main_categories as $category)
                                              <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="parent_sub_category" class="form-control show-tick" name="parent_sub_category_id" required>
                                            <option value="">--Select Parent Sub Category--</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="child_sub_category_id" required>
                                            <option value="">--Select Child Sub Category--</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" name="title" class="form-control" required>
                                          <label class="form-label">Course Title</label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" id="actual_price" name="actual_price" class="form-control" required>
                                          <label class="form-label">Enter Actual Price</label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" name="sell_price" class="form-control" required>
                                          <label class="form-label">Enter Sell Price</label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Enter Course Description
                                            </h2>
                                        </div>
                                        <div class="body">
                                          <textarea name="description" class="ckeditor"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="file" name="image" class="form-control" required>
                                          <label class="form-label">Choose Course Image</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="recommeded_course" class="form-control show-tick" name="recommeded_course[]" multiple>
                                            <option value="">--Select Recommeded Course--</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add Course"/>
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

<script src="{{ URL::asset('admin_theme/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('admin_theme/plugins/ckfinder/ckfinder.js')}}"></script>
<script>
//CKEditor
var description = CKEDITOR.replace( 'description' );
CKFinder.setupCKEditor( description );
//CKEDITOR.replace( 'preamble' );
//CKFinder.setupCKEditor( editor );
CKEDITOR.add
</script>

<script>
$('#main_category').on('change', function (e) {
  var main_category_id = $(this).val();
  $.ajax({
    type: "POST",
    url: "{{route('admin.get.parent.sub.category.from.main.category')}}",
    dataType: 'json',
    data: {
      "_token": "{{ csrf_token() }}",
      "main_category_id": main_category_id,
    }
  }).done(function(data) {
    console.log(data);

    $('#parent_sub_category option:not(:first)').remove();

    $.each(data, function(key, value) {
    $('#parent_sub_category')
      .append($("<option></option>")
      .attr("value", value.id)
      .text(value.name));
    });

    $('#parent_sub_category').selectpicker('refresh');

  });
});

$('#parent_sub_category').on('change', function (e) {
  var parent_sub_category_id = $(this).val();
  $.ajax({
    type: "POST",
    url: "{{route('admin.get.child.sub.category.from.parent.sub.category')}}",
    dataType: 'json',
    data: {
      "_token": "{{ csrf_token() }}",
      "parent_sub_category_id": parent_sub_category_id,
    }
  }).done(function(data) {
    console.log(data);

    $('#child_sub_category option:not(:first)').remove();

    $.each(data, function(key, value) {
    $('#child_sub_category')
      .append($("<option></option>")
      .attr("value", value.id)
      .text(value.name));
    });

    $('#child_sub_category').selectpicker('refresh');

  });

  $('#child_sub_category').on('change',function(){
    $.ajax({
      url:"{{ route('admin.get-recommended-course') }}",
      type: "POST",
      data:{
        "_token": "{{ csrf_token() }}",
        course_id:this.value
      },success(res){
        console.log(res);

        $.each(res, function(key, value) {
        $('#recommeded_course')
          .append($("<option></option>")
          .attr("value", value.id)
          .text(value.title));
        });

        $('#recommeded_course').selectpicker('refresh');
      }
    })
  });
});
var resultFrom;

$("#actual_price").keyup(function() {
  const api = "https://api.exchangerate-api.com/v4/latest/USD";
  resultFrom = geoplugin_currencyCode();
  $('#currency').val(resultFrom);
});
</script>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
@endsection
