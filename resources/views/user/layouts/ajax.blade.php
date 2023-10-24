<script>
    $(document).ready(function() {
        $(".switch.on").click(function() {
            $(this).removeClass("on");
            $(this).addClass("off");
            $(".switch img").attr("src", "{{ URL::asset('assets/images/icon-learner-switch.png')}}");
        });

        $(".cust-label").click(function() {
            $(".cust-label").removeClass("active");
            $(this).addClass("active");
        });

        $("#add_question").click(function() {
            $(".add-course-section").slideToggle("slow");
        });

        // $("#add-option").click(function() {
        //   $("#option_list").append('<div class="col-12 col-md-6 option"><div class="form-group"><label>Option A</label><input class="form-control" type="text" placeholder="Write here..." name=""></div></div>');
        //});

        $('.choose_image').on('click', function() {
            $('#avtar').click();
        });

        // Handle "Add New" button click
        $('#addNewBtn').on('click', function() {
            cloneFields();
            updateDeleteButtonsVisibility();
        });

        // Handle "Delete" button click (using event delegation to handle dynamically added elements)
        $(document).on('click', '.delete-btn', function() {
            if (!$('.field').length) {
                return;
            }

            $(this).closest('.field').remove();
            updateDeleteButtonsVisibility();
        });

        // Clone the fields and add them to the container
        function cloneFields() {
            var clonedFields = $('.field:first').clone();
            clonedFields.find('input').val(''); // Clear input values if needed
            $('.fields-container').append(clonedFields);
        }

        // Update the visibility of "Delete" buttons
        function updateDeleteButtonsVisibility() {
            var deleteButtons = $('.delete-btn');
            if (deleteButtons.length === 1) {
                deleteButtons.hide();
            } else {
                deleteButtons.show();
            }
        }

        $('#socialMediaSelect').on('change', function() {
            var selectedPlatforms = $(this).val();
            if (selectedPlatforms) {
                var newInput = '';

                // Check if the input box for the platform already exists
                if (selectedPlatforms === 'Facebook') {
                    if ($('#additionalInputContainer input[name="facebook"]').length === 0) {
                        $('#additionalInputContainer').append('<div class="form-group">' +
                            '<input type="text" class="form-control" name="facebook" placeholder="Enter your Facebook profile link">' +
                            '</div>');
                    }
                } else if (selectedPlatforms === 'Instagram') {
                    if ($('#additionalInputContainer input[name="instagram"]').length === 0) {
                        $('#additionalInputContainer').append('<div class="form-group">' +
                            '<input type="text" class="form-control" name="instagram" placeholder="Enter your Instagram profile link">' +
                            '</div>');
                    }
                } else if (selectedPlatforms === 'Youtube') {
                    if ($('#additionalInputContainer input[name="youtube"]').length === 0) {
                        $('#additionalInputContainer').append('<div class="form-group">' +
                            '<input type="text" class="form-control" name="youtube" placeholder="Enter your Youtube profile link">' +
                            '</div>');
                    }
                } else if (selectedPlatforms === 'LinkedIn') {
                    if ($('#additionalInputContainer input[name="linkedin"]').length === 0) {
                        $('#additionalInputContainer').append('<div class="form-group">' +
                            '<input type="text" class="form-control" name="linkedin" placeholder="Enter your LinkedIn profile link">' +
                            '</div>');
                    }
                } else if (selectedPlatforms === 'Twitter') {
                    if ($('#additionalInputContainer input[name="twitter"]').length === 0) {
                        $('#additionalInputContainer').append('<div class="form-group">' +
                            '<input type="text" class="form-control" name="twitter" placeholder="Enter your Twitter profile link">' +
                            '</div>');
                    }
                }
            }
        });

        function deleteDocument(id) {
            $.ajax({
                url: "{{ route('profile-delete-document') }}"
                , type: "POST"
                , data: {
                    id
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(res) {
                    console.log(res);
                }
            })
        }

        $('#course-type-information').on('change', function() {
            $.ajax({
                url: "{{ route('get-parent-subcategroy') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , "id": this.value
                }
                , success: function(res) {
                    if (res.status === 200) {
                        var selectElement = $('#parent-sub-category-information');
                        let htmlParentSubCategory =
                            '<option value="">Select Parent Subcategory</option>';
                        for (let index = 0; index < res.data.length; index++) {
                            let data = res.data[index];
                            htmlParentSubCategory +=
                                `<option value="${data.id}">${data.name}</option>`;
                        }
                        // Clear the existing options before appending new ones
                        selectElement.find('option').remove();
                        // Append the new options
                        selectElement.append(htmlParentSubCategory);
                        // Update the "nice-select" plugin after modifying options
                        selectElement.niceSelect('update');
                    }
                }
            });
        });

        $('#parent-sub-category-information').on('change', function() {
            $.ajax({
                url: "{{ route('get-school-parent') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , main_category_id: $('#course-type-information').val()
                    , parent_sub_category_id: this.value
                }
                , success: function(res) {
                    if (res.status === 200) {
                        var selectElement = $('#child-subcategory-information');
                        let htmlParentSubCategory =
                            '<option value="">Select Parent Subcategory</option>';
                        for (let index = 0; index < res.data.length; index++) {
                            let data = res.data[index];
                            htmlParentSubCategory +=
                                `<option value="${data.id}">${data.name}</option>`;
                        }
                        // Clear the existing options before appending new ones
                        selectElement.find('option').remove();
                        // Append the new options
                        selectElement.append(htmlParentSubCategory);
                        // Update the "nice-select" plugin after modifying options
                        selectElement.niceSelect('update');
                    }
                }
            })
        });

        // var description = CKEDITOR.replace('desc');
        // CKFinder.setupCKEditor(description);
        // CKEDITOR.add
        var editor;
        var uploadUrl = `"{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}"`;

        ClassicEditor.create(document.querySelector('#desc'), {
            ckfinder: {
                uploadUrl: uploadUrl //'{{route('ckeditor.upload').'?_token='.csrf_token()}}',
            }
        }).then(createdEditor => {
            editor = createdEditor; // Store the editor instance
        }).catch(error => {

        });

        $('#course-information-form').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            formData.append('image', $('#couse_image')[0].files[0]);
            formData.append('courseType', $('#course-type-information').val());
            formData.append('parentSubCategory', $('#parent-sub-category-information').val());
            formData.append('childSubCategroy', $('#child-subcategory-information').val());
            formData.append('courseName', $('#course-name-information').val());
            formData.append('actualSellPriceType', $('#actual-sell-price').val());
            formData.append('actualSellCurrent', $('#usd-price-information').val());
            formData.append('sellPriceTypeOption', $('#sell-price-type-option').val());
            formData.append('sellPriceOption', $('#sell-price-option').val());

            formData.append('user_id', $('#user_id').val());
            if (editor) {
                formData.append('desc', editor.getData());
            }

            // console.log('editor',formData);
            let user_id = $('#user_id').val()
            $('#creat_course').prop("disabled", true);

            $.ajax({
                url: "{{ route('save-learnere-course') }}"
                , type: "POST"
                , data: formData
                , contentType: false, // Set content type to false
                processData: false, // Prevent jQuery from processing the data
                success: function(res) {
                    if (res.status === 200) {
                        $('#creat_course').prop("disabled", false);
                        toastr.success(res.message);
                        editor.setData('')
                        $('#course-information-form')[0].reset();
                        $('select').niceSelect('destroy');
                        $('select').niceSelect();
                    }
                }
                , error: function(err) {
                    $('#creat_course').prop("disabled", false);
                    let error = err.responseJSON.errors;
                    if (error.courseType) {
                        $('#course-type-error').text(error.courseType[0])
                    }
                    if (error.parentSubCategory) {
                        $('#parent-sub-category-information-error').text(error.parentSubCategory[0])
                    }
                    if (error.childSubCategroy) {
                        $('#child-subcategory-information-error').text(error.childSubCategroy[0])
                    }
                    if (error.courseName) {
                        $('#course-name-information-error').text(error.courseName[0])
                    }
                    if (error.actualSellPriceType) {
                        $('#actual-sell-price-error').text(error.actualSellPriceType[0])
                    }
                    //console.log('err',err.responseJSON.errors.main_category_id[0]);
                }
            })
        })

        $('#add-principle-topic').on('click', function() {
            let principleCourseType = $('#principle-course-type').val()
            let principleTopic = $('#principle_topic').val()
            let user_id = $('#principl-user_id').val();
            $.ajax({
                url: "{{ route('save-prinicple-topic') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , principleCourseType: principleCourseType
                    , principleTopic: principleTopic
                    , user_id: user_id
                }
                , success: function(res) {
                    toastr.success(res.message);
                    $('#principle-form')[0].reset();
                    $('select').niceSelect('destroy');
                    $('select').niceSelect();
                }
            })
        });

        $("#sortable-list").sortable({
            update: function(event, ui) {
                // Get the order of list items after reordering
                var order = $(this).sortable('toArray', {
                    attribute: 'data-id'
                });

                // Send an AJAX request to update the positions in the database
                $.ajax({
                    url: "{{ route('principle-position-update') }}"
                    , method: "POST"
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , order: order
                    }
                    , success: function(response) {
                        toastr.success(response.message);
                    }
                });
            }
        });

        $('#principle-course').on('change', function() {
            $.ajax({
                url: "{{ route('get-principle-topic') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , course_id: this.value
                }
                , success: function(res) {
                    let html = '';
                    if (res.status === 200) {
                        for (let index = 0; index < res.data.length; index++) {
                            html +=
                                `<li class="list-group-item draggable-item" draggable="true" data-id="${res.data[index].id}">`
                            html +=
                                `<span class="reposition-indicator">&#9679;&#9679;&#9679;</span>`
                            html += `<span class="item-name">${res.data[index].name}</span>`
                            html += `</li>`
                        }
                        $('#sortable-list').html(html)
                    }
                }
            })
        });

        $('#course-type-video').on('change', function() {
            $.ajax({
                url: "{{ route('get-principle-topic') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , course_id: this.value
                }
                , success: function(res) {
                    let html = '';
                    if (res.status === 200) {
                        var selectElement = $('#topic-type-video');
                        let htmlParentSubCategory =
                            '<option value="">Select Topic</option>';
                        for (let index = 0; index < res.data.length; index++) {
                            let data = res.data[index];
                            htmlParentSubCategory +=
                                `<option value="${data.id}">${data.name}</option>`;
                        }
                        // Clear the existing options before appending new ones
                        selectElement.find('option').remove();
                        // Append the new options
                        selectElement.append(htmlParentSubCategory);
                        // Update the "nice-select" plugin after modifying options
                        selectElement.niceSelect('update');
                    }
                }
            })
        });

        $('#add-new-video').on('click', function() {
            cloneVideoFields();
            updateDeleteVideoButtonsVisibility();
        });

        function cloneVideoFields() {
            var clonedFields = $('.video-repeating-section:first').clone();
            clonedFields.find('input').val(''); // Clear input values if needed
            $('.fields-container-video').append(clonedFields);
        }

        function updateDeleteVideoButtonsVisibility() {
            var deleteButtons = $('.delete-btn-video');
            if (deleteButtons.length === 1) {
                deleteButtons.hide();
            } else {
                deleteButtons.show();
            }
        }
        updateDeleteVideoButtonsVisibility()

        $(document).on('click', '.delete-btn-video', function() {
            if ($('.video-repeating-section').length === 1) {
                return;
            }
            //{{-- $(this).parent('.video-repeating-section').remove(); --}}
            $(this).closest('.video-repeating-section').remove();
            updateDeleteVideoButtonsVisibility();
        });

        $('#video-section-form').submit(function(e) {
            e.preventDefault();
            // Select the submit button
            var button = $('#upload-videos');
            $('#upload-videos').attr("disabled", true);

            // Disable the button to prevent multiple clicks
            button.prop('disabled', true);

            // Add a class to apply the loading CSS
            button.addClass("loading");
            let progressBar = document.getElementById("progress-bar");
            $('.progress').removeClass('d-none')
            //return false;

            var fileInputs = document.querySelectorAll('#video-section-form input[name="video[]"]');

            var fileStatus = false;
            var totalFileSizeInBytes = 0;
            var laravelFileSizeMax = parseInt("{{ getFileSizeIn(ini_get('upload_max_filesize')) }}")
            fileInputs.forEach(function(fileInput, index) {
                var selectedFiles = fileInput.files;
                // Now, you can work with the selected files for each file input
                if (selectedFiles.length > 0) {
                    //console.log(selectedFiles[index].file);
                    var fileSizeInBytes = selectedFiles[index]; // Size in bytes
                    var fileSizeInKilobytes = fileSizeInBytes / 1024; // Convert bytes to kilobytes (KB)
                    var fileSizeInMegabytes = fileSizeInKilobytes / 1024; // Convert kilobytes to megabytes (MB)
                    totalFileSizeInBytes += fileSizeInMegabytes;

                } else {
                    toastr.error("Video is required.");
                    button.prop('disabled', false);
                    button.removeClass("loading");
                    fileStatus = true;
                }
            });
            if (fileStatus) {
                return;
            }
            if (totalFileSizeInBytes > laravelFileSizeMax) {
                toastr.error("Videos size is too large.");
                button.prop('disabled', false);
                button.removeClass("loading");
                fileStatus = true;
                return;
            }
            var formData = new FormData(this);
            $.ajax({
                url: $(this).attr('action')
                , type: 'POST'
                , data: formData
                , processData: false
                , contentType: false
                , xhr: function() {
                    const xhr = new window.XMLHttpRequest();

                    // Upload progress event
                    xhr.upload.addEventListener("progress", function(e) {
                        if (e.lengthComputable) {

                            const percentComplete = (e.loaded / e.total) * 100;
                            progressBar.style.width = percentComplete + "%";
                            $('#progress-bar-percentage').text(`${percentComplete.toFixed(2)}%`)
                        }
                    });

                    return xhr;
                }
                , success: function(response) {
                    if (response.success) {
                        $('#upload-videos').attr("disabled", false);
                        progressBar.style.width = "0%";
                        $('#video-section-form')[0].reset();
                        $('select').niceSelect('destroy');
                        $('select').niceSelect();
                        button.prop('disabled', false);
                        button.removeClass("loading");
                        $('#progress-bar-percentage').text('')
                        // window.location.reload
                        $('.progress').addClass('d-none')
                        toastr.success(response.message);
                    }
                }
                , error: function(xhr, status, error) {
                    if (xhr.status !== 422) {
                        // Server error is not 422, so display the progress bar
                        progressBar.style.width = "0%";
                        $('#progress-bar-percentage').text('');
                    }
                    toastr.clear();
                    $.each(xhr.responseJSON.errors, function(field, messages) {
                        $.each(messages, function(index, message) {
                            toastr.error(message);
                        });
                    });
                    progressBar.style.width = "0%";
                    $('#progress-bar-percentage').text('')
                    button.prop('disabled', false);
                    button.removeClass("loading");
                    //alert('An error occurred while uploading files.');
                }
            , });
        });

        $('#topic-video').on('change', function() {
            $.ajax({
                url: "{{ route('get-principle-topic') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , course_id: this.value
                }
                , success: function(res) {
                    let html = '';
                    if (res.status === 200) {
                        var selectElement = $('#topic-video-topic');
                        let htmlParentSubCategory =
                            '<option value="">Select Topic</option>';
                        for (let index = 0; index < res.data.length; index++) {
                            let data = res.data[index];
                            htmlParentSubCategory +=
                                `<option value="${data.id}">${data.name}</option>`;
                        }
                        // Clear the existing options before appending new ones
                        selectElement.find('option').remove();
                        // Append the new options
                        selectElement.append(htmlParentSubCategory);
                        // Update the "nice-select" plugin after modifying options
                        selectElement.niceSelect('update');
                    }
                }
            })
        });

        $('#topic-video-topic').on('change', function() {
            $('#video-id').val(this.value)
            $.ajax({
                url: "{{ route('get-lecture-video') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , principal_topic_id: this.value
                }
                , success: function(res) {
                    if (res.status === 200) {
                        $('#sortable-list-video').html(res.html)
                    }
                }
            })
        });

        $("#sortable-list-video").sortable({
            update: function(event, ui) {
                // Get the order of list items after reordering
                var order = $(this).sortable('toArray', {
                    attribute: 'data-id'
                });

                // Send an AJAX request to update the positions in the database
                $.ajax({
                    url: "{{ route('video-position-update') }}"
                    , method: "POST"
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , order: order
                    }
                    , success: function(response) {
                        toastr.success(response.message);
                    }
                });
            }
        });
        $("body").on("click", ".delete-video", function(e) {
            e.preventDefault();
            let text = "Are you sure you want to delete this plan?";
            if (confirm(text) == true) {
                // var id = $('.delete-video').getAttribute("data-id");
                var id = $('.delete-video').attr("data-id");

                $.ajax({
                    url: "{{ route('video-delete') }}"
                    , type: "POST"
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , id: id
                    }
                    , success: function(res) {
                        if (res.status === 200) {
                            toastr.success(res.message);
                            $.ajax({
                                url: "{{ route('get-lecture-video') }}"
                                , type: "POST"
                                , data: {
                                    "_token": "{{ csrf_token() }}"
                                    , principal_topic_id: $('#video-id').val()
                                }
                                , success: function(res) {
                                    if (res.status === 200) {
                                        $('#sortable-list-video').html(res.html)
                                    }
                                }
                            })
                        }
                    }
                })
            }
        });
        $('.publish').on('click', function() {
            let getPublishCourse = $('#publish-course').val();
            var selectElement = $('#publish-course');
            if (getPublishCourse === '') {
                toastr.error("Please your course.");
                return;
            }
            $.ajax({
                url: "{{ route('request-to-publish') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , courser: getPublishCourse
                }
                , success: function(res) {
                    if (res.status === 200) {
                        toastr.success(res.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000)
                    }
                    if (res.status === 201) {
                        toastr.error(res.message);
                        $('#course-modal').modal('hide');
                    }
                }
            });
        });
        $("body").on("change", ".add-supplementary-file", function(e) {
            e.preventDefault();
            let form = $(this).closest('form'); // Get the parent form of the changed file input
            console.log(form);

            console.log("hello");
            let formData = new FormData(form[0]); // Use form[0] to access the actual DOM element
            // Append the lecture_id from the same form
            formData.append('lecture_id', form.find('#lecture_id').val());

            $.ajax({
                url: "{{ route('add-supplementary-file') }}"
                , type: "POST"
                , data: formData
                , processData: false
                , contentType: false
                , success: function(res) {
                    console.log(res);
                }
            });

        });
        $('#supplementary-form').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            formData.append('supplementary_file', $('#supplementary_file')[0].files[0]);
            formData.append('video_id', $('#video_id').val());
            $.ajax({
                url: "{{ route('add-supplementary-file') }}"
                , type: "POST"
                , data: formData
                , contentType: false, // Set content type to false
                processData: false
                , success: function(res) {
                    if (res.status === 200) {
                        toastr.success(res.message);
                        $('#supplementary-form')[0].reset();
                        $('#lecture_video_supplementary_modal').modal('hide');

                    }
                }
            })
        });
    });

    function openSupplementModal(id) {
        $("#lecture_video_supplementary_modal").modal("show");
        $('#video_id').val(id)
    }

    $(document).ready(function() {
        $("body").on("click", ".add-qus-ans", function(e) {
            var id = $(this).data("id");
            var videoUrl = $(this).data("video-url");
            var thumbNail = $(this).data("thumb-nail");
            $("#int_que_Modal").modal("show");
            $('#video_id').val(id);
            $('.video-url-source').attr('src', videoUrl);
            $('.thumb-nail-image').attr('poster', 'mp4');
            var html = `<video poster="${thumbNail}" width="100%" height="" controls style="max-width: 300px;">
                <source src="${videoUrl}" type="" class="video-url-source">
                <source src="${videoUrl}" type=""  class="video-url-source">
                </video>`
            $(video_id).val(id)
            getQuestionAnswer(id)
            $('#video-section-modal').html(html);
        });
    });
    function getQuestionAnswer(id){
        $.ajax({
            url:"{{ route('get-question-answer') }}",
            type:"POST",
            data: {
                "_token": "{{ csrf_token() }}"
                , video_id: id,
            },
            success:function(res){
                $('#question-answer').html(res.html)
            }
        })
    }
    var ckeditorInstances = [];
    var uploadUrl = `"{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}"`;
    var optionCount = 0;

    function addOptionField() {
        if (optionCount >= 4) {
            // You can display a message or take any other desired action here
            toastr.error("Maximum number of answer reached (4)");
            return;
        }
        var optionList = document.getElementById("option_list");

        // Create a new div for the option field
        var optionDiv = document.createElement("div");
        optionDiv.classList.add("col-12", "col-sm-12");

        // Create a label element for the radio button
        var label = document.createElement("label");


        // Create an input element for the radio button (correct answer)
        var correctAnswerInput = document.createElement("input");
        correctAnswerInput.type = "radio";
        correctAnswerInput.name = "correct_answer"; // Name for radio buttons
        correctAnswerInput.classList.add("mt-2", "mb-2");
        //correctAnswerInput.name = "correct_answer";

        // Create a textarea for the CKEditor instance
        var answerLabel = document.createElement("span");
        answerLabel.textContent = "Write Answer"; // Text for the label
        var optionTextarea = document.createElement("textarea");
        optionTextarea.classList.add("form-control", "answer-field");
        optionTextarea.rows = "4"; // Adjust the number of rows as needed
        optionTextarea.placeholder = "Write here...";
        optionTextarea.name = "options[]"; // Use an array for multiple options

        // Calculate the position of the option (1-based)
        optionCount++;
        correctAnswerInput.value = optionCount;

        // Append the input and textarea to the label
        var labelText = document.createElement("span");
        labelText.textContent = " Right answer"; // Text for the label
        label.appendChild(correctAnswerInput);
        label.appendChild(labelText);
        //label.appendChild(optionTextarea);


        // Append the label to the option div
        optionDiv.appendChild(answerLabel);
        optionDiv.appendChild(optionTextarea);
        optionDiv.appendChild(label);

        // Append the option div to the option list
        optionList.appendChild(optionDiv);


        // Initialize CKEditor for the new option textarea
        ClassicEditor
            .create(optionTextarea, {
                ckfinder: {
                    uploadUrl: uploadUrl // Replace with your CKFinder upload URL
                }
            })
            .then(editor => {
                ckeditorInstances.push(editor);
                // You can access the editor instance here if needed
            })
            .catch(error => {
                console.error(error);
            });
    }
    var question;
    ClassicEditor.create(document.querySelector('.question'), {
        ckfinder: {
            uploadUrl: uploadUrl
        }
    }).then(createdEditor => {
        question = createdEditor; // Store the editor instance
    }).catch(error => {

    });
    document.addEventListener("DOMContentLoaded", function() {
        $('#add-option').click(function(){
            addOptionField();
        })
        //const element = document.getElementById('"add-option');
        //console.log(element);
        //if (element) {
          //  document.getElementById("add-option").addEventListener("click", function() {
            //    addOptionField();
           // });
       // }
    });

    $(document).ready(function() {
        $('#question-answer-form').on('submit', function(e) {
            e.preventDefault();
            var ckeditorValues = ckeditorInstances.map(function(editor) {
                return editor.getData();
            });
            const questionContent = question.getData();
            const correctAnswer = $('input[name="correct_answer"]:checked').val();;
            const user_id = $('#user_id').val()
            const display_time = $("#display_time").val()
            $.ajax({
                url: "{{ route('add-question-answer') }}"
                , type: "POST"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , video_id: $('#video_id').val()
                    , question: questionContent
                    , answers: ckeditorValues
                    , user_id: user_id
                    , correct_answer: correctAnswer,
                    display_time:display_time
                }
                , success: function(res) {
                    if (res.status === 200) {
                        toastr.success(res.message);
                        $('#question-answer-form')[0].reset();
                        $("#int_que_Modal").modal("hide");
                    }
                }
                , error: function(error) {
                    var errors = error.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]);
                    });
                }
            });
        });
    });

</script>
