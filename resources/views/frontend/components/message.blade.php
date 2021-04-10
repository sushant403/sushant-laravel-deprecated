@if(session()->has('success'))
<div class="alert alert-success alert-dismissible w-auto z-index-9999 right-0">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <span class="font-weight-500 color-dark"><i class="icon-envelope-fill dtr-mr-10"></i>Success!
        Thanks.</span>
    <span class="font-weight-400 color-dark">{{session()->get('success')}}</span>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-warning alert-dismissible w-auto z-index-9999 right-0">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <span class="font-weight-500 color-dark"><i class="icon-envelope-fill dtr-mr-10 text-size-md"></i> Error!</span>
    <span class="font-weight-400 color-dark">{{session()->get('error')}}</span>
</div>
@endif