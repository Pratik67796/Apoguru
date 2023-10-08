<div class="container-fluid main__div mt-4">
    <h4 class="my-3">Course Resources</h4>
    <form class="row cust-drop" action="{{ route('videos-upload') }}" id="video-section-form" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="video_user_id" id="video_user_id" value="{{ $auth->id }}" />
        <div class="form-group pb-3">
            <label for="course-type">Select Course</label>
            <select id="course-type-video" class="w-100" name="course_type_video">
                <option value="">Select Course Type</option>
                @foreach ($getCourses as $key => $getCourse)
                <option value="{{ $getCourse->id }}">{{ $getCourse->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group pb-3">
            <label for="topic-type">Select Topic</label>
            <select id="topic-type-video" class="w-100" name="topic_type_video">
                <option value="">Select Topic</option>
            </select>
        </div>
        {{-- <div class="form-group pb-3">
            <label for="course-thumbnail">Course Thumbnail</label>
            <input id="course-thumbnail" type="file" name="course_thumbnail" class="form-control" placeholder="Write here...">
        </div> --}}
        <div class="row align-items-end">
            <div class="fields-container-video">

                <div class="row align-items-end video-repeating-section">
                    <div class="form-group col-sm-4">
                        <label for="i-doc">Video Name</label>
                        <input id="video-name" type="text" name="video_name[]" class="form-control" placeholder="Write here...">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="video">Upload Video</label> <br>
                        <input id="video" type="file" name="video[]" class="form-control mb-3" placeholder="Write here...">
                    </div>
                    <div class="form-group col-sm-4">
                        <!-- Initially, keep at least one section -->
                        <button type="button" class="btn btn-danger delete-btn-video" style="display:none; margin-bottom: 12px;">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <button type="button" id="add-new-video" class="btn default-btn w-100 mb-3">Add New</button>
                </div>
            </div>
        </div>
        <small class="form-text text-muted">* Max File size: {{ getFileSizeInReadable(ini_get('upload_max_filesize')) }}</small>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-success" id='upload-videos'>Upload</button>
        </div>
    </form>
    <div class="progress d-none">
        <div class="progress-bar progress-bar-striped progress-bar-animated" id="progress-bar">
            <div id="progress-bar-percentage"></div>
        </div>
    </div>
</div>