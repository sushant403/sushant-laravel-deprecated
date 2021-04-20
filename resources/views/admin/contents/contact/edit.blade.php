@extends('admin.layouts.adminMaster')

@section('title', 'Edit Contact')

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
          <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
            aria-controls="account" role="tab" aria-selected="true">
            <i data-feather="file-plus"></i><span class="d-none d-sm-block">Create</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information"
            aria-controls="information" role="tab" aria-selected="false">
            <i data-feather="info"></i><span class="d-none d-sm-block">Information</span>
          </a>
        </li>
      </ul>
      <div class="tab-content">
        <!-- Account Tab starts -->
        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
          <!-- users edit account form start -->
          <form action="{{ route("sushant.contact.update", $contact->id) }}" method="POST" class="form-validate"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" required placeholder="Name"
                    value="{{ old('name', $contact->name) }}" name="name" id="username" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" placeholder="Email"
                    value="{{ old('email', $contact->email) }}" required name="email" id="email" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" placeholder="Subject"
                    value="{{ old('subject', $contact->subject) }}" name="subject" id="subject" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" placeholder="Message" required name="message"
                    id="message">{{ old('message', $contact->message) }}</textarea>
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
          <p>No informations needed to add.</p>
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