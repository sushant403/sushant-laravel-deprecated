<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/vendors.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/ui/prism.min.css') }}" />
{{-- Vendor Styles --}}
@yield('vendor-style')
{{-- Theme Styles --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/core.css') }}" />
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/core/menu/menu.css') }}" />
{{-- Page Styles --}}
@yield('page-style')
{{-- Laravel Style --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/overrides.css') }}" />
{{-- user custom styles --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}" />
