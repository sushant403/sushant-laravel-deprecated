@extends('admin.layouts.adminMaster')

@section('title', 'User View')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/app-invoice-list.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/app-user.css') }}">
@endsection

@section('content')
<section class="app-user-view">
  <!-- User Card & Plan Starts -->
  <div class="row">
    <!-- User Card starts-->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card user-card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
              <div class="user-avatar-section">
                <div class="d-flex justify-content-start">
                  <img class="img-fluid rounded" src="{{ $profile->profile_photo_url }}" height="104" width="104"
                    alt="User avatar" />
                  <div class="d-flex flex-column ml-1">
                    <div class="user-info mb-1">
                      <h4 class="mb-0">{{ $profile->name }}</h4>
                      <span class="card-text">{{ $profile->email }}</span>
                    </div>
                    <div class="d-flex flex-wrap">
                      <a href="{{route('sushant.profile.edit', auth()->user()->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('profile.show') }}"><button
                          class="btn btn-outline-danger ml-1">Delete</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
              <div class="user-info-wrapper">
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="user" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Username</span>
                  </div>
                  <p class="card-text mb-0">{{ $profile->name }}</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="check" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Status</span>
                  </div>
                  <p class="card-text mb-0">Active</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="star" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Role</span>
                  </div>
                  <p class="card-text mb-0">Admin</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="flag" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Location</span>
                  </div>
                  <p class="card-text mb-0">{{ $profile->about->location }}</p>
                </div>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="phone" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                  </div>
                  <p class="card-text mb-0">{{ $profile->about->phone }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card Ends-->

    
    
</section>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset('admin-assets/js/scripts/pages/app-user-view.js') }}"></script>
@endsection