@extends('admin.layouts.master')

@section('title')
apoGuru - Instructors
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Instructors</h2>
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
                            Instructors
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">ID</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Name</th>
                                        <th colspan="7" style="horizontal-align : middle;text-align:center; width: 50%;">Courses Created</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Total Number Active Subscriptions</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Cumulative Number Of Active Subscriptions</th>
                                        <th rowspan="2" style="vertical-align : middle;text-align:center;">Notes</th> 
                                       
                                    </tr>
                                    <tr>
                                        <th scope="col"> Course Name </th>
                                        <th scope="col">Main Category</th>  
                                        <th scope="col">Parent Sub Category</th>
                                        <th scope="col">Child Sub Category</th>   
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Number Of Active Subscription</th> 
                                        <th scope="col">Cumulative Number Of Subscriptions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    
                                    <th scope="col">ID </th>
                                    <th scope="col">Name.</th>  
                                    <th scope="col">Name.</th>
                                    <th scope="col">Main Cat.</th>   
                                    <th scope="col">Parent Sub.</th>
                                    <th scope="col">Child sub</th> 
                                    <th scope="col">Date Creat</th>
                                    <th scope="col">Number active Subscription</th> 
                                    <th scope="col">Cumulative Subscription</th>
                                    
                                    <th scope="col">Total Number Active Subscription</th> 
                                    <th scope="col">Cumulative Number Of Active Subscription</th>
                                    <th scope="col">Notes</th>
                                </tfoot>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>use name</td>
                                        <td>c name</td>
                                        <td>main</td>
                                        <td>parent</td>
                                        <td>child</td>
                                        <td>date</td>
                                        <td>active</td>
                                        <td>cumsub</td>
                                        <td>toal numbers</td>
                                        <td>dsvb</td>
                                        <td>dhsg</td> 
                                    </tr>
                                   
                                   
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
