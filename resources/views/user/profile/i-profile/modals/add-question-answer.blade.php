<div class="modal fade" id="int_que_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="c_course_ModalLabel">Add Interactive Questions</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="video_id" id="video_id">
                <input type="hidden" id="user_id" value="{{ $auth->id }}" />
                <div class="row align-items-center my-4">
                    <div class="col-12 col-md-12 mb-5 text-center" id="video-section-modal">
                    </div>
                    <div class="col-12 mb-4">
                        <div class="text-center">
                            <a id="add_question" class="btn default-btn"> Add New Question </a>
                        </div>
                        <form id="question-answer-form" enctype="multipart/form-data">
                            @csrf
                            <div class="add-course-section  border-bottom py-3" style="display: none">
                                <div class="form-group">
                                    <label>Enter Question </label>
                                    <div id="question" class='question' contenteditable="true" style="border:10px;">
                                    </div>

                                    <div class="row">
                                        <div class="col-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Select Display Time</label>
                                                <input class="form-control" type="text" placeholder="Write here..." name="display_time" id="display_time">
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Option</label> <br>
                                                <a id="add-option" href="#" class="btn default-btn">Add Option </a>
                                            </div>
                                        </div>

                                        <div id="option_list" class="row option-list">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        {{-- <inpu href="" class="btn default-btn">Add Question </a> --}}
                                        <button type="submit" class="btn default-btn">Add Question</button>
                                    </div>
                                </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item" id="question-answer">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
