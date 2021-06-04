@extends('admin.layouts.adminMaster')

@section('title', 'Portfolio List')

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
            <a href="{{ route('sushant.portfolio.create') }}" class="btn btn-primary mb-1">Add New Record</a>
            <div class="card">
                <table class="datatables-basic table datatable-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Id</th>
                            <th>Action</th>
                            <th>Portfolio Title</th>
                            <th>Link (URL)</th>
                            <th>Portfolio Image</th>
                            <th>Type</th>
                            <th>Short Desc</th>
                            <th>Long Desc</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolio as $portfolio)
                        <tr data-entry-id="{{ $portfolio->id }}">
                            <td></td>
                            <td></td>
                            <td>{{ $portfolio->id ?? '' }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                                        <i data-feather='more-vertical'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('sushant.portfolio.show', $portfolio->id) }}"
                                            class="dropdown-item">
                                            <i data-feather="edit" class="font-small-4 mr-50"></i>
                                            Details</a>
                                        <form action="{{ route('sushant.portfolio.destroy', $portfolio->id) }}"
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
                                <a href="{{ route('sushant.portfolio.edit', $portfolio->id) }}" class="item-edit">
                                    <i data-feather='edit'></i>
                                </a>
                            </td>
                            <td>{{ $portfolio->title ?? '' }}</td>
                            <td>{{ $portfolio->portfolio_url ?? '' }}</td>
                            <td>
                                @if ($portfolio->photo != '')
                                <a target="_blank"
                                    href="{{ asset('storage/portfolio/' . $portfolio->id . '/thumbnail_' . $portfolio->photo) }}">
                                    <img width="150"
                                        src="{{ asset('storage/portfolio/' . $portfolio->id . '/thumbnail_' . $portfolio->photo) }}" />
                                </a>
                                @endif
                            </td>
                            <td>{{ $portfolio->type ?? '' }}</td>
                            <td>{{ Str::limit($portfolio->short_desc ?? '', 40) }}</td>
                            <td>{{ Str::limit($portfolio->long_desc ?? '', 50) }}</td>
                            <td>{{ $portfolio->updated_at->diffforhumans() ?? '' }}</td>
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
                            return "Details of " + "{{ $portfolio->name }}";
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