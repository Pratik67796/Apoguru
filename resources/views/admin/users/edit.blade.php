@extends('admin.layouts.master')

@section('title')
apoGuru - Update User
@endsection

@section('styles')
<!-- JQuery DataTable Css -->
<link href="{{ URL::asset('admin_theme/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Users</h2>
        </div>

        <!-- Vertical Layout -->

        <!-- #END# Vertical Layout -->
        <!-- Vertical Layout | With Floating Label -->

        <!-- Vertical Layout | With Floating Label -->
        <!-- Horizontal Layout -->

        <!-- #END# Horizontal Layout -->
        <!-- Inline Layout -->

        <!-- #END# Inline Layout -->
        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if (Session::has('msg'))
                  <div class="alert alert-success">
                      {{Session::get('msg')}}
                  </div>
              @endif
              @if (Session::has('error'))
                  <div class="alert alert-success">
                      {{Session::get('error')}}
                  </div>
              @endif
                <div class="card">
                    <div class="header">
                        <h2>
                            Update User
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.user.update', $user->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                        <label class="form-label">Full Name</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" value="{{$user->password}}" readonly>
                                        <label class="form-label">Enter Password</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password_confirmation" class="form-control" value="{{$user->password}}" readonly>
                                        <label class="form-label">Confirm Password</label>
                                    </div>
                                  </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}" required>
                                        <label class="form-label">Phone</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="qualification" class="form-control" value="{{$user->qualification}}">
                                        <label class="form-label">Qualification</label>
                                    </div>
                                  </div>
                              </div>
                              {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="workplace" class="form-control" value="{{$user->workplace}}">
                                        <label class="form-label">Workplace</label>
                                    </div>
                                  </div>
                              </div> --}}
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="teaching_experience" class="form-control" value="{{$user->teaching_experience}}">
                                        <label class="form-label">Teaching Experience</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="summary" class="form-control" value="{{$user->summary}}">
                                        <label class="form-label">Summary</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="credit" class="form-control" value="{{$user->credit}}">
                                        <label class="form-label">Credit</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                  <select id="user_id" class="form-control show-tick" name="verification_status"  required>
                                          <option value="">--Select status--</option>
                                          <option {{ ($user->verification_status) == 'Verified' ? 'selected' : '' }}  value="Verified">Verify</option>
                                          <option {{ ($user->verification_status) == 'Unverified' ? 'selected' : '' }}  value="Unverified">unVerify</option>
                                  </select>
                                  </div>
                                </div>
                            </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                  <select id="user_id" class="form-control show-tick" name="country"  required>
                                          <option value="">--Select Contry--</option>
                                          <option {{ ($user->country) == 'Ghana' ? 'selected' : '' }}  value="Ghana">Ghana</option>
                                          <option {{ ($user->country) == 'Liberia' ? 'selected' : '' }}  value="Liberia">Liberia</option>
                                          <option {{ ($user->country) == 'Nigeria' ? 'selected' : '' }}  value="Nigeria">Nigeria</option>
                                          <option {{ ($user->country) == 'Sierra Leone' ? 'selected' : '' }}  value="Sierra Leone">Sierra Leone</option>
                                          <option {{ ($user->country) == 'The Gambia' ? 'selected' : '' }}  value="The Gambia">The Gambia</option>
                                          <option {{ ($user->country) == 'other' ? 'selected' : '' }}  value="other">Other Countries</option>
                                  </select>
                                  </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                    <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="file" name="avatar" class="form-control">
                                          <label class="form-label">Choose User Image (Avatar)</label>
                                      </div>
                                    </div>
                                    @if(is_null($user->avatar))
                                      <img src="{{url('admin_theme/images/no_image.png')}}"  height="100" width="100"/>
                                    @else
                                      <img src="{{url('user_avatars')}}/{{$user->avatar}}"  height="100" width="100"/>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Update User"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- #END# Inline Layout | With Floating Label -->
        <!-- Multi Column -->
        <!-- #END# Multi Column -->
    </div>
</section>
@endsection
