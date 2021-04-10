<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else en @endif" data-textdirection="ltr"
  class="light-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') - Alpha Dash - Sushant P.</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  {{-- Include core + vendor Styles --}}
  @include('admin.components.styles')
</head>

<body class="vertical-layout vertical-menu-modern blank-page light" data-menu="vertical-menu-modern" data-layout=""
  style="" data-framework="laravel" data-asset-path="{{ asset('/')}}">
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        @yield('content')
      </div>
    </div>
  </div>
  <!-- End: Content-->
  {{-- include default scripts --}}
  @include('admin.components.scripts')
  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }
    })
  </script>
</body>

</html>