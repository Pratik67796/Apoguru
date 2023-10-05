@extends('user.layouts.learnerProfile')
@section('title', 'Create a course')
@section('content')
<style>
    .error-message {
        color: red;
    }

    #upload-videos.loading::after {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #fff;
        border-top: 2px solid #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-left: 5px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .progress-container {
        margin-top: 20px;
    }

    .progress-bar {
        width: 0%;
        height: 20px;
        background-color: #007bff;
        border-radius: 5px;
        transition: width 0.3s;
    }

    .text-muted {
        color: red !important;
        margin-bottom: 10px;
    }
    .add-supplementary-file-label{
        padding: 5px;
        border: 1px solid #000;
        border-radius: 13px;
        cursor: pointer;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    .nice-select-scrollable .list {
        max-height: 200px; /* Adjust the value as needed */
        overflow-y: auto;
    }
    .payment{
        cursor: pointer;
    }

</style>

<div class="container-fluid main__div">
    <h4 class="my-3">Course Information</h4>
    <form class="row cust-drop" id="course-information-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="user_id" value="{{ $auth->id }}" />
        <div class="form-group pb-3">
            <label for="course-type">Choose Course Type</label>
            <select id="course-type-information" class="w-100">
                <option value="">Select Course Type</option>
                @foreach ($main_categories as $mainCatgory)
                <option value={{ $mainCatgory->id }}>{{ $mainCatgory->name }}</option>
                @endforeach
            </select>
        </div>
        <span class="error-message" id="course-type-error"></span>
        <div class="form-group pb-3">
            <label for="parent-sub-category">Parent Subcategory</label>
            <select id="parent-sub-category-information" class="w-100 parent-sub-category-information">
                <option value="">Select Parent Subcategory</option>
            </select>
        </div>
        <span class="error-message" id="parent-sub-category-information-error"></span>
        <div class="form-group pb-3">
            <label for="child-subcategory">Child Subcategory</label>
            <select class="w-100" id="child-subcategory-information">
                <option value=''>Select Child Subcategory</option>
            </select>
        </div>
        <span class="error-message" id="child-subcategory-information-error"></span>
        <div class="form-group pb-3">
            <label for="course-name">Course Name</label>
            <input class="w-100 form-control" type="text" placeholder="Write here..." name="course-name-information" id="course-name-information">
        </div>
        <span class="error-message" id="course-name-information-error"></span>

        <div class="row g-0">
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="course-name">Actual Sale Price</label>
                    <div class="flex-input-fields" style="display:flex;">
                        <span class="nice-select icon-input append_currency_simbol" disabled style="width: 47px;padding-right: 18px;background-color: #cccbcb;margin-right: -2px;"></span>
                        <input class="w-100 form-control float-none" type="text" placeholder="Write here..." name="course-name" id="actual-sell-price">
                    </div>
                </div>
                <span class="error-message" id="actual-sell-price-error"></span>
            </div>

            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="usd-price">Price In USD</label>
                    <div class="flex-input-field">
                        <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                        <input class="w-100 nice-select float-none" type="number" placeholder="Price In USD" name="usd-price" id="usd-price-information" disabled>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="sell-price">Sale Price (Optional)</label>
                    <div class="flex-input-fields" style="display:flex;">
                        <span class="nice-select icon-input append_currency_simbol" disabled style="width: 47px;padding-right: 18px;background-color: #cccbcb;margin-right: -2px;"></span>
                        <input type="text" class="w-100 form-control" placeholder="Write here..." name="sell-price" id="sell-price-type-option">
                    </div>
                </div>
                <span class="error-message" id="sell-price-type-option-error"></span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="sell-price">Sale Price In USD</label>
                    <div class="flex-input-field">
                        <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                        <input type="number" class="w-100 nice-select float-none" placeholder="Sell Price In USD" name="sell-price" id="sell-price-option" disabled>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <!-- <textarea class="w-100 nice-select float-none" placeholder="Write here..." id="desc" name="desc"></textarea> -->
            <div id="desc" style="border:20px;">
                <p>Please write description.</p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 px-3">
            <div class="form-group pb-3">
                <label for="sell-price">Course Image</label>
                <div class="flex-input-field">
                    <input id="couse_image" type="file" name="couse_image" class="form-control mb-3">
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <button type="submit" id="creat_course" class="btn btn-success">Create</button>
            {{-- <a  href="" class="btn btn-success">Create</a> --}}
        </div>
    </form>
</div>

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
        <div class="form-group pb-3">
            <label for="course-thumbnail">Course Thumbnail</label>
            <input id="course-thumbnail" type="file" name="course_thumbnail" class="form-control" placeholder="Write here...">
        </div>
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
            {{-- <a id="creat_course" href="" class="btn btn-success">Submit</a> --}}
        </div>
    </form>
    {{-- <div class="progress-container">
        <div class="progress-bar" id="progress-bar"></div>
    </div> --}}
    <div class="progress d-none">
        <div class="progress-bar progress-bar-striped progress-bar-animated" id="progress-bar">
            <div id="progress-bar-percentage"></div>
        </div>
    </div>
</div>

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
                    {{-- <div class="col-12 mt-4">
                        <label for='now-payment' class="payment">Now Payment</label>
                        <input type="radio" name="payment_mode" value="now-payment" id="now-payment" class="payment" onChange="paymentMode()">
                        <label for="flutter-wave" class="payment">Flutter Wave</label>
                        <input type="radio" name="payment_mode" value="flutter-wave" id="flutter-wave" class="payment" onChange="paymentMode()">
                    </div>
                    <div class="now-payment-block">
                        <select>
                        </select>
                    </div> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-publish" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary publish" id="publish">Publish</button>
            </div>
        </div>
    </div>
</div>
{{-- Course Publish Modal END Here --}}

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



<div class="mt-4 px-4 pt-4 d-flex align-items-center justify-content-between flex-wrap" style="background-color: #19875445;border-radius: 20px;">
    <button type="button" class="btn btn-outline-primary mb-4 me-2" data-bs-toggle="modal" data-bs-target="#course-modal">
        Publish 10 USD
    </button>
    <a class="btn btn-outline-primary mb-4 me-2">Create Course Certificate</a>
    <a class="btn btn-outline-primary mb-4">Download my Flyer</a>
</div>

{{-- Lecture Video Modal for add Question and answer file Start here --}}
<div class="modal fade" id="question-answer-modal" tabindex="-1" aria-labelledby="question-answer-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Question and Answer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="question-answer-form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="video_id" id="video_id">
            <input type="hidden" id="user_id" value="{{ $auth->id }}" />
            <div class="modal-body">
                <label>Question</label>
                <div id="question" class='question'  contenteditable="true" style="border:10px;">
                </div>
            </div>

            <div class="modal-body">
                <label>First Answer Option</label>
                <div id="answer-1" class='answer-1'  contenteditable="true" style="border:10px;">
                </div>
                <label><strong>Correct Answer ?</strong></label>
                <input type="radio" id="correct-answer" name="correct_answer" class='correct-answer mt-1' value="1">
            </div>

            <div class="modal-body">
                <label>Second Answer Option</label>
                <div id="answer-2" class='answer-2'  contenteditable="true" style="border:10px;">
                </div>
                <label><strong>Correct Answer ?</strong></label>
                <input type="radio" id="correct-answer" name="correct_answer" class='correct-answer mt-1' value="2">
            </div>

            <div class="modal-body">
                <label>Third Answer Option</label>
                <div id="answer-3" class='answer-3'  contenteditable="true" style="border:10px;">
                </div>
                <label><strong>Correct Answer ?</strong></label>
                <input type="radio" id="correct-answer" name="correct_answer" class='correct-answer mt-1' value="3">
            </div>

            <div class="modal-body">
                <label>Fourth Answer Option</label>
                <div id="answer-4" class='answer-4'  contenteditable="true" style="border:10px;">
                </div>
                <label><strong>Correct Answer ?</strong></label>
                <input type="radio" id="correct-answer" name="correct_answer" class='correct-answer mt-1' value="4">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Lecture Video Modal for add Question and answer file End here --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

<script>
    var resultFrom;
    var resultTo;
    var searchValue;

    $("#actual-sell-price").keyup(function() {
        var inputValue = $(this).val();
        var numericValue = inputValue.replace(/[^0-9.]/g, '');
        $(this).val(numericValue);

        // Check if the input value is not numeric
        if (inputValue !== numericValue) {
            $('#actual-sell-price-error').text('Please enter only numeric values.');
            return;
        } else {
            $('#actual-sell-price-error').text('');
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom = geoplugin_currencyCode();
        window.id = resultFrom;
        console.log(window.id);
        resultTo = "USD";
        searchValue = $('#actual-sell-price').val();
        fetch(`${api}`).then(currency => {
            return currency.json();
        }).then(displayResults);
    });

    function displayResults(currency) {
        let fromRate = currency.rates[resultFrom];
        let toRate = currency.rates[resultTo];
        // console.log(((toRate / fromRate) * searchValue).toFixed(2));
        $('#usd-price-information').val(((toRate / fromRate) * searchValue).toFixed(2));
    }

    var resultFrom_1;
    var resultTo_1;
    var searchValue_1;

    $("#sell-price-type-option").keyup(function() {
        var inputValue = $(this).val();
        var numericValue = inputValue.replace(/[^0-9.]/g, '');
        $(this).val(numericValue);

        // Check if the input value is not numeric
        if (inputValue !== numericValue) {
            $('#sell-price-type-option-error').text('Please enter only numeric values.');
            return;
        } else {
            $('#sell-price-type-option-error').text('');
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom_1 = geoplugin_currencyCode();
        resultTo_1 = "USD";
        searchValue_1 = $('#sell-price-type-option').val();
        fetch(`${api}`).then(currency => {
            return currency.json();
        }).then(displayResults_sellprice);
    });

    function displayResults_sellprice(currency) {
        let fromRate_1 = currency.rates[resultFrom_1];
        let toRate_1 = currency.rates[resultTo_1];
        // console.log(((toRate_1 / fromRate_1) * searchValue).toFixed(2));
        $('#sell-price-option').val(((toRate_1 / fromRate_1) * searchValue_1).toFixed(2));
    }


    $(document).ready(function() {
        function getCurrencySymbol(currencyCode) {
            try {
                const formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency'
                    , currency: currencyCode
                , });
                const formattedSymbol = formatter.formatToParts(1).find(part => part.type === 'currency').value;
                return formattedSymbol;
            } catch (error) {
                console.error('Error:', error);
                return currencyCode;
            }
        }
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        const currencyCode = geoplugin_currencyCode();
        const symbol = getCurrencySymbol(currencyCode);
        $('.append_currency_simbol').text(symbol);
        console.log(symbol);
    });

</script>
@endsection
