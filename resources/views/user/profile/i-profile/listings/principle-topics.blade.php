<div class="container-fluid main__div mt-4">
    <h4 class="my-3">List Principle Topics</h4>
    <div class="form-group pb-3">
        <label for="course-type">Choose Course</label>
        <select id="principle-course" class="w-100">
            <option value="">Select Course Type</option>
            @foreach ($getCourses as $key => $getCourse)
            <option value="{{ $getCourse->id }}">{{ $getCourse->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group pb-3">
        <label for="course-name"></label>
        {{-- <input class="w-100 nice-select float-none" type="text" placeholder="Write here..."
                name="principle_topic" id="principle_topic"> --}}

        <div class="container mt-5">
            <ul id="sortable-list" class="list-group">
            </ul>
        </div>
    </div>
</div>