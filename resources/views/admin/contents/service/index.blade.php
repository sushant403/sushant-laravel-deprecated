@extends('admin.layouts.adminMaster')

@section('title', 'Services List')

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
            <a href="{{ route('sushant.service.create') }}" class="btn btn-primary mb-1">Add New Record</a>
            <div class="card">
                <table class="datatables-basic table datatable-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Id</th>
                            <th>Action</th>
                            <th>Services Title</th>
                            <th>Services Image</th>
                            <th>Short Desc</th>
                            <th>Long Desc</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service as $service)
                        <tr data-entry-id="{{ $service->id }}">
                            <td></td>
                            <td></td>
                            <td>{{ $service->id ?? '' }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                                        <i data-feather='more-vertical'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('sushant.service.show', $service->id) }}"
                                            class="dropdown-item">
                                            <i data-feather="edit" class="font-small-4 mr-50"></i>
                                            Details</a>
                                        <form action="{{ route('sushant.service.destroy', $service->id) }}"
                                            method="POST" onsubmit="return confirm('Are you Sure?');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="dropdown-item delete-record">
                                                <i data-feather="trash-2" class="font-small-4 mr-50"></i>
                                                Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <a href="{{ route('sushant.service.edit', $service->id) }}" class="item-edit">
                                    <i data-feather='edit'></i>
                                </a>
                            </td>
                            <td>{{ $service->title ?? '' }}</td>
                            <td>
                                @if ($service->photo != '')
                                <a target="_blank"
                                    href="{{ asset('storage/service/' . $service->id . '/thumbnail_' . $service->photo) }}">
                                    <img width="150"
                                        src="{{ asset('storage/service/' . $service->id . '/thumbnail_' . $service->photo) }}" />
                                </a>
                                @endif
                            </td>
                            <td>{{ Str::limit($service->short_desc ?? '', 40) }}</td>
                            <td>{{ Str::limit($service->long_desc ?? '', 50) }}</td>
                            <td>{{ $service->updated_at->diffforhumans() ?? '' }}</td>
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
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (e) {
                            return "Details of " + "{{ $service->name }}";
                        },
                    }),
                    type: "column",
                    renderer: function (e, a, t) {
                        var s = $.map(t, function (e, a) {
                            return (
                                console.log(t),
                                "" !== e.title
                                    ? '<tr data-dt-row="' +
                                      e.rowIndex +
                                      '" data-dt-column="' +
                                      e.columnIndex +
                                      '"><td>' +
                                      e.title +
                                      ":</td> <td>" +
                                      e.data +
                                      "</td></tr>"
                                    : ""
                            );
                        }).join("");
                        return !!s && $('<table class="table"/>').append(s);
                    },
                },
            },
        });
        $("div.head-label").html(
            '<h6 class="mb-0">Users Information</h6>'
        );
    }
  });
</script>
@endsection