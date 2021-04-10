@extends('admin.layouts.adminMaster')

@section('title', 'Home')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Sushant is Home 🚀</h4>
  </div>
  <div class="card-body">
    <div class="card-text">
      <p>
        Yes!
      </p>
      <ul>
        <li>
          Uno
        </li>
        <li>
          Tres
        </li>
      </ul>
    </div>
  </div>
</div>
<!--/ Kick start -->

<!-- Page layout -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">What is the progress?</h4>
  </div>
  <div class="card-body">
    <div class="card-text">
      <div class="alert alert-primary" role="alert">
        <div class="alert-body">
          <strong>Info: </strong>Check Github <a class="text-primary" href="https://github.com/sushant403"
            target="_blank">here</a> for more information.
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Page layout -->
@endsection