@extends('admin.layouts.master')

@section('title')
apoGuru - Courses
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Courses
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course</th>
                                        <th>Instructor</th>
                                        <th>Main Category</th>
                                        <th>Parent Sub Category</th>
                                        <th>Child Sub Category</th>
                                        <th>Active Subscriptions</th>
                                        <th>Expired Subscriptions</th>
                                        <th>Number Of Active Subscriptions</th>
                                        <th>Number Of Cumulative Subscriptions</th>
                                        <th>Price</th>
                                        <th>Cumulative Amount Earned</th>
                                        <th>Document</th>
                                        <th>Status</th>
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
                                        <th>Course</th>
                                        <th>Instructor</th>
                                        <th>Main Category</th>
                                        <th>Parent Sub Category</th>
                                        <th>Child Sub Category</th>
                                        <th>Active Subscriptions</th>
                                        <th>Expired Subscriptions</th>
                                        <th>Number Of Active Subscriptions</th>
                                        <th>Number Of Cumulative Subscriptions</th>
                                        <th>Price</th>
                                        <th>Cumulative Amount Earned</th>
                                        <th>Document</th>
                                        <th>Status</th>
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
                                    @foreach ($courses as $course)
                                    @php($count++)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{!!$course->title!!}</td>
                                        <td>@if($course->User)
                                            {{$course->User->name}}
                                            @else
                                            Admin
                                            @endif
                                        </td>
                                        {{-- <td>{{$course->User->name}}</td> --}}
                                        <td>{{$course->mainCategory->name}}</td>
                                        <td>{{$course->parentSubCategory->name}}</td>
                                        <td>{{$course->childSubCategory->name}}</td>
                                        <td>{{$count}}</td>
                                        <td>{{$count}}</td>
                                        <td>{{$count}}</td>
                                        <td>{{$count}}</td>
                                        <td>GHS {{$course->actual_price}}</td>
                                        <td>{{$count}}</td>
                                        <td>
                                            <a href="{{route('admin.course.principal.topic.list', $course->id)}}"><i class="material-icons">question_answer</i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.course.status-management',['uid' => $course->uid]) }}">
                                                @if($course->status == COURSE_STATUS_UNPUBLISHED)
                                                <span class="label bg-orange" title='{{ $course->status }}'>{{ $course->status }}</span>
                                                @elseif($course->status == COURSE_STATUS_PUBLISHED)
                                                <span class="label bg-green" title='{{ $course->status }}'>{{ $course->status }}</span>
                                                @elseif($course->status == COURSE_STATUS_UNDER_REVIEW)
                                                <span class="label bg-blue" title='{{ $course->status }}'>{{ $course->status }}</span>
                                                @elseif($course->status == COURSE_STATUS_PENDING)
                                                <span class="label bg-light-blue" title='{{ $course->status }}'>{{ $course->status }}</span>
                                                @elseif($course->status == COURSE_STATUS_REJECT)
                                                <span class="label bg-red" title='{{ $course->status }}'>{{ $course->status }}</span>
                                                @endif
                                            </a>
                                        </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.course.edit', $course->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.course.delete', $course->id)}}"><i class="material-icons" onclick="return confirm(&quot;Confirm delete?&quot;)">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.course.edit', $course->id)}}"><i class="material-icons">edit</i></a> </td>

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

@endsection
