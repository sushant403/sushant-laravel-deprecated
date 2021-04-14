@extends('admin.layouts.adminMaster')

@section('title', 'User List')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/plugins/forms/form-validation.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/css/base/pages/app-user.css') }}">
@endsection

@section('content')
<!-- Basic table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('sushant.profile.create') }}" class="btn btn-primary mb-1">Add New Record</a>
            <div class="card">
                <table class="datatables-basic table datatable-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined At</th>
                            <th>Dark Mode Fan?</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td></td>
                            <td></td>
                            <td>{{ $user->id ?? '' }}</td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                {{ $user->created_at->diffForHumans() ?? '' }}
                            </td>
                            <td>
                                {{ $user->is_dark_mode ? $user->is_dark_mode === 1 ? 'Dark' : 'Light' : 'Light' }}
                            </td>
                            <td>
                                <div class="d-inline-flex">
                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                                        <i data-feather='more-vertical'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('sushant.profile.show', $user->id) }}" class="dropdown-item">
                                            <i data-feather="edit" class="font-small-4 mr-50"></i>
                                            Details</a>
                                        <form action="{{ route('sushant.profile.destroy', $user->id) }}" method="POST"
                                            onsubmit="return confirm(\'Are you Sure?\');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="dropdown-item delete-record">
                                                <i data-feather="trash-2" class="font-small-4 mr-50"></i>
                                                'Delete</button>
                                    </div>
                                </div>
                                <a href="{{ route('sushant.profile.edit', $user->id) }}" class="item-edit">
                                    <i data-feather='edit'></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--/ Basic table -->
@endsection

@section('page-script')
@parent
<script>
    $(function () {
    "use strict";
    var e = $(".datatables-basic"),
        a = $(".dt-date"),
        t = $(".dt-complex-header"),
        s = $(".dt-row-grouping"),
        l = $(".dt-multilingual"),
        r = "../../../app-assets/";
    if (
        ("laravel" === $("body").attr("data-framework") &&
            (r = $("body").attr("data-asset-path")),
        e.length)
    ) {
        var o = e.DataTable({
            columnDefs: [
                {
                    className: "control",
                    orderable: !1,
                    responsivePriority: 2,
                    targets: 0,
                },
                {
                    targets: 1,
                    visibe: false,
                    orderable: !1,
                    responsivePriority: 3,
                    render: function (e, a, t, s) {
                        return (
                            '<div class="custom-control custom-checkbox"> <input class="custom-control-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                            e +
                            '" /><label class="custom-control-label" for="checkbox' +
                            e +
                            '"></label></div>'
                        );
                    },
                    checkboxes: {
                        selectAllRender:
                            '<div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="custom-control-label" for="checkboxSelectAll"></label></div>',
                    },
                },
                { targets: 2, visible: !1 },
                { responsivePriority: 1, targets: 4 },
            ],
            order: [[2, "desc"]],
            @include('admin.components.datatables.add-scripts'),
        });
        $("div.head-label").html(
            '<h6 class="mb-0">Users Information</h6>'
        );
    }
  });
</script>
@endsection