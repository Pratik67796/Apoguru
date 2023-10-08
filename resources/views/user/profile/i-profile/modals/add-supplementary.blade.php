{{-- Lecture Video Modal for add supplementary file Start here --}}
<div class="modal fade" id="lecture_video_supplementary_modal" tabindex="-1" aria-labelledby="lecture_video_supplementary_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supplementary</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="supplementary-form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <!-- Modal content goes here -->
                <input type="hidden" name="video_id" id="video_id">
                <label>Add Supplementary file</label>
                <input type="file" class="form-control" name="supplementary_file" id="supplementary_file">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Lecture Video Modal for add supplementary file End here --}}