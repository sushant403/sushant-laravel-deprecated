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
                  <p class="card-text mb-0">{{ $about->location }}</p>
                </div>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="phone" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                  </div>
                  <p class="card-text mb-0">{{ $about->phone }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card Ends-->

    <!-- User Timeline & Permissions Starts -->
    <div class="row">
      <!-- User Permissions Starts -->
      <div class="col-12">
        <!-- User Permissions -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Permissions</h4>
          </div>
          <p class="card-text ml-2">Permission according to roles</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead class="thead-light">
                <tr>
                  <th>Module</th>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Create</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Admin</td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="admin-read" checked disabled />
                      <label class="custom-control-label" for="admin-read"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="admin-write" disabled />
                      <label class="custom-control-label" for="admin-write"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="admin-create" disabled />
                      <label class="custom-control-label" for="admin-create"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="admin-delete" disabled />
                      <label class="custom-control-label" for="admin-delete"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Staff</td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="staff-read" disabled />
                      <label class="custom-control-label" for="staff-read"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="staff-write" checked disabled />
                      <label class="custom-control-label" for="staff-write"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="staff-create" disabled />
                      <label class="custom-control-label" for="staff-create"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="staff-delete" disabled />
                      <label class="custom-control-label" for="staff-delete"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Author</td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="author-read" checked disabled />
                      <label class="custom-control-label" for="author-read"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="author-write" disabled />
                      <label class="custom-control-label" for="author-write"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="author-create" checked disabled />
                      <label class="custom-control-label" for="author-create"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="author-delete" disabled />
                      <label class="custom-control-label" for="author-delete"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Contributor</td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="contributor-read" disabled />
                      <label class="custom-control-label" for="contributor-read"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="contributor-write" disabled />
                      <label class="custom-control-label" for="contributor-write"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="contributor-create" disabled />
                      <label class="custom-control-label" for="contributor-create"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="contributor-delete" disabled />
                      <label class="custom-control-label" for="contributor-delete"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>User</td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="user-read" disabled />
                      <label class="custom-control-label" for="user-read"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="user-create" disabled />
                      <label class="custom-control-label" for="user-create"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="user-write" disabled />
                      <label class="custom-control-label" for="user-write"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="user-delete" checked disabled />
                      <label class="custom-control-label" for="user-delete"></label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /User Permissions -->
      </div>
      <!-- User Permissions Ends -->
    </div>
    <!-- User Timeline & Permissions Ends -->
</section>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset('admin-assets/js/scripts/pages/app-user-view.js') }}"></script>
@endsection