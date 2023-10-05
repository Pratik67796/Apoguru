@extends('admin.layouts.master')

@section('title')
apoGuru - User Documents
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
                          <li class="list-group-item" id="user_id">User ID : {!! $user->id !!}</li>
                          <li class="list-group-item">User Name : {!! $user->name !!}</li>
                          <li class="list-group-item">Email : {!! $user->email !!}</li>
                          <li class="list-group-item">Phone : {{ $user->phone }}</li>
                          <li class="list-group-item">Profession : {{ $user->qualification }}</li>
                          <!-- <li class="list-group-item">Experience : {{$user->workplace}}</li> -->
                          <li class="list-group-item">Experience : {{$user->teaching_experience}}</li>
                          <li class="list-group-item">About : {{$user->summary}}</li>
                          <li class="list-group-item" >
                            <label class="switch">
                                <input type="checkbox" data-id="{{$user->id}}" class="toggle-class" data-onstyle="success"  data-toggle="toggle" data-on="Active" data-off="InActive">
                                <span class="slider round"></span>
                                </label>Badges: apoGuru {{$user->verification_status}}
                          </li>
                          <li class="list-group-item">
                            <div class="switch">
                            <input type="hidden" id="hid" value="{{$user->id}}" name="hid">
                            @if($user->verification_status =='Verified')
                            <!-- <input type="hidden" id="hid" value="{{$user->id}}" name="hid"> -->
                                <label>
                                Unverify
                                    <input type="checkbox" name="staus" id="status" name="status" checked>
                                    <span class="lever" ></span> Verify
                                </label>
                                <div id="autosave"></div>
                            @else 
                                <label>
                                Unverify
                                    <input type="checkbox" name="status" id ="status">
                                    <span class="lever" ></span> Verify
                                </label>
                            @endif
                            </li>
                            <li class="list-group-item">Number of courses currently subscribed to:</li>
                            <li class="list-group-item">Lifetime number of courses subscribed to:</li>
                            <li class="list-group-item">Current number of students:</li>
                            <li class="list-group-item">Lifetime number of students:</li>
                            @foreach ($note as $user)
                            <li class="list-group-item">Notes : {{$user->title}},&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$user->description}}</li>
                            @endforeach
                            @foreach($reminder as $user)
                            <li class="list-group-item">Reminder : {{$user->title}},&nbsp&nbsp&nbsp{{$user->date}}&nbsp&nbsp&nbsp,{{$user->time}}&nbsp&nbsp&nbsp{{$user->description}}</li>
                            @endforeach
                          {{-- <li class="list-group-item">Credit : {{$user->credit}}</li> --}}
                           {{-- <li class="list-group-item">Badges: apoGuru {{$user->verification_status}},</li>  --}}                        
                      </ul>
                  </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="card">
                  <div class="body">
                    <form method="post" action="{{ route('admin.document.store') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="user_id" value="{{$user->id}}"/>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>
                                            Add New Document
                                        </h2>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <select name="document_type" class="form-control" required>
                                                <option value="">--Select Document Type--</option>
                                                <option value="cv">CV</option>
                                                <option value="national_id">ID</option>
                                                <option value="supporting_document">Supporting Document</option>
                                                <option value="other">Others</option>
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
                                      </div>
                                    </div>
                                    <div class="body">
                                      <div class="form-group form-float">
                                          <div class="form-line">
                                              <textarea type="file" class="form-control" name="notes_by_admin"></textarea>
                                              <label class="form-label">Notes by Admin</label>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add Document"/>
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
                                  @php($count=0)
                                  @foreach ($documents as $document)
                                  @php($count++)
                                    <tr>
                                        <td>{{$count}}</td>
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
                <div class="card">
                    <div class="header">
                        <h2>
                        Courses Created By {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>CourseName</th>
                                        <th>Date Created</th>
                                        <th>Main Category</th>
                                        <th>Parent Subcategory</th>
                                        <th>Selling  Price</th>
                                        <th>Current Number of subscriptions</th>
                                        <th>All time number of subscriptions</th>
                                        <th>Number of Refund Request </th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>Course Name</th>
                                        <th>Date Created</th>
                                        <th>Main Category</th>
                                        <th>Parent Subcategory</th>
                                        <th>Selling Price</th>
                                        <th>Current Number of subscriptions</th>
                                        <th>All time number of subscriptions</th>
                                        <th>Number of Refund Request </th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                @php($count=0)
                                  @foreach ($coursejoin as $course)
                                  @php($count++)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->p_name}}</td>
                                        <td>{{$course->sell_price}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Subscriptions of {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>#order</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Course</th>
                                        <th>Date & Time</th>
                                        <th>Subscription Duration</th>
                                        <th>Price</th>
                                        <th>Instructor</th>
                                        <th>Remove Subscription</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>#order</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Course</th>
                                        <th>Date & Time</th>
                                        <th>Subscription Duration</th>
                                        <th>Price</th>
                                        <th>Instructor</th>
                                        <th>Remove Subscription</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                 
                                    <tr>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        <td>Comming Soon</td>
                                        
                                       
                                    </tr>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Payouts of {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Course</th>
                                        <th>Payout Date</th>
                                        <th>Payout Date</th>
                                        <th>Corresponding Number Of Subscriptions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <th>ID</th>
                                        <th>Transaction Ref No.</th>
                                        <th>Course</th>
                                        <th>Payout Date</th>
                                        <th>Payout Date</th>
                                        <th>Corresponding Number Of Subscriptions</th>
                                </tfoot>
                                <tbody>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Past Questions Attempted {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Parent Subcategory</th>
                                        <th>Child Subcategory</th>
                                        <th>Number of Questions Attempted</th>
                                        <th>Avarage Score</th>
                                        <th>Number of Championships played</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <th>ID</th>
                                        <th>Parent Subcategory</th>
                                        <th>Child Subcategory</th>
                                        <th>Number of Qestions Attempted</th>
                                        <th>Avarage Score</th>
                                        <th>Number of Championships played</th>
                                </tfoot>
                                <tbody>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Refund  of {{$user->name}}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subscription Transaction Ref No.</th>
                                        <th>Refund Transaction Ref Number</th>
                                        <th>Refund Request Date</th>
                                        <th>Days since Purchase</th>
                                        <th>Status</th>
                                        <th>Total Number of Refund Requests of Subscriber </th>
                                        <th>Total Number of Refund Requests of Course </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                        <th>ID</th>
                                        <th>Subscription Transaction Ref No.</th>
                                        <th>Refund Transaction Ref Number</th>
                                        <th>Refund Request Date</th>
                                        <th>Days since Purchase</th>
                                        <th>Status</th>
                                        <th>Total Number of Refund Requests of Subscriber </th>
                                        <th>Total Number of Refund Requests of Course </th>
                                </tfoot>
                                <tbody>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
                                 <td>Comming Soon</td>
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
<script type="text/javascript">
//    $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
    
   $("#status").change(function(){
    var status = $(this).is(":checked") ? 'Verified' : 'Unverified'
    var user_id = parseInt($("#user_id").html().split(":")[1].split(" ")[1])
    $.ajax({
        type: "POST",
        url:"{{ route('admin.activation') }}",
        data: {
            "_token": "{{ csrf_token() }}",
            "status": status,
            "user_id" : user_id
            },
       // data : {status : status},
        success: function (data) {
            console.log("Done")
        },
        error: function (error) {
            console.log(JSON.stringify(error));
        },
        });
});
</script>
<!-- Jquery DataTable Plugin Js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
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
