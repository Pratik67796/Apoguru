@extends('admin.layouts.master')

@section('title')
apoGuru - Payout
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Payout</h2>
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
                            Payout
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Instructor</th>
                                        <th>Payout Date (Y-m-d Hr:Min:Sec)</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Payout Amount</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Instructor</th>
                                        <th>Payout Date (Y-m-d Hr:Min:Sec)</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Payout Amount</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                     
                                    </tr>
                                </tfoot>
                                <tbody>
                                @foreach($trancationHistories as $key => $trancationHistory)
                                <tr>
                                <td>{{ $key + 1 }}</td>
                                @if(isset($trancationHistory->getCourse->User->name))
                                <td>{{ $trancationHistory->getCourse->User->name }}</td>
                                @endif
                                @if(isset($trancationHistory->getCourse->getAdmin->name))
                                <td>{{ $trancationHistory->getCourse->getAdmin->name }}</td>
                                @endif
                                <td>{{ $trancationHistory->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    @if($trancationHistory->payment_mode == 'flutterwave')
                                    {{ $trancationHistory->flutter_id }}
                                    @elseif($trancationHistory->payment_mode == 'crypto')
                                    {{ $trancationHistory->payment_id }}
                                    @endif
                                </td>
                                <td>$ {{ $trancationHistory->amount }}</td>
                                <td>{{ $trancationHistory->getCourse->title }}</td>
                                <td>{{ $trancationHistory->status }}</td>
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
