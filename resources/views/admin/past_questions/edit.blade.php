@extends('admin.layouts.master')

@section('title')
apoGuru - Update Past Questions
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Past Questions</h2>
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
                            Update Past Question
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.past.question.update', $past_question->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="main_category" class="form-control show-tick" name="main_category_id" required>
                                            <option value="">--Select Main Category--</option>
                                            @foreach($main_categories as $category)
                                              <option value="{{$category->id}}" @if($past_question->main_category_id == $category->id) selected @endif>{{$category->name}}</option>
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
                                            <option value="{{$past_question->parent_sub_category_id}}" selected>{{$past_question->parentSubCategory->name}}</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="child_sub_category_id" required>
                                            <option value="">--Select Child Sub Category--</option>
                                            <option value="{{$past_question->child_sub_category_id}}" selected>{{$past_question->childSubCategory->name}}</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="exam_month" required>
                                            <option value="">--Select Exam Month--</option>
                                            <option value="January" @if($past_question->exam_month == 'January') selected @endif>January</option>
                                            <option value="February" @if($past_question->exam_month == 'February') selected @endif>February</option>
                                            <option value="March" @if($past_question->exam_month == 'March') selected @endif>March</option>
                                            <option value="April" @if($past_question->exam_month == 'April') selected @endif>April</option>
                                            <option value="May" @if($past_question->exam_month == 'May') selected @endif>May</option>
                                            <option value="June" @if($past_question->exam_month == 'June') selected @endif>June</option>
                                            <option value="July" @if($past_question->exam_month == 'July') selected @endif>July</option>
                                            <option value="August" @if($past_question->exam_month == 'August') selected @endif>August</option>
                                            <option value="September" @if($past_question->exam_month == 'September') selected @endif>September</option>
                                            <option value="October" @if($past_question->exam_month == 'October') selected @endif>October</option>
                                            <option value="November" @if($past_question->exam_month == 'November') selected @endif>November</option>
                                            <option value="December" @if($past_question->exam_month == 'December') selected @endif>December</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <?php //dd($past_question);?>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="exam_year" required>
                                            <option value="">--Select Exam Year--</option>
                                            @for($i=2022; $i>1990; $i--)
                                              <option value="{{ $i }}" @if($past_question->exam_year== $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="question_type_id" required>
                                            <option value="">--Select Question Type--</option>
                                            @foreach($question_types as $question)
                                              <option value="{{ $question->id }}" @if($past_question->question_type_id == $question->id) selected @endif>{{ $question->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="topic_id" class="form-control show-tick" name="topic_id" required>
                                            <option value="">--Select Topic--</option>
                                            @foreach($topics as $topic)
                                              <option value="{{ $topic->id }}" @if($past_question->topic_id == $topic->id) selected @endif>{{ $topic->name }}</option>
                                            @endforeach
                                            
                                          </select>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Enter Preamble
                                            </h2>
                                        </div>
                                        <div class="body">
                                          <textarea name="preamble" class="ckeditor">{!! $past_question->preamble !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Enter Question
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <textarea name="question" class="ckeditor">{!! $past_question->question !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update Past Question"/>
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
// CKEDITOR.replace( 'preamble' );
// CKFinder.setupCKEditor( preamble );
// CKEDITOR.add

var preamble = CKEDITOR.replace( 'preamble' );
CKFinder.setupCKEditor( preamble );
CKEDITOR.add

var question = CKEDITOR.replace( 'question' );
CKFinder.setupCKEditor( question );
CKEDITOR.add

// CKEDITOR.replace( 'question' );
// CKEDITOR.add

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
});
$('#child_sub_category').on('change', function(){
  var child_sub_category_id = $(this).val();
  $.ajax({
    type: "POST",
    url: "{{route('admin.get.topic.sub.category.from.child.sub.topic')}}",
    dataType: 'json',
    data: {
      "_token": "{{ csrf_token() }}",
      "child_sub_category_id": child_sub_category_id,
    }
  }).done(function(data) {
    console.log(data);

    $('#topic option:not(:first)').remove();

    $.each(data, function(key, value) {
    $('#topic')
      .append($("<option></option>")
      .attr("value", value.id)
      .text(value.name));
    });

    $('#topic').selectpicker('refresh');

  });
});
</script>
@endsection
