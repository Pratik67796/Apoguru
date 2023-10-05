@extends('admin.layouts.master')

@section('title')
apoGuru - Past Questions Answers
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Past Questions Answer(s)</h2>
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="header">
                      <h2>
                          {!! $past_question->question !!}
                      </h2>
                  </div>
                  <div class="body">
                      <ul class="list-group">
                          <li class="list-group-item">Preamble : {!! $past_question->preamble !!}</li>
                          <li class="list-group-item">Main Category : {{$past_question->mainCategory->name}}</li>
                          <li class="list-group-item">Parent Sub Category : {{$past_question->parentSubCategory->name}}</li>
                          <li class="list-group-item">Child Sub Category : {{$past_question->childSubCategory->name}}</li>
                          <li class="list-group-item">Question Type : {{$past_question->questionType->name}}</li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.past.question.answer.update', $past_question_answer->id) }}" enctype="multipart/form-data">
                      @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Update Answer
                                        </h2>
                                    </div>
                                    <div class="body">
                                        <textarea name="answer" class="ckeditor">{!! $past_question_answer->answer !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if($past_question_answer->correct == 0)
                                <input type="checkbox" id="remember_me_5" name="correct" class="filled-in" selected>
                            @else
                            <input type="checkbox" id="remember_me_5" name="correct" class="filled-in" checked>
                            @endif
                               
                              <label for="remember_me_5">Is this the correct answer?</label>
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update Answer"/>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Answers
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Answer</th>
                                        <th>Right Answer</th>
                                        @if(Auth::user()->role_as == 0)
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <th>Edit</th>
                                        
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Answer</th>
                                        <th>Right Answer</th>
                                        @if(Auth::user()->role_as == 0)
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <th>Edit</th>
                                        
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($past_question_answers as $answer)
                                    <tr>
                                        <td>{{$answer->id}}</td>
                                        <td>{!!$answer->answer!!}</td>
                                        <td>@if($answer->correct == 1)
                                        <i class="material-icons" style="color:#46EF0E">done_outline</i>
                                            @else 
                                               
                                            @endif
                                        </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.past.question.answer.edit', [$past_question->id, $answer->id])}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.past.question.answer.delete', $answer->id)}}"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.past.question.answer.edit', [$past_question->id, $answer->id])}}"><i class="material-icons">edit</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        
                                        @endif
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
var answer = CKEDITOR.replace( 'answer' );
CKFinder.setupCKEditor( answer );
</script>
@endsection
