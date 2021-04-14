{{-- Vendor Scripts --}}
<script src="{{ asset('admin-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/ui/prism.min.js') }}"></script>
{{-- datatables files --}}
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset('admin-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin-assets/js/core/app.js') }}"></script>
{{-- page script --}}
@yield('page-script')
{{-- page script --}}