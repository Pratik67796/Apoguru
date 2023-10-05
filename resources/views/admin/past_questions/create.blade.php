@extends('admin.layouts.master')

@section('title')
apoGuru - Create New Past Questions
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
                            Add New Past Question
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.past.question.store') }}" enctype="multipart/form-data">
                          @csrf
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
                                          <select id="child_sub_category" class="form-control show-tick" name="exam_month" required>
                                            <option value="">--Select Exam Month--</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="child_sub_category" class="form-control show-tick" name="exam_year" required>
                                            <option value="">--Select Exam Year--</option>
                                            @for($i=2023; $i>1990; $i--)
                                              <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="question_type_id" class="form-control show-tick" name="question_type_id" required>
                                            <option value="">--Select Question Type--</option>
                                            @foreach($question_types as $question)
                                              <option value="{{ $question->id }}">{{ $question->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <select id="topic" class="form-control show-tick" name="topic_id" required>
                                            <option value="">--Select topic--</option>
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
                                          <textarea id="Preamble" name="preamble" class="ckeditor"></textarea>
                                         <!-- <div id="Preamble" name="preamble" style="border-color: #e6e8ed;" required></div> -->
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
                                            <textarea id="question" name="question" class="ckeditor"></textarea>
                                            <!-- <div id="question" name="question" style="border-color: #e6e8ed;" required></div> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="copy">
                                    <div class="row col-md-12" data="0">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="answers[]" class="form-control" required>
                                                    <label class="form-label">Answer 1</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <input type="radio" id="html_0" name="correct_answer" value="0">
                                            <label for="html_0">Correct Answer</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <input type='button' class="form-control input-default remove" id='but_add' value='Add new'>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add Question and Proceed to Answer"/>
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
<script>
  function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview2").src = oFREvent.target.result;
        };
    };
</script>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/inline/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
   
// InlineEditor
ClassicEditor
   .create( document.querySelector( '#Preamble' ),{
      ckfinder: {
         uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
      }
   })
   .catch( error => {
      console.error( error );
});

// InlineEditor
ClassicEditor
   .create( document.querySelector( '#question' ),{
      ckfinder: {
         uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
      }
   })
   .catch( error => {
      console.error( error );
});
</script>


<script>
   $(document).ready(function(){
    window.id = "id_"+0;
      $("#but_add").click(function(){
        var getlastid = $('.copy').children().last().attr('data');
        var incrase_value =  parseInt(getlastid)+1;

         $(".copy").append(`<div class="row col-md-12" id="remove" data='${incrase_value}'>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="answers[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="radio" id="html_${incrase_value}" name="correct_answer" value="${incrase_value}">
                                        <label for="html_${incrase_value}">Correct Answer</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="button" class="form-control input-default remove-field" id="but_add" value="Remove">
                                    </div>
                                </div>`); 
       });
       $(document).on('click', '.remove-field', function(){
         // $(this).parent('div').remove()
         $("#remove").remove();
      });
   });
</script>
@endsection
