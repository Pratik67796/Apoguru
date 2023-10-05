@extends('admin.layouts.master')

@section('title')
apoGuru - Admin
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Admin's</h2>
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
                            Admin's
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        @if(Auth::User()->role_as == 0)
                                         <th>Edit</th>
                                         <th>Delete</th>
                                        @endif
                                        @if(Auth::User()->role_as == 1)
                                         <th>Edit</th>
                                        @endif
                                        @if(Auth::User()->role_as == 2)
                                       
                                        @endif
                                    </tr>
                                </tfoot>
                                <tbody>
                                @php($count=0)
                                  @foreach ($adminlist as $user)
                                  @php($count++)
                                    <tr>
                                    <td>{{$count}}</td>
                                    
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>@if($user->role_as == 0)
                                                Senior Admin
                                            @elseif($user->role_as == 1)
                                               Junior Admin
                                            @else 
                                               Customer Care
                                               
                                            @endif
                                        </td>
                                        @if(Auth::User()->role_as == 0)
                                        <td> <a href="{{route('admin.edit', $user->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.delete', $user->id)}}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::User()->role_as == 1)
                                        <td> <a href="{{route('admin.edit', $user->id)}}"><i class="material-icons">edit</i></a> </td>
                                       
                                        @endif
                                        @if(Auth::User()->role_as == 2)
                                       
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
