@extends('admin.layouts.master')

@section('title')
apoGuru - Create User
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
                            Add New User
                        </h2>
                    </div>
                    <div class="body">

                        <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                          @csrf
                            <div class="row clearfix">
                              
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" required>
                                        <label class="form-label">Full Name</label>
                                    </div>
                                  </div>
                              </div>
                              
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" required>
                                        <label class="form-label">Enter Password</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password_confirmation" class="form-control" required>
                                        <label class="form-label">Confirm Password</label>
                                    </div>
                                  </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" required>
                                        <label class="form-label">Phone</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="qualification" class="form-control">
                                        <label class="form-label">Profession</label>
                                    </div>
                                  </div>
                              </div>
                              <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="workplace" class="form-control">
                                        <label class="form-label">Workplace</label>
                                    </div>
                                  </div>
                              </div> -->
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="teaching_experience" class="form-control">
                                        <label class="form-label">Experience</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="summary" class="form-control">
                                        <label class="form-label">About</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="credit" class="form-control">
                                        <label class="form-label">Credit</label>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                    <select id="user_id" class="form-control show-tick" name="verification_status"  required>
                                            <option value="">--Select status--</option>
                                            <option value="Verified">Verify</option>
                                            <option value="Unverified">unVerify</option>
                                        
                                    </select>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                  <select id="user_id" class="form-control show-tick" name="country"  required>
                                          <option value="">--Select Contry--</option>
                                          <option value="Ghana">Ghana</option>
                                          <option value="Liberia">Liberia</option>
                                          <option value="Nigeria">Nigeria</option>
                                          <option value="Sierra Leone">Sierra Leone</option>
                                          <option value="The Gambia">The Gambia</option>
                                          <option value="other">Other Countries</option>
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
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Add User"/>
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
