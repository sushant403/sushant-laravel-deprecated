dom:
                '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 10,
            lengthMenu: [10, 25, 50, 75, 100],
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
            ],
            language: { paginate: { previous: "&nbsp;", next: "&nbsp;" } }