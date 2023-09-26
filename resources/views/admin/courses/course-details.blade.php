@extends('admin.layouts.master')

@section('title','apoGuru - Courses Details')
@section('content')
<style>
    figure img {
        width: 100%;
        max-width:500px;
        max-height:500px;
    }

    p img {
        width: 100%;
        max-width:500px;
        height:100%;
        max-height:500px;
    }

    .row,
    .video {
        margin-top: 20px;
    }

</style>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class='body'>
                <!-- Course Title -->
                {{-- <h1>Course Title</h1> --}}
                <div class="block-header">
                    <h1>Course</h1>
                </div>
                <div class="clearfix" style='border-bottom: 1px solid #000;'></div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Course Type:</label>
                        <p>{{ $course->mainCategory->name }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Parent Subcategory:</label>
                        <p>{{ $course->parentSubCategory->name }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Child Subcategory:</label>
                        <p>{{ $course->childSubCategory->name }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Course Name:</label>
                        <p>{{ $course->title }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Actual Sale Price:</label>
                        <p>{{ $course->actual_price }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Price In USD:</label>
                        <p>{{ $course->actual_price_in_usd }}</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Sale Price:</label>
                        <p>{{ $course->sell_price }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Price In USD:</label>
                        <p>{{ $course->sell_price_in_usd }}</p>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Description:</label>
                        <p>{!! $course->description !!}</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex;flex-direction: column;">
                        <label>Image:</label>
                        <img src="{{ asset('storage/course-images/'.$course->image) }}" width='150' height="150" class="img-fluid">
                    </div>
                </div>
                <div class="clearfix" style='border-bottom: 1px solid #000;'></div>
                <div class="block-header">
                    <h1>Principal Topics</h1>
                </div>
                <div class="clearfix" style='border-bottom: 1px solid #000;'></div>
                <div class="ml-4">
                    @foreach($course->getPrincipleTopic as $key => $principleTopic)
                    <ul>
                        <li>
                            <p>{{ $principleTopic->name }}</p>
                        </li>
                    </ul>
                    @endforeach
                </div>

                <div class="block-header">
                    <h1>Course Resources</h1>
                </div>
                <div class="clearfix" style='border-bottom: 1px solid #000;'></div>
                <div class='row clearfix'>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Created By:</label>
                        @if(isset($course->User->name))
                        <p>{{ $course->User->name }}</p>
                        @endif
                    </div>
                    {{-- <div class="clearfix" style='border-bottom: 1px solid #000;'></div>  --}}
                    @foreach ($course->getPrincipleTopic as $principle)
                    @foreach($principle->videos as $key => $video)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 video">
                        <label>Topic:</label>
                        <p>{{ $principle->name }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 video">
                        <label>Video Name:</label>
                        <p>{{ $video->name }}</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 video" style="display: flex;flex-direction: column;">
                        <label>Thumbnail</label>
                        <img src="{{ asset('storage/videos/'.$video->thumbnail) }}" width='150' height="150" class="img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  video" style="display: flex;flex-direction: column;">
                        <label>Video</label>
                        <video controls class="img-fluid" width='200' height="150">
                            <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="clearfix" style='border-bottom: 1px solid #000;'></div>
                    @endforeach
                    @endforeach
                </div>

                <div class="button-group">
                    <button type="button" class='btn btn-success' onClick="changeStatus('{{ COURSE_STATUS_PUBLISHED }}', {{ $course->id }})">{{ COURSE_STATUS_PUBLISHED }}</button>
                    <button type="button" class='btn btn-danger' onClick="changeStatus('{{ COURSE_STATUS_REJECT }}', {{ $course->id }})">{{ COURSE_STATUS_REJECT }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function changeStatus(status, id) {
        $.ajax({
            url: "{{ route('admin.course.status-management-update') }}"
            , type: "POST"
            , data: {
                "_token": "{{ csrf_token() }}"
                , status: status
                , id: id
            }
            , success: function(res) {
                console.log(res);
            }
        })
    }

</script>
@endsection
