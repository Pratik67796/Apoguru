@extends('admin.layouts.master')

@section('title')
apoGuru - Main Categories
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Main Categories</h2>
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
                            Edit Main Category
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.category.main.update', $main_category->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" value="{{$main_category->name}}" required>
                                            <label class="form-label">Main Category Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" name="image" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="checkbox" id="remember_me_5" name="applicable_to_pq" class="filled-in" @if($main_category->applicable_to_pq == 1) checked @endif)>
                                    <label for="remember_me_5">Is it applicable to Past Questions?</label>
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="UPDATE"/>
                                </div>
                            </div>
                        </form>
                        <img src="{{ url('main_category_images')}}/{{$main_category->image}}" height="100px" width="100px"/>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Main Categories
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <!-- <th>Status</th> -->
                                        <th>Applicable To PQ?</th>
                                        <th>Image</th>
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
                                        <!-- <th>Status</th> -->
                                        <th>Applicable To PQ?</th>
                                        <th>Image</th>
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
                                  @foreach ($main_categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <!-- <td>{{ucfirst($category->status)}}</td> -->
                                        <td>{{$category->applicable_to_pq == 1 ? 'Yes' : 'No'}}</td>
                                        <td> <img src="{{url('main_category_images')}}/{{$category->image}}" height="50px" width="50px"/> </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.category.main.edit', $category->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.category.main.delete', $category->id)}}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.category.main.edit', $category->id)}}"><i class="material-icons">edit</i></a> </td>
                                      
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
