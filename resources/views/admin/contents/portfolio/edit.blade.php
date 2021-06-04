@extends('admin.layouts.adminMaster')

@section('title', 'Edit Portfolio')

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
            <i data-feather="user"></i><span class="d-none d-sm-block">Portfolio Details</span>
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
          <!-- users edit media object start -->

          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form action="{{ route("sushant.portfolio.update", [$portfolio->id]) }}" method="POST" class="form-validate"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">Name and User ID</label>
                  <input type="text" class="form-control" placeholder="Name"
                    value="{{ Auth::user()->name }} | {{ Auth::user()->id }}" disabled id="name" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="title">Portfolio Title</label>
                  <input value="{{ old('title', $portfolio->title) }}" type="title" name="title" class="form-control"
                    placeholder="Prelude International CMS" required id="title" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="portfolio_url">Portfolio URL</label>
                  <input value="{{ old('portfolio_url', $portfolio->portfolio_url) }}" type="text" name="portfolio_url"
                    class="form-control" placeholder="https://preludeint.com" required id="portfolio_url" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="short_desc">Short Description</label>
                  <textarea name="short_desc" class="form-control" placeholder="Short Description about the job."
                    id="short_desc">{{ old('short_desc', $portfolio->short_desc) }}</textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="long_desc">Long Description</label>
                  <textarea name="long_desc" class="form-control" placeholder="You may ellobarate a bit."
                    id="long_desc">{{ old('long_desc', $portfolio->long_desc) }}</textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="type">Portfolio Type</label>
                  <input value="{{ old('type', $portfolio->type) }}" type="text" name="type" class="form-control"
                    placeholder="product, design, .." required id="type" />
                </div>
              </div>

              <div class="col-8">
                <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                  <label for="photo">Upload Portfolio Image</label>
                  <input type="file" name="photo" />
                  @if($errors->has('photo'))
                  <em class="invalid-feedback">
                    {{ $errors->first('photo') }}
                  </em>
                  @endif
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
          <p>No Additional Information required.</p>
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