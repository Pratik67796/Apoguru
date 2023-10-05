@extends('admin.layouts.master')

@section('title')
apoGuru - Update Principal Topics - {{$principal_topic->name}}
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Principal Topics - {{$course->title}}</h2>
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
                          {!! $course->title !!}
                      </h2>
                  </div>
                  <div class="body">
                      <ul class="list-group">
                          <li class="list-group-item"><img src="{{url('course_images')}}/{{$course->image}}" width="100" height="100"/></li>
                          <li class="list-group-item">Course Name : {!! $course->title !!}</li>
                          <li class="list-group-item">Course Name : {!! $course->description !!}</li>
                          <li class="list-group-item">Actual Price : GHS {{ $course->actual_price }}</li>
                          <li class="list-group-item">Sell Price : GHS {{ $course->sell_price }}</li>
                          <li class="list-group-item">Main Category : {{$course->mainCategory->name}}</li>
                          <li class="list-group-item">Parent Sub Category : {{$course->parentSubCategory->name}}</li>
                          <li class="list-group-item">Child Sub Category : {{$course->childSubCategory->name}}</li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.course.principal.topic.update', $principal_topic->id) }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="principal_topic_id" value="{{$principal_topic->id}}"/>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Update Principal Topic
                                        </h2>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="text" name="name" class="form-control" value="{{$principal_topic->name}}" required>
                                              <label class="form-label">Topic Name</label>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update Principal Topic"/>
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
                                  @foreach ($principal_topics as $topic)
                                    <tr>
                                        <td>{{$topic->id}}</td>
                                        <td>{!!$topic->name!!}</td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.course.principal.topic.edit', $topic->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.course.principal.topic.delete', $topic->id)}}"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.course.principal.topic.edit', $topic->id)}}"><i class="material-icons">edit</i></a> </td>
                                       
                                        
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
<script>
//CKEditor
CKEDITOR.replace( 'answer' );
CKEDITOR.add
</script>
@endsection
