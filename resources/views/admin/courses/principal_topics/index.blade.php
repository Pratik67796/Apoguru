@extends('admin.layouts.master')

@section('title')
apoGuru - Principal Topics - {{$course->title}}
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 .checked {
  color: orange;
}   
</style>
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
                          <li class="list-group-item"><img src="{{url('course-images')}}/{{$course->image}}" width="100" height="100"/></li>
                          <li class="list-group-item">Name of Course: : {!! $course->title !!}</li>
                          <li class="list-group-item">Course ID : {!! $course->id !!}</li>
                          <li class="list-group-item">Date Created : {!! $course->created_at !!}</li>
                          <li class="list-group-item">Rating : 
                            @if($course->rating == 1)
                                <span class="fa fa-star checked"></span>
                            @elseif($course->rating == 2)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            @elseif($course->rating == 3)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            @elseif($course->rating == 4)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            @elseif($course->rating == 5)
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star checked"></span>
                            @endif
                           
                          </li>
                          <li class="list-group-item">Number of students currently subscribed to this Course : </li>
                          <li class="list-group-item">Lifetime number of students subscribed to this Course : </li>
                          @if($course->User)
                             <li class="list-group-item">Instructor’s Name : {{$course->User->name}}</li>
                            <li class="list-group-item">Instructor’s User ID : {{$course->User->id}}</li>
                          @endif 
                          <li class="list-group-item">Revenue for  @php echo date('M Y'); @endphp : GHS&nbsp&nbsp&nbsp{{$price}}</li>
                          {{-- <li class="list-group-item">Revenue for this month @php  echo now()->month @endphp @php  echo now()->year @endphp : GHS&nbsp&nbsp&nbsp{{$price}}</li> --}}
                          <li class="list-group-item">Overhead Cost 15% : GHS&nbsp&nbsp&nbsp{{$price * 15/100}}</li>
                          <li class="list-group-item">Our Commission 4.9% : GHS&nbsp&nbsp&nbsp{{$price * 4.9/100}}</li>
                          <li class="list-group-item">Instructor Share of Revenue 80.1% : GHS&nbsp&nbsp&nbsp{{$price * 80.1/100}}</li>
                         
                         
                          {{-- <li class="list-group-item">Actual Price : GHS {{ $course->actual_price }}</li>
                          <li class="list-group-item">Sell Price : GHS {{ $course->sell_price }}</li>
                          <li class="list-group-item">Main Category : {{$course->mainCategory->name}}</li>
                          <li class="list-group-item">Parent Sub Category : {{$course->parentSubCategory->name}}</li>
                          <li class="list-group-item">Child Sub Category : {{$course->childSubCategory->name}}</li> --}}

                          
                         
                          
                          
                      </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.course.principal.topic.store') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="course_id" value="{{$course->id}}"/>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Add New Principal Topic
                                        </h2>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="text" name="name" class="form-control" required>
                                              <label class="form-label">Topic Name</label>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add Principal Topic"/>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>

            {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Course Resources
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Principal Topic</th>
                                        <th>Videos Title</th>
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
                                        <th>Topic Name</th>
                                        <th>Lecture Videos</th>
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
                                @php($count=0)
                                  @foreach ($principal_topics as $topic)
                                  @php($count++)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{!!$topic->name!!}</td>

                                        <td> <a href="{{route('admin.course.principal.topic.lecture.video.list', $topic->id)}}"><i class="material-icons">question_answer</i></a> </td>
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
            </div> --}}
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Course Resources
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%">
                                <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Principal Topic</th>
                                        <th>Videos Title</th>
                                        <th colspan="3">Video Details</th>
                                        <th colspan="2">Interactivity</th>
                                        <th>Documents</th>
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
                                   <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> file type </td>
                                    <td> file size </td>
                                    <td> Video Duration</td>
                                    <td> Interactive questions and answers </td>
                                    <td> Moment of appearance</td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($count=0)
                                    @foreach ($principal_topics as $topic)
                                    @php($count++)
                                      <tr>
                                          <td>{{$count}}</td>
                                          <td>{!!$topic->name!!}</td>
                                          <td>comming soon</td> 
                                          <td>coming soon</td>
                                          <td>coming soon</td>
                                          <td>coming soon</td>
                                          <td>coming soon</td>
                                          <td>coming soon</td>
                                          <td><a href="{{route('admin.course.principal.topic.lecture.video.list', $topic->id)}}"><i class="material-icons">question_answer</i></a></td>
                                
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
<script>
    $(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
  } 
)
</script>
@endsection
