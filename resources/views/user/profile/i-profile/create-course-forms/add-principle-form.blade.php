<div class="container-fluid main__div mt-4">
    <h4 class="my-3">Add Principal Topics</h4>
    <form class="row cust-drop" id="principle-form">
        <input type="hidden" id="principl-user_id" value="{{ $auth->id }}" />
        <div class="form-group pb-3">
            <label for="course-type">Choose Course</label>
            <select id="principle-course-type" class="w-100">
                <option value="">Select Course Type</option>
                @foreach ($getCourses as $key => $getCourse)
                <option value="{{ $getCourse->id }}">{{ $getCourse->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group pb-3">
            <label for="course-name">Add Principle Topic</label>
            <input class="w-100 form-control float-none" type="text" placeholder="Write here..." name="principle_topic" id="principle_topic">
        </div>
        <div class="form-group mb-3">
            <button type="button" class="btn btn-success" id="add-principle-topic">Submit</button>
            {{-- <a id="creat_course" href="" class="btn btn-success">Submit</a> --}}
        </div>
    </form>
</div>