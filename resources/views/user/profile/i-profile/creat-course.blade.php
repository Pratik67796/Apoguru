@extends('user.layouts.learnerProfile')
@section('title', 'Create a course')
@section('content')
<style>
    .error-message{
        color:red;
    }
</style>
    <div class="container-fluid main__div">
        <h4 class="my-3">Course Information</h4>
        <form class="row cust-drop" id="course-information-form">
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
                <input class="w-100 form-control" type="text" placeholder="Write here..."
                    name="course-name-information" id="course-name-information">
            </div>
            <span class="error-message" id="course-name-information-error"></span>

            <div class="row g-0">
                <div class="col-12 col-sm-12 col-md-6 px-3">
                    <div class="form-group pb-3">
                        <label for="course-name">Actual Sale Price</label>
                        <div class="flex-input-field">
                            <span class="nice-select icon-input append_currency_simbol" disabled></span>
                            <input class="w-100 nice-select float-none" type="number" placeholder="Write here..."
                                name="course-name" id="actual-sell-price">
                        </div>
                    </div>
                    <span class="error-message" id="actual-sell-price-error"></span>
                </div>
                
                <div class="col-12 col-sm-12 col-md-6 px-3">
                    <div class="form-group pb-3">
                        <label for="usd-price">Price In USD</label>
                        <div class="flex-input-field">
                            <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                            <input class="w-100 nice-select float-none" type="number" placeholder="Price In USD"
                                name="usd-price" id="usd-price-information" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                    <div class="form-group pb-3">
                        <label for="sell-price">Sale Price (Optional)</label>
                        <div class="flex-input-field">
                            <span class="nice-select icon-input append_currency_simbol" disabled></span>
                            <input type="number" class="w-100 nice-select float-none" placeholder="Write here..."
                                name="sell-price" id="sell-price-type-option">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 px-3">
                    <div class="form-group pb-3">
                        <label for="sell-price">Sell Price In USD</label>
                        <div class="flex-input-field">
                            <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                            <input type="number" class="w-100 nice-select float-none" placeholder="Sell Price In USD"
                                name="sell-price" id="sell-price-option" disabled>
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

            <div class="form-group mb-3">
                <button type="button" id="creat_course" class="btn btn-success">Create</button>
                {{-- <a  href="" class="btn btn-success">Create</a> --}}
            </div>
        </form>
    </div>

    <div class="container-fluid main__div mt-4">
        <h4 class="my-3">Topics</h4>
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
                <input class="w-100 nice-select float-none" type="text" placeholder="Write here..."
                    name="principle_topic" id="principle_topic">
            </div>
            <div class="form-group mb-3">
                <button type="button" class="btn btn-success" id="add-principle-topic">Submit</button>
                {{-- <a id="creat_course" href="" class="btn btn-success">Submit</a> --}}
            </div>
        </form>
    </div>

    <div class="container-fluid main__div mt-4">
        <h4 class="my-3">Principle Topics</h4>
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
        <form class="row cust-drop" action="{{ route('videos-upload') }}" id="video-section-form" method="POST"
            enctype="multipart/form-data">
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
                <input id="course-thumbnail" type="file" name="course_thumbnail" class="form-control"
                    placeholder="Write here...">
            </div>
            <div class="row align-items-end">
                <div class="fields-container-video">

                    <div class="row align-items-end video-repeating-section">
                        <div class="form-group col-sm-4">
                            <label for="i-doc">Video Name</label>
                            <input id="video-name" type="text" name="video_name[]" class="form-control"
                                placeholder="Write here...">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="video">Upload Video</label> <br>
                            <input id="video" type="file" name="video[]" class="form-control mb-3"
                                placeholder="Write here...">
                        </div>
                        <div class="form-group col-sm-4">
                            <!-- Initially, keep at least one section -->
                            <button type="button" class="btn btn-danger delete-btn-video"
                                style="display:none; margin-bottom: 12px;">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <button type="button" id="add-new-video" class="btn default-btn w-100 mb-3">Add New</button>
                    </div>
                </div>
            </div>


            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success">Upload</button>
                {{-- <a id="creat_course" href="" class="btn btn-success">Submit</a> --}}
            </div>
        </form>
    </div>

    <div class="container-fluid main__div mt-4">
        <h4 class="my-3">Topic Video</h4>
        <div class="form-group pb-3">
            <label for="course-type">Select Course</label>
            <select id="topic-video" class="w-100" name="course_type_video">
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

        {{-- <div class="row justify-content-between mb-3">
            <div class="col-12 col-md-12 mb-5 mb-lg-0 col-xl-5 col-lg-5">
                <video class="" poster="{{ URL::asset('assets/images/school-dashboard-main.jpeg') }}"
                    width="100%" height="" controls>
                    <source src="{{ URL::asset('assets/video/school-dashboard-main.mp4') }}" type="">
                    <source src="{{ URL::asset('assets/video/school-dashboard-main.ogg') }}" type="">
                </video>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-7 my-auto">
                <div class="">
                    <h6><strong>Video Title :</strong> Video Name</h6>
                    <h6><strong>Video Duration :</strong> 1min 5sec</h6>
                    <h6><strong>Interactive Quastions :</strong> 4 </h6>
                    <div class="position-relative">
                        <input type="file" class="position-absolute" name="" style="opacity: 0">
                        <a class="">Add Supplementary file</a> <br>
                    </div>
                    <a class="" data-bs-toggle="modal" data-bs-target="#int_que_Modal">Add Interactive
                        Questions</a> <br>
                    <a class="btn default-btn mt-3">Delete Video</a>
                </div>
            </div>
        </div> --}}

        </ul>

    </div>

    <div class="mt-4 px-4 pt-4 d-flex align-items-center justify-content-between flex-wrap"
        style="background-color: #19875445;border-radius: 20px;">
        <a class="btn white-btn mb-4 me-2">Publish 10 USD</a>
        <a class="btn white-btn mb-4 me-2">Create Course Certificate</a>
        <a class="btn white-btn mb-4">Download my Flyer</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>    
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

    <script>
    var resultFrom;
    var resultTo;
    var searchValue;

    $("#actual-sell-price").keyup(function() {
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom = geoplugin_currencyCode();
        window.id= resultFrom;
        console.log(window.id);
        resultTo = "USD";
        searchValue = $('#actual-sell-price').val();
        fetch(`${api}`).then(currency =>{
                return currency.json();
            }).then(displayResults);
    });

    function displayResults(currency) {
        let fromRate = currency.rates[resultFrom];
        let toRate = currency.rates[resultTo];
        // console.log(((toRate / fromRate) * searchValue).toFixed(2));
        $('#usd-price-information').val(((toRate / fromRate) * searchValue).toFixed(2));
    }
    </script>


    <script>
        var resultFrom_1;
        var resultTo_1;
        var searchValue_1;
    
        $("#sell-price-type-option").keyup(function() {
        const api = "https://api.exchangerate-api.com/v4/latest/USD";
        resultFrom_1 = geoplugin_currencyCode();
        resultTo_1 = "USD";
        searchValue_1 = $('#sell-price-type-option').val();
        fetch(`${api}`).then(currency =>{
                return currency.json();
            }).then(displayResults_sellprice);
        });
    
        function displayResults_sellprice(currency) {
        let fromRate_1 = currency.rates[resultFrom_1];
        let toRate_1 = currency.rates[resultTo_1];
        // console.log(((toRate_1 / fromRate_1) * searchValue).toFixed(2));
        $('#sell-price-option').val(((toRate_1 / fromRate_1) * searchValue_1).toFixed(2));
        }
    </script>

    <script>

        $( document ).ready(function() {
            function getCurrencySymbol(currencyCode) {
                try {
                    const formatter = new Intl.NumberFormat('en-US', {
                        style: 'currency',
                        currency: currencyCode,
                    });
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
