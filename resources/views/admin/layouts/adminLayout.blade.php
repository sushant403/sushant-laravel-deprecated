<body class="vertical-layout vertical-menu-modern 2-columns navbar-sticky menu-expanded footer-static"
  data-menu="vertical-menu-modern" data-col="2-columns"
  data-layout="{{  auth()->user()->is_dark_mode && auth()->user()->is_dark_mode == 1 ? 'dark-layout' : 'light-layout' }}"
  data-framework="laravel" data-asset-path="{{ asset('/')}}">

  <noscript>
    <div class="card" style="z-index: 999">
      <div class="card-header">
        <h4 class="card-title">JavaScript Disabled?</h4>
      </div>
      <div class="card-body">
        <div class="card-text">
          <div class="alert alert-danger" role="alert">
            <div class="alert-body">
              <strong>Warning: </strong>Enable Javascript to run the app properly.
            </div>
          </div>
        </div>
      </div>
    </div>
  </noscript>

  @include('admin.components.sidebar')
  {{-- Include Navbar --}}
  @include('admin.components.navbar')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      {{-- Include Breadcrumb --}}
      @include('admin.components.breadcrumb')
      <div class="content-body">
        {{-- Include Page Content --}}
        @yield('content')
      </div>
    </div>
  </div>
  <!-- End: Content-->
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  {{-- include footer --}}
  @include('admin.components.footer')

  <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
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