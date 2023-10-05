@extends('admin.layouts.master')

@section('title')
apoGuru - Topics
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Topics</h2>
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
                            Add New Topic
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.topic.store') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select id="main_category" class="form-control show-tick" name="main_category_id" required>
                                                <option value="">--Select Main Category--</option>
                                                @foreach($main_categories as $category)
                                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select id="parent_sub_category" class="form-control show-tick" name="parent_sub_category_id" required>
                                              <option value="">--Select Parent Sub Category--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="child_sub_category" class="form-control show-tick" name="child_sub_category_id" required>
                                          <option value="">--Select Child Sub Category--</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label">Topic Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="ADD"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Topics
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Main Cat</th>
                                        <th>Parent Cat</th>
                                        <th>Child Sub Category</th>
                                        <th>Name</th>
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
                                        <th>Main Cat</th>
                                        <th>Parent Cat</th>
                                        <th>Child Sub Category</th>
                                        <th>Name</th>
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
                                  @foreach ($topics as $topic)
                                  @php($count++)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{isset($topic->maincat->name)?$topic->maincat->name:'-'}}</td>
                                        <td>{{isset($topic->parentcat->name)?$topic->parentcat->name:'-'}}</td>
                                        <td>{{isset($topic->childSubCategory->name)?$topic->childSubCategory->name:'-'}}</td>
                                        <td>{{$topic->name}}</td>
                                        <td>{{ucfirst($topic->status)}}</td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.topic.edit', $topic->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.topic.delete', $topic->id)}}" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.topic.edit', $topic->id)}}"><i class="material-icons">edit</i></a> </td>

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

<script>
$('#main_category').on('change', function (e) {
  var main_category_id = $(this).val();
  $.ajax({
    type: "POST",
    url: "{{route('admin.get.parent.sub.category.from.main.category')}}",
    dataType: 'json',
    data: {
      "_token": "{{ csrf_token() }}",
      "main_category_id": main_category_id,
    }
  }).done(function(data) {
    $('#parent_sub_category option:not(:first)').remove();
    $.each(data, function(key, value) {
    $('#parent_sub_category')
      .append($("<option></option>")
      .attr("value", value.id)
      .text(value.name));
    });
    $('#parent_sub_category').selectpicker('refresh');
  });
});

$('#parent_sub_category').on('change', function (e) {
  var parent_sub_category_id = $(this).val();
  $.ajax({
    type: "POST",
    url: "{{route('admin.get.child.sub.category.from.parent.sub.category')}}",
    dataType: 'json',
    data: {
      "_token": "{{ csrf_token() }}",
      "parent_sub_category_id": parent_sub_category_id,
    }
  }).done(function(data) {
    $('#child_sub_category option:not(:first)').remove();
    $.each(data, function(key, value) {
    $('#child_sub_category')
      .append($("<option></option>")
      .attr("value", value.id)
      .text(value.name));
    });
    $('#child_sub_category').selectpicker('refresh');
  });
});
</script>
@endsection
