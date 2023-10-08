@php
$cur_route = Route::current()->getName();
@endphp
@extends('admin.layouts.master')

@section('title',"apoGuru - Admin")

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Today reminder</h2>
        </div>



        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2> Today's Reminders</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User_name</th>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>date</th>
                                        <th>time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($count=0)
                                    @foreach ($reminder as $user)
                                    @php($count++)
                                    <tr>
                                        <td>{{$count}}</td>

                                        <td>@foreach ($users as $userrecord)
                                            @if($userrecord->id == $user->user_id)
                                            {{$userrecord->name}}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>{{$user->title}}</td>
                                        <td>{{$user->description}}</td>
                                        <td>{{$user->date}}</td>
                                        <td>{{$user->time}}</td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            <!-- Browser Usage -->
            <!-- #END# Browser Usage -->
        </div>


        <div class="block-header">
            <h2>New Published Request</h2>
        </div>



        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2> New Published Request</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Main Category</th>
                                        <th>Parent Sub Child Category</th>
                                        <th>Course</th>
                                        <th>Added By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getAllCourses as $key => $getAllCourse)
                                    <tr>
                                        <td>{{ $getAllCourse->id }}</td>
                                        <td>{{ $getAllCourse->mainCategory->name }}</td>
                                        <td>{{ $getAllCourse->parentSubCategory->name }}</td>
                                        <td>{{ $getAllCourse->title }}</td>
                                        <td>{{ $getAllCourse->User->name }}</td>
                                        <td><span class="label bg-red" >{{ $getAllCourse->status }}</span></td>
                                        <td>
                                            <a href="{{ route('admin.course.status-management',['uid'=>$getAllCourse->uid ]) }}">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        getAllCourses()
    })

</script>
@endsection
