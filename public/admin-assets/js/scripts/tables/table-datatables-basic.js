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
            ajax: r + "data/table-datatable.json",
            columns: [
                { data: "responsive_id" },
                { data: "id" },
                { data: "id" },
                { data: "full_name" },
                { data: "email" },
                { data: "start_date" },
                { data: "salary" },
                { data: "" },
                { data: "" },
            ],
            columnDefs: [
                {
                    className: "control",
                    orderable: !1,
                    responsivePriority: 2,
                    targets: 0,
                },
                {
                    targets: 1,
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
                {
                    targets: 3,
                    responsivePriority: 4,
                    render: function (e, a, t, s) {
                        var l = t.avatar,
                            o = t.full_name,
                            n = t.post;
                        if (l)
                            var d =
                                '<img src="' +
                                r +
                                "images/avatars/" +
                                l +
                                '" alt="Avatar" width="32" height="32">';
                        else {
                            var i = [
                                    "success",
                                    "danger",
                                    "warning",
                                    "info",
                                    "dark",
                                    "primary",
                                    "secondary",
                                ][t.status],
                                c = (o = t.full_name).match(/\b\w/g) || [];
                            d =
                                '<span class="avatar-content">' +
                                (c = (
                                    (c.shift() || "") + (c.pop() || "")
                                ).toUpperCase()) +
                                "</span>";
                        }
                        return (
                            '<div class="d-flex justify-content-left align-items-center"><div class="avatar ' +
                            ("" === l ? " bg-light-" + i + " " : "") +
                            ' mr-1">' +
                            d +
                            '</div><div class="d-flex flex-column"><span class="emp_name text-truncate font-weight-bold">' +
                            o +
                            '</span><small class="emp_post text-truncate text-muted">' +
                            n +
                            "</small></div></div>"
                        );
                    },
                },
                { responsivePriority: 1, targets: 4 },
                {
                    targets: -2,
                    render: function (e, a, t, s) {
                        var l = t.status,
                            r = {
                                1: {
                                    title: "Current",
                                    class: "badge-light-primary",
                                },
                                2: {
                                    title: "Professional",
                                    class: " badge-light-success",
                                },
                                3: {
                                    title: "Rejected",
                                    class: " badge-light-danger",
                                },
                                4: {
                                    title: "Resigned",
                                    class: " badge-light-warning",
                                },
                                5: {
                                    title: "Applied",
                                    class: " badge-light-info",
                                },
                            };
                        return void 0 === r[l]
                            ? e
                            : '<span class="badge badge-pill ' +
                                  r[l].class +
                                  '">' +
                                  r[l].title +
                                  "</span>";
                    },
                },
                {
                    targets: -1,
                    title: "Actions",
                    orderable: !1,
                    render: function (e, a, t, s) {
                        return (
                            '<div class="d-inline-flex"><a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons["more-vertical"].toSvg({
                                class: "font-small-4",
                            }) +
                            '</a><div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item">' +
                            feather.icons["file-text"].toSvg({
                                class: "font-small-4 mr-50",
                            }) +
                            'Details</a><a href="javascript:;" class="dropdown-item">' +
                            feather.icons.archive.toSvg({
                                class: "font-small-4 mr-50",
                            }) +
                            'Archive</a><a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons["trash-2"].toSvg({
                                class: "font-small-4 mr-50",
                            }) +
                            'Delete</a></div></div><a href="javascript:;" class="item-edit">' +
                            feather.icons.edit.toSvg({
                                class: "font-small-4",
                            }) +
                            "</a>"
                        );
                    },
                },
            ],
            order: [[2, "desc"]],
            dom:
                '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            buttons: [
                {
                    extend: "collection",
                    className: "btn btn-outline-secondary dropdown-toggle mr-2",
                    text:
                        feather.icons.share.toSvg({
                            class: "font-small-4 mr-50",
                        }) + "Export",
                    buttons: [
                        {
                            extend: "print",
                            text:
                                feather.icons.printer.toSvg({
                                    class: "font-small-4 mr-50",
                                }) + "Print",
                            className: "dropdown-item",
                            exportOptions: { columns: [3, 4, 5, 6, 7] },
                        },
                        {
                            extend: "csv",
                            text:
                                feather.icons["file-text"].toSvg({
                                    class: "font-small-4 mr-50",
                                }) + "Csv",
                            className: "dropdown-item",
                            exportOptions: { columns: [3, 4, 5, 6, 7] },
                        },
                        {
                            extend: "excel",
                            text:
                                feather.icons.file.toSvg({
                                    class: "font-small-4 mr-50",
                                }) + "Excel",
                            className: "dropdown-item",
                            exportOptions: { columns: [3, 4, 5, 6, 7] },
                        },
                        {
                            extend: "pdf",
                            text:
                                feather.icons.clipboard.toSvg({
                                    class: "font-small-4 mr-50",
                                }) + "Pdf",
                            className: "dropdown-item",
                            exportOptions: { columns: [3, 4, 5, 6, 7] },
                        },
                        {
                            extend: "copy",
                            text:
                                feather.icons.copy.toSvg({
                                    class: "font-small-4 mr-50",
                                }) + "Copy",
                            className: "dropdown-item",
                            exportOptions: { columns: [3, 4, 5, 6, 7] },
                        },
                    ],
                    init: function (e, a, t) {
                        $(a).removeClass("btn-secondary"),
                            $(a).parent().removeClass("btn-group"),
                            setTimeout(function () {
                                $(a)
                                    .closest(".dt-buttons")
                                    .removeClass("btn-group")
                                    .addClass("d-inline-flex");
                            }, 50);
                    },
                },
                {
                    text:
                        feather.icons.plus.toSvg({
                            class: "mr-50 font-small-4",
                        }) + "Add New Record",
                    className: "create-new btn btn-primary",
                    attr: {
                        "data-toggle": "modal",
                        "data-target": "#modals-slide-in",
                    },
                    init: function (e, a, t) {
                        $(a).removeClass("btn-secondary");
                    },
                },
            ],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (e) {
                            return "Details of " + e.data().full_name;
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
            language: { paginate: { previous: "&nbsp;", next: "&nbsp;" } },
        });
        $("div.head-label").html(
            '<h6 class="mb-0">DataTable with Buttons</h6>'
        );
    }
    a.length &&
        a.flatpickr({ monthSelectorType: "static", dateFormat: "m/d/Y" });
    var n = 101;
    if (
        ($(".data-submit").on("click", function () {
            var e = $(".add-new-record .dt-full-name").val(),
                a = $(".add-new-record .dt-post").val(),
                t = $(".add-new-record .dt-email").val(),
                s = $(".add-new-record .dt-date").val(),
                l = $(".add-new-record .dt-salary").val();
            "" != e &&
                (o.row
                    .add({
                        responsive_id: null,
                        id: n,
                        full_name: e,
                        post: a,
                        email: t,
                        start_date: s,
                        salary: "$" + l,
                        status: 5,
                    })
                    .draw(),
                n++,
                $(".modal").modal("hide"));
        }),
        $(".datatables-basic tbody").on("click", ".delete-record", function () {
            o.row($(this).parents("tr")).remove().draw();
        }),
        t.length)
    )
        t.DataTable({
            ajax: r + "data/table-datatable.json",
            columns: [
                { data: "full_name" },
                { data: "email" },
                { data: "city" },
                { data: "post" },
                { data: "salary" },
                { data: "status" },
                { data: "" },
            ],
            columnDefs: [
                {
                    targets: -2,
                    render: function (e, a, t, s) {
                        var l = t.status,
                            r = {
                                1: {
                                    title: "Current",
                                    class: "badge-light-primary",
                                },
                                2: {
                                    title: "Professional",
                                    class: " badge-light-success",
                                },
                                3: {
                                    title: "Rejected",
                                    class: " badge-light-danger",
                                },
                                4: {
                                    title: "Resigned",
                                    class: " badge-light-warning",
                                },
                                5: {
                                    title: "Applied",
                                    class: " badge-light-info",
                                },
                            };
                        return void 0 === r[l]
                            ? e
                            : '<span class="badge badge-pill ' +
                                  r[l].class +
                                  '">' +
                                  r[l].title +
                                  "</span>";
                    },
                },
                {
                    targets: -1,
                    title: "Actions",
                    orderable: !1,
                    render: function (e, a, t, s) {
                        return (
                            '<div class="d-inline-flex"><a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons["more-vertical"].toSvg({
                                class: "font-small-4",
                            }) +
                            '</a><div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item">' +
                            feather.icons["file-text"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Details</a><a href="javascript:;" class="dropdown-item">' +
                            feather.icons.archive.toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Archive</a><a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons["trash-2"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Delete</a></div></div><a href="javascript:;" class="item-edit">' +
                            feather.icons.edit.toSvg({
                                class: "font-small-4",
                            }) +
                            "</a>"
                        );
                    },
                },
            ],
            dom:
                '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            language: { paginate: { previous: "&nbsp;", next: "&nbsp;" } },
        });
    if (s.length) {
        var d = s.DataTable({
            ajax: r + "data/table-datatable.json",
            columns: [
                { data: "responsive_id" },
                { data: "full_name" },
                { data: "post" },
                { data: "email" },
                { data: "city" },
                { data: "start_date" },
                { data: "salary" },
                { data: "status" },
                { data: "" },
            ],
            columnDefs: [
                { className: "control", orderable: !1, targets: 0 },
                { visible: !1, targets: 2 },
                {
                    targets: -2,
                    render: function (e, a, t, s) {
                        var l = t.status,
                            r = {
                                1: {
                                    title: "Current",
                                    class: "badge-light-primary",
                                },
                                2: {
                                    title: "Professional",
                                    class: " badge-light-success",
                                },
                                3: {
                                    title: "Rejected",
                                    class: " badge-light-danger",
                                },
                                4: {
                                    title: "Resigned",
                                    class: " badge-light-warning",
                                },
                                5: {
                                    title: "Applied",
                                    class: " badge-light-info",
                                },
                            };
                        return void 0 === r[l]
                            ? e
                            : '<span class="badge badge-pill ' +
                                  r[l].class +
                                  '">' +
                                  r[l].title +
                                  "</span>";
                    },
                },
                {
                    targets: -1,
                    title: "Actions",
                    orderable: !1,
                    render: function (e, a, t, s) {
                        return (
                            '<div class="d-inline-flex"><a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons["more-vertical"].toSvg({
                                class: "font-small-4",
                            }) +
                            '</a><div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item">' +
                            feather.icons["file-text"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Details</a><a href="javascript:;" class="dropdown-item">' +
                            feather.icons.archive.toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Archive</a><a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons["trash-2"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Delete</a></div></div><a href="javascript:;" class="item-edit">' +
                            feather.icons.edit.toSvg({
                                class: "font-small-4",
                            }) +
                            "</a>"
                        );
                    },
                },
            ],
            order: [[2, "asc"]],
            dom:
                '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            drawCallback: function (e) {
                var a = this.api(),
                    t = a.rows({ page: "current" }).nodes(),
                    s = null;
                a.column(2, { page: "current" })
                    .data()
                    .each(function (e, a) {
                        s !== e &&
                            ($(t)
                                .eq(a)
                                .before(
                                    '<tr class="group"><td colspan="8">' +
                                        e +
                                        "</td></tr>"
                                ),
                            (s = e));
                    });
            },
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (e) {
                            return "Details of " + e.data().full_name;
                        },
                    }),
                    type: "column",
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: "table",
                    }),
                },
            },
            language: { paginate: { previous: "&nbsp;", next: "&nbsp;" } },
        });
        $(".dt-row-grouping tbody").on("click", "tr.group", function () {
            var e = table.order()[0];
            2 === e[0] && "asc" === e[1]
                ? d.order([2, "desc"]).draw()
                : d.order([2, "asc"]).draw();
        });
    }
    if (l.length)
        l.DataTable({
            ajax: r + "data/table-datatable.json",
            columns: [
                { data: "responsive_id" },
                { data: "full_name" },
                { data: "post" },
                { data: "email" },
                { data: "start_date" },
                { data: "salary" },
                { data: "status" },
                { data: "" },
            ],
            columnDefs: [
                { className: "control", orderable: !1, targets: 0 },
                {
                    targets: -2,
                    render: function (e, a, t, s) {
                        var l = t.status,
                            r = {
                                1: {
                                    title: "Current",
                                    class: "badge-light-primary",
                                },
                                2: {
                                    title: "Professional",
                                    class: " badge-light-success",
                                },
                                3: {
                                    title: "Rejected",
                                    class: " badge-light-danger",
                                },
                                4: {
                                    title: "Resigned",
                                    class: " badge-light-warning",
                                },
                                5: {
                                    title: "Applied",
                                    class: " badge-light-info",
                                },
                            };
                        return void 0 === r[l]
                            ? e
                            : '<span class="badge badge-pill ' +
                                  r[l].class +
                                  '">' +
                                  r[l].title +
                                  "</span>";
                    },
                },
                {
                    targets: -1,
                    title: "Actions",
                    orderable: !1,
                    render: function (e, a, t, s) {
                        return (
                            '<div class="d-inline-flex"><a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons["more-vertical"].toSvg({
                                class: "font-small-4",
                            }) +
                            '</a><div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item">' +
                            feather.icons["file-text"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Details</a><a href="javascript:;" class="dropdown-item">' +
                            feather.icons.archive.toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Archive</a><a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons["trash-2"].toSvg({
                                class: "mr-50 font-small-4",
                            }) +
                            'Delete</a></div></div><a href="javascript:;" class="item-edit">' +
                            feather.icons.edit.toSvg({
                                class: "font-small-4",
                            }) +
                            "</a>"
                        );
                    },
                },
            ],
            language: {
                url:
                    "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json",
                paginate: { previous: "&nbsp;", next: "&nbsp;" },
            },
            dom:
                '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (e) {
                            return "Details of " + e.data().full_name;
                        },
                    }),
                    type: "column",
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: "table",
                    }),
                },
            },
        });
});
