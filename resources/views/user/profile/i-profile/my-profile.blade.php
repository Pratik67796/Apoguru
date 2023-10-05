@extends('user.layouts.learnerProfile')
@section('title', 'Profile')
@section('content')

    <div class="profile-img-section">
        <form action="{{ route('profile-image-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $auth->id }}" />
            {{-- <input type="hidden" name="profile_type" value="instructor_profile" /> --}}
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                    <img class="img-fluid me-3" src="{{ asset('storage/users/' . $auth->avatar) }}"
                        style="border-radius: 20%; width:150px; height:150px;">
                    <div>
                        <h4 class="mb-3">
                            {{ $auth->name }}{{ ' ' }}{{ $auth->last_name }}</h4>
                        <input type="file" name="avtar" id="avtar" style="display:none;">
                        <input type="hidden" name="old_avtar" value="{{ $auth->avatar }}" style="display:none;">
                        <button type="button" class="btn btn-light btn-sm choose_image" style="line-height: 20px;">Change
                            Image</button>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid main__div">
        <div class="admin-top-bar students-top">
            <div class="courses-select pt-0">
                <h4 class="title mt-0 mb-3">Personal Information</h4>
            </div>

        </div>

        <div>
            <form class="form profile-form" action="{{ route('profile-update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $auth->id }}" />
                <input type="hidden" name="personal_informations" value="personal_informations" />
                <input type="hidden" name="profile_type" value="instructor_profile" />
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input class="form-control" type="text" name="fname" value="{{ $auth->name }}"
                                id="fname" placeholder="Write here...">
                            @if ($errors->has('fname'))
                                <span class="text-danger">{{ $errors->first('fname') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input class="form-control" type="text" name="lname" value="{{ $auth->last_name }}"
                                id="lname" placeholder="Write here...">

                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" value="{{ $auth->email }}" name="email"
                                id="email" placeholder="Write here...">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <div class="input-field d-flex align-items-center">
                                <select class="form-control" style="max-width: 120px;" name="phone_code">
                                    <option value="">Select Code</option>
                                    @foreach ($codes as $key => $country)
                                        <option value="{{ $country['dial_code'] }}"
                                            @if ($country['dial_code'] == $auth->country_code) selected @endif>
                                            <span class="country-flag">{{ $country['flag'] }}</span>
                                            {{ ' ' }} {{ $country['dial_code'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <input class="form-control" type="text" name="phone" value="{{ $auth->phone }}"
                                    id="phone" placeholder="Write here...">

                            </div>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                            @if ($errors->has('phone_code'))
                                <span class="text-danger">{{ $errors->first('phone_code') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control" id="country" name="country">
                                <option>Select Country</option>
                                @foreach ($codes as $key => $country)
                                    <option value="{{ $country['name'] }}"
                                        @if ($country['name'] == $auth->country) selected @endif>
                                        {{ $country['flag'] }} {{ ' ' }}
                                        {{ $country['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <input class="w-100 btn btn-success submit-btn" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="ins-info">
        <h4>Instructor Profile</h4>
        <form class="profile-form" action="{{ route('profile-update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $auth->id }}" />
            <input type="hidden" name="personal_informations" value="instructor_profile" />
            <input type="hidden" name="profile_type" value="instructor_profile" />

            <div class="form-group">
                <label for="i_about">About me</label>
                <textarea id="i_about" class="form-control" name="about_me" placeholder="Write here...">{{ $auth->summary }}</textarea>
            </div>

            <div class="form-group">
                <label for="i_profession">Profession / Workplace</label>
                <textarea id="i_profession" class="form-control" name="profession_work" placeholder="Write here...">{{ $auth->workplace }}</textarea>
            </div>

            <div class="form-group">
                <label for="i_teaching">Teaching / Mentorship Experience</label>
                <textarea id="i_teaching" class="form-control" name="teaching_mentorship" placeholder="Write here...">{{ $auth->teaching_experience }}</textarea>
            </div>

            <div class="form-group pb-4">
                <label for="i-qua">Qualifications</label>
                <textarea id="i-qua" class="form-control" name="qualifications" placeholder="Write here...">{{ $auth->qualification }}</textarea>
            </div>

            <i class="">Whould you like to provide documentary evidence to make your verification
                process easy and straightforward?</i>
            <div class="fields-container">
                @foreach ($auth->getdocument as $key => $document)
                    <div class="row align-items-end field">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="form-group">
                                <label for="i-doc[]">Document Name</label>
                                <input type="text" name="document_name[]" class="form-control"
                                    placeholder="Write here..." value="{{ $document->document_name }}">
                                <input type="hidden" name="document_id[]" value="{{ $document->id }}">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                            <div class="form-group">
                                <label for="i-sup[]">Supporting Document</label><br>
                                <input type="file" name="supporting_document[]" class="">
                                <input type="hidden" name="old_document[]" value="{{ $document->user_document }}">
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 col-lg-3">
                            <a href="{{ asset('storage/documents/' . $document->user_document) }}" target="_blank">View
                                Document</a>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 col-lg-3">
                            <!-- Add a condition to prevent deletion of the default fields -->
                            <button type="button" class="btn btn-danger delete-btn"
                                @if ($key == 0) style="display: none;" @endif
                                @if ($key != 0) onClick="deleteDocument({{ $document->id }})" @endif>Delete</button>
                        </div>
                    </div>
                @endforeach
                @if (count($auth->getdocument) == 0)
                    <div class="row align-items-end field">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="form-group">
                                <label for="i-doc[]">Document Name</label>
                                <input type="text" name="document_name[]" class="form-control"
                                    placeholder="Write here..." value="">
                                <input type="hidden" name="document_id[]" value="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                            <div class="form-group">
                                <label for="i-sup[]">Supporting Document</label><br>
                                <input type="file" name="supporting_document[]" class="">
                                <input type="hidden" name="old_document[]" value="">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <button type="button" id="addNewBtn" class="btn btn-primary">Add New</button>

            <div class="form-group">
                <label>Social Media Profiles</label>
                <select class="form-control" id="socialMediaSelect">
                    <option>Select Platform</option>
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Youtube</option>
                    <option>LinkedIn</option>
                    <option>Twitter</option>
                </select>
            </div>

            <div id="additionalInputContainer" class="mt-6">
                <!-- New input boxes will be added here -->
                @if ($auth->Facebook || $errors->has('facebook'))
                    <div class="form-group">
                        <input type="text" class="form-control" name="facebook"
                            placeholder="Enter your Facebook profile link" value="{{ $auth->Facebook }}">
                        @if ($errors->has('facebook'))
                            <div class="text-danger">{{ $errors->first('facebook') }}</div>
                        @endif
                    </div>
                @endif
                @if ($auth->Instagram || $errors->has('instagram'))
                    <div class="form-group">
                        <input type="text" class="form-control" name="instagram"
                            placeholder="Enter your Instagram profile link" value="{{ $auth->Instagram }}">
                        @if ($errors->has('instagram'))
                            <div class="text-danger">{{ $errors->first('instagram') }}</div>
                        @endif
                    </div>
                @endif
                @if ($auth->YouTube || $errors->has('youtube'))
                    <div class="form-group">
                        <input type="text" class="form-control" name="youtube"
                            placeholder="Enter your Youtube profile link" value="{{ $auth->YouTube }}">
                        @if ($errors->has('youtube'))
                            <div class="text-danger">{{ $errors->first('youtube') }}</div>
                        @endif
                    </div>
                @endif
                @if ($auth->LinkedIn || $errors->has('linkedin'))
                    <div class="form-group">
                        <input type="text" class="form-control" name="linkedin"
                            placeholder="Enter your LinkedIn profile link" value="{{ $auth->LinkedIn }}">
                        @if ($errors->has('linkedin'))
                            <div class="text-danger">{{ $errors->first('linkedin') }}</div>
                        @endif
                    </div>
                @endif
                @if ($auth->Twitter || $errors->has('twitter'))
                    <div class="form-group">
                        <input type="text" class="form-control" name="twitter"
                            placeholder="Enter your Twitter profile link" value="{{ $auth->Twitter }}">
                        @if ($errors->has('twitter'))
                            <div class="text-danger">{{ $errors->first('twitter') }}</div>
                        @endif
                    </div>
                @endif
            </div>

            <div class="row pt-3">
                <div class="col-6 col-sm-3 col-md-3 col-lg-4">
                    <div class="form-group">
                        <a class="btn default-btn d-block text-center" data-bs-toggle="modal"
                            data-bs-target="#ins_Modal">Preview</a>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <button type="submit" class="btn default-btn d-block text-center">Save</button>
                    </div>
                </div>

                <div class="col-12 col-sm-5 col-md-5 col-lg-4">
                    <div class="form-group">
                        <a class="btn default-btn d-block text-center">Get Me Verified</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="change-password-section">
        <h4 class="title mb-3">Change Password</h4>
        <form class="form profile-form" action="{{ route('profile-change-password') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label for="old-pass">Old Password</label>
                        <input type="text" class="form-control" name="old_password" placeholder="Write here..."
                            id="old-pass">
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label for="new-pass">New Password</label>
                        <input type="password" class="form-control" name="new_password" placeholder="Write here..."
                            id="new-pass">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label for="conf-pass">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Write here..."
                            name="new_password_confirmation" id="conf-pass">
                        @error('old_pass', 'user_new')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <input type="submit" class="w-100 btn btn-success submit-btn" value="Update Password">
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- </div>
            </div>
        </div> --}}


@endsection
