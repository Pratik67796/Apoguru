@extends('admin.layouts.master')

@section('title')
apoGuru - Flagged Posts in Answer
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Flagged Posts in Answer</h2>
        </div>
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
                            Answer
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">ID</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Post</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Reason</th>
                                        <th colspan="3" style="vertical-align : middle;text-align:center;">Offending user</th>
                                        <th colspan="2" style="vertical-align : middle;text-align:center;">Reporting User</th>
                                        @if(Auth::user()->role_as == 0)
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Delete Post</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Remove Flag</th>
                                        @endif

                                        @if(Auth::user()->role_as == 1)
                                        @endif
                                        @if(Auth::user()->role_as == 2)
                                        @endif
                                    </tr>
                                    <tr>
                                    	<th scope="col">Id</th>
                                    	<th scope="col">Name</th>
                                    	<th scope="col">Cumulative number of offenses</th>
                                    	<th scope="col">Id</th>
                                    	<th scope="col" style="border-right: 1px solid #eee;">Name</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                	
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
