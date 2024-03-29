@extends('admin.layouts.adminMaster')

@section('title', 'User Edit')

@section('vendor-style')
{{-- Vendor Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/forms/select/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/app-user.css') }}">
@endsection

@section('content')
<!-- users edit start -->
<section class="app-user-edit">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                        href="#account" aria-controls="account" role="tab" aria-selected="true">
                        <i data-feather="user"></i><span class="d-none d-sm-block">About Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
                        href="#information" aria-controls="information" role="tab" aria-selected="false">
                        <i data-feather="info"></i><span class="d-none d-sm-block">Information</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Account Tab starts -->
                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                    <!-- users edit media object start -->

                    <!-- users edit media object ends -->
                    <!-- users edit account form start -->
                    <form action="{{ route("sushant.about.store") }}" method="POST" class="form-validate"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name"
                                        value="{{ Auth::user()->name }}" disabled id="name" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title_tag">Title Tag</label>
                                    <input type="title_tag" name="title_tag" class="form-control" placeholder="Designer"
                                        required id="title_tag" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" class="form-control" placeholder="Your City/Town"
                                        required id="location" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="short_desc">Short Description</label>
                                    <textarea name="short_desc" class="form-control" placeholder="Short Line about you"
                                        required id="short_desc"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="long_desc">Long Description</label>
                                    <textarea name="long_desc" class="form-control"
                                        placeholder="You may ellobarate a bit." required id="long_desc"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" name="phone" class="form-control"
                                        placeholder="Phone Number (Optional)" id="phone" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" name="birthday" class="form-control" placeholder="1999/09/09"
                                        required id="birthday" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="skill">Skills</label>
                                    <input type="text" name="skill" class="form-control"
                                        placeholder="What are you good at?" required id="skill" />
                                </div>
                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                    Changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                    <!-- users edit account form ends -->
                </div>
                <!-- Account Tab ends -->

                <!-- Information Tab starts -->
                <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                    <p>Informations can be added later at the Edit section of the users.</p>
                </div>
                <!-- Information Tab ends -->
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset('admin-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset('admin-assets/js/scripts/pages/app-user-edit.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts/components/components-navs.js') }}"></script>
@endsection