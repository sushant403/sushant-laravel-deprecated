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
            <a href="{{ route('sushant.about.create') }}" class="btn btn-primary mb-1">Add New Record</a>
            <div class="card">
                <table class="datatables-basic table datatable-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Id</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Short Desc</th>
                            <th>Long Desc</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Birthday</th>
                            <th>Skills</th>
                            <th>Github</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>LinkedIn</th>
                            <th>Freelance URL</th>
                            <th>Resume Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $about)
                        <tr data-entry-id="{{ $about->id }}">
                            <td></td>
                            <td></td>
                            <td>{{ $about->id ?? '' }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                                        <i data-feather='more-vertical'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('sushant.about.show', $about->id) }}" class="dropdown-item">
                                            <i data-feather="edit" class="font-small-4 mr-50"></i>
                                            Details</a>
                                        <form action="{{ route('sushant.about.destroy', $about->id) }}" method="POST"
                                            onsubmit="return confirm('Are you Sure?');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="dropdown-item delete-record">
                                                <i data-feather="trash-2" class="font-small-4 mr-50"></i>
                                                Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <a href="{{ route('sushant.about.edit', $about->id) }}" class="item-edit">
                                    <i data-feather='edit'></i>
                                </a>
                            </td>
                            <td>{{ $about->title_tag ?? '' }}</td>
                            <td>{{ Str::limit($about->short_desc ?? '', 40) }}</td>
                            <td>{{ Str::limit($about->long_desc ?? '', 50) }}</td>
                            <td>{{ $about->location ?? '' }}</td>
                            <td>{{ $about->phone ?? '' }}</td>
                            <td>{{ $about->birthday ?? '' }}</td>
                            <td>{{ $about->skill ?? '' }}</td>
                            <td><a target="_blank" href="{{ $about->github_url ?? '' }}">Github URL</a></td>
                            <td><a target="_blank" href="{{ $about->instagram_url ?? '' }}">Instagram URL</a></td>
                            <td><a target="_blank" href="{{ $about->twitter_url ?? '' }}"> Twitter URL</a></td>
                            <td><a target="_blank" href="{{ $about->linkedin_url ?? '' }}">LinkedIn URL</a></td>
                            <td><a target="_blank" href="{{ $about->freelance_url ?? '' }}">Freelance URL</a></td>
                            <td><a target="_blank" href="{{ $about->resume_url ?? '' }}">Resume URL</a></td>
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
                            return "Details of " + "{{ $about->name }}";
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