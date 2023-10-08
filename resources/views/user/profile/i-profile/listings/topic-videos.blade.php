<div class="container-fluid main__div mt-4">
    <h4 class="my-3">Topic Video</h4>
    <div class="form-group pb-3">
        <label for="course-type">Select Course</label>
        <select id="topic-video" class="w-100 nice-select-scrollable" name="course_type_video" >
            <option value="">Select Course Type</option>
            @foreach ($getCourses as $key => $getCourse)
            <option value="{{ $getCourse->id }}">{{ $getCourse->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group" style="padding-bottom:53px; padding-top:40px;">
        <label for="topic-video-topic">Select Topic</label>
        <select id="topic-video-topic" class="w-100" name="topic_type_video">
            <option value="">Select Topic</option>
        </select>
        <input type="hidden" id="video-id">
    </div>

    <ul id="sortable-list-video" class="list-group-videp">
    </ul>

</div>