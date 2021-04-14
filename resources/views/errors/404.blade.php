@extends('layouts.errorMaster')

@section('title', 'Error 404 - Page Not Found')

@section('page-style')
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/page-misc.css') }}">
@endsection
@section('content')
<!-- Error page-->
<div class="" style="margin-top: 10rem;">
    <div class="misc-inner pt-7 p-2 p-sm-3">
        <div class="w-100 text-center">
            <img class="img-fluid mb-4" src="{{asset('images/error404.svg')}}" width="250" alt="Error page" />

            <h2 class="mb-1">Page Not Found 🕵🏻‍♀️</h2>
            <p class="mb-2">Oops! The requested URL was not found. Maybe you go back and start again?</p>
            <p>
                <a class="btn btn-primary mb-5 btn-sm-block" href="{{url('/')}}">Back to Homepage</a>
                <a class="btn btn-secondary mb-5 btn-sm-block" href="{{ url()->previous() }}">Go Back</a>
            </p>
        </div>
    </div>
</div>
<!-- / Error page-->
@endsection
