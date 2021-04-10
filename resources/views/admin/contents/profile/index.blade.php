@extends('admin.layouts.adminMaster')

@section('title', 'User List')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/app-user.css') }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
  <!-- users filter start -->
  <div class="card">
    <h5 class="card-header">Search Filter</h5>
    <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
      <div class="col-md-4 user_role"></div>
      <div class="col-md-4 user_plan"></div>
      <div class="col-md-4 user_status"></div>
    </div>
  </div>
  <!-- users filter end -->
  <!-- list section start -->
  <div class="card">
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Plan</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
    @include('admin.contents.profile.create-modal')
  </div>
  <!-- list section end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset('admin-assets/js/scripts/pages/app-user-list.js') }}"></script>
@endsection