{{-- system message --}}
@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <div class="alert-body">
    {{ session('message') }}
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

{{-- system errors --}}
@if($errors->count() > 0)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <div class="alert-body">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

{{-- Error or Success Messages Toastr --}}
@if(session()->has('success'))
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/extensions/ext-component-toastr.css') }}">
<script type="text/javascript">
  $(window).on('load', function() {
        // On load Toast
  setTimeout(function () {
    toastr['success'](
      '{{session()->get('success')}}',
      'Notification',
      {
        closeButton: true,
        tapToDismiss: true,
        progressBar: true,
      }
    );
  }, 400);
  })
</script>
@endif

@if(session()->has('error'))
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/extensions/ext-component-toastr.css') }}">
<script type="text/javascript">
  $(window).on('load', function() {
        // On load Toast
  setTimeout(function () {
    toastr['error'](
      '{{session()->get('error')}}',
      'Error Occured',
      {
        closeButton: true,
        tapToDismiss: true,
        progressBar: true,
      }
    );
  }, 400);
  })
</script>
@endif
{{-- End Error or Success Messages Toastr --}}
