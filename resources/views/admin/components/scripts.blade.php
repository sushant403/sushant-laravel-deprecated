{{-- Vendor Scripts --}}
<script src="{{ asset('admin-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/ui/prism.min.js') }}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset('admin-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin-assets/js/core/app.js') }}"></script>
{{-- page script --}}
@yield('page-script')
{{-- page script --}}
