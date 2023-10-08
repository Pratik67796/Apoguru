{{-- Course Publish Modal Start Here --}}
<div class="modal fade" id="course-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select your course to publish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="publish-course">Select Course</label>
                        <select id="publish-course" class="w-100" name="publish_course">
                            <option value="">--Select Course--</option>
                            @foreach ($getCourses as $key => $getCourse)
                            @if($getCourse->status == 'Pending')
                            <option value="{{ $getCourse->id }}">{{ $getCourse->title }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-publish" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary publish" id="publish">Publish</button>
            </div>
        </div>
    </div>
</div>