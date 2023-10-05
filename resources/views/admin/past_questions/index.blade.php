@extends('admin.layouts.master')

@section('title')
apoGuru - Past Questions
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<style>
    thead input {
        width: 100%;
    }
</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Past Questions</h2>
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
        @if(Session::has('id'))
         @php  
          $id = Session::get('id')
         @endphp
        @endif
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
                            Past Questions
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table  id="example" class="table table-bordered table-striped table-hover" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Main Category</th>
                                        <th>Parent Sub Category</th>
                                        <th>Child Sub Category</th>
                                        <th>Question Type</th>
                                        <th>Exam Date</th>
                                        <th>Topics</th>
                                        <th>Answers</th>
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
                                        <th>Question</th>
                                        <th>Main Category</th>
                                        <th>Parent Sub Category</th>
                                        <th>Child Sub Category</th>
                                        <th>Question Type</th>
                                        <th>Exam Date</th>
                                        <th>Topics</th>
                                        <th>Answers</th>
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
                                  @foreach ($past_questions as $question)
                                  @php($count++)
                                    <tr class="highlight_{{$question->id}}">
                                    <td>{{$count}}</td>
                                        <td>{!!$question->question!!}</td>

                                        <td>{{$question->mainCategory->name}}</td>
                                        <td>{{$question->parentSubCategory->name}}</td>
                                        <td>{{$question->childSubCategory->name}}</td>
                                        <td>{{$question->questionType->name}}</td>
                                        <td>{{$question->exam_month}} {{$question->exam_year}}</td>
                                        <td>{{$question->topic->name}}</td>

                                        <td> <a href="{{route('admin.past.question.answers', $question->id)}}"><i class="material-icons">question_answer</i></a> </td>
                                        @if(Auth::user()->role_as == 0)
                                        <td> <a href="{{route('admin.past.question.edit', $question->id)}}"><i class="material-icons">edit</i></a> </td>
                                        <td> <a href="{{route('admin.past.question.delete', $question->id)}}"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"                                            ><i class="material-icons">delete</i></a> </td>
                                        @endif
                                        @if(Auth::user()->role_as == 1)
                                        <td> <a href="{{route('admin.past.question.edit', $question->id)}}"><i class="material-icons">edit</i></a> </td>
                                        
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
        <?php //dd(Session::get('last_update_id'))?>
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
      $(document).ready(function(){
        var last_update_id =  "{{ isset($id)?$id:''}}";
        var something = $(".highlight_"+last_update_id).css({backgroundColor:" #B9E854"}).show();
        // setTimeout(function(){
        //     something.css({backgroundColor: ''});
        // },2000);
    });
</script>


<script>
$(document).ready(function () {
    
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({

        // searching: false, 
        // paging: false,
        stateSave: true,
        dom: 'Bfrtip',
        "ordering": false,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        //orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    // console.log(title)
                    if(title == "ID" || title == "Edit" || title == "Delete" || title == "Answers"){
                        $(cell).html('');
                    }else{
                        $(cell).html('<input type="text" placeholder="' + title + '" />');
                    }
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
</script>

@endsection
