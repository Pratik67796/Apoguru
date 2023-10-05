@extends('admin.layouts.master')

@section('title')
apoGuru - Update User Documents
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>User Documents</h2>
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
                          {!! $user->name !!}
                      </h2>
                  </div>
                  <div class="body">
                      <ul class="list-group">
                          <li class="list-group-item"><img src="{{url('user_avatars')}}/{{$user->avatar}}" width="100" height="100"/></li>
                          <li class="list-group-item">User Name : {!! $user->name !!}</li>
                          <li class="list-group-item">Email : {!! $user->email !!}</li>
                          <li class="list-group-item">Phone : {{ $user->phone }}</li>
                          <li class="list-group-item">Qualification : {{ $user->qualification }}</li>
                          <li class="list-group-item">Workplace : {{$user->workplace}}</li>
                          <li class="list-group-item">Teaching Experience : {{$user->teaching_experience}}</li>
                          <li class="list-group-item">Summary : {{$user->summary}}</li>
                          <li class="list-group-item">Credit : {{$user->credit}}</li>
                          <li class="list-group-item">Verification Status : {{$user->verification_status}}</li>
                      </ul>
                  </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.document.update', $document->id) }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="user_id" value="{{$user->id}}"/>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Update Document
                                        </h2>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <select name="document_type" class="form-control" required>
                                                <option value="">--Select Document Type--</option>
                                                <option value="cv" @if($document->document_type == 'cv') selected @endif>CV</option>
                                                <option value="national_id" @if($document->document_type == 'national_id') selected @endif>National ID</option>
                                                <option value="supporting_document" @if($document->document_type == 'supporting_document') selected @endif>Supporting Document</option>
                                                <option value="other" @if($document->document_type == 'other') selected @endif>Others</option>
                                              </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <input type="file" class="form-control" name="document" required/>
                                              <label class="form-label">Select Document</label>
                                          </div>
                                          Document Link : <a href="{{url('user_documents')}}/{{$document->document}}" target="_blank">{{$document->document}}</a>
                                      </div>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <textarea type="file" class="form-control" name="notes_by_admin">{{$document->notes_by_admin}}</textarea>
                                              <label class="form-label">Notes by Admin</label>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update Document"/>
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
                            Documents of {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Document Type</th>
                                        <th>Document Link</th>
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
                                      <th>Document Type</th>
                                      <th>Document Link</th>
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
                                  @foreach ($documents as $document)
                                    <tr>
                                        <td>{{$document->id}}</td>
                                        <td>{!!$document->document_type!!}</td>
                            
                                        <td> <a href="{{url('user_documents')}}/{{$document->document}}" target="_blank">{{$document->document}}</a> </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.document.edit', $document->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.document.delete', $document->id)}}"><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.document.edit', $document->id)}}"><i class="material-icons">edit</i></a> </td>
                                        
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
