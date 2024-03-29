$(function () {
    "use strict";
    var e = document.querySelectorAll(".bs-stepper"),
        n = $(".select2"),
        i = document.querySelector(".horizontal-wizard-example"),
        r = document.querySelector(".vertical-wizard-example"),
        t = document.querySelector(".modern-wizard-example"),
        o = document.querySelector(".modern-vertical-wizard-example");
    if (void 0 !== typeof e && null !== e)
        for (var l = 0; l < e.length; ++l)
            e[l].addEventListener("show.bs-stepper", function (e) {
                for (
                    var n = e.detail.indexStep,
                        i = $(e.target).find(".step").length - 1,
                        r = $(e.target).find(".step"),
                        t = 0;
                    t < n;
                    t++
                ) {
                    r[t].classList.add("crossed");
                    for (var o = n; o < i; o++)
                        r[o].classList.remove("crossed");
                }
                if (0 == e.detail.to) {
                    for (var l = n; l < i; l++)
                        r[l].classList.remove("crossed");
                    r[0].classList.remove("crossed");
                }
            });
    if (
        (n.each(function () {
            var e = $(this);
            e.wrap('<div class="position-relative"></div>'),
                e.select2({
                    placeholder: "Select value",
                    dropdownParent: e.parent(),
                });
        }),
        void 0 !== typeof i && null !== i)
    ) {
        var d = new Stepper(i);
        $(i)
            .find("form")
            .each(function () {
                $(this).validate({
                    rules: {
                        username: { required: !0 },
                        email: { required: !0 },
                        password: { required: !0 },
                        "confirm-password": {
                            required: !0,
                            equalTo: "#password",
                        },
                        "first-name": { required: !0 },
                        "last-name": { required: !0 },
                        address: { required: !0 },
                        landmark: { required: !0 },
                        country: { required: !0 },
                        language: { required: !0 },
                        twitter: { required: !0, url: !0 },
                        facebook: { required: !0, url: !0 },
                        google: { required: !0, url: !0 },
                        linkedin: { required: !0, url: !0 },
                    },
                });
            }),
            $(i)
                .find(".btn-next")
                .each(function () {
                    $(this).on("click", function (e) {
                        $(this).parent().siblings("form").valid()
                            ? d.next()
                            : e.preventDefault();
                    });
                }),
            $(i)
                .find(".btn-prev")
                .on("click", function () {
                    d.previous();
                }),
            $(i)
                .find(".btn-submit")
                .on("click", function () {
                    $(this).parent().siblings("form").valid() &&
                        alert("Submitted..!!");
                });
    }
    if (void 0 !== typeof r && null !== r) {
        var c = new Stepper(r, { linear: !1 });
        $(r)
            .find(".btn-next")
            .on("click", function () {
                c.next();
            }),
            $(r)
                .find(".btn-prev")
                .on("click", function () {
                    c.previous();
                }),
            $(r)
                .find(".btn-submit")
                .on("click", function () {
                    alert("Submitted..!!");
                });
    }
    if (void 0 !== typeof t && null !== t) {
        var a = new Stepper(t, { linear: !1 });
        $(t)
            .find(".btn-next")
            .on("click", function () {
                a.next();
            }),
            $(t)
                .find(".btn-prev")
                .on("click", function () {
                    a.previous();
                });
    }
    if (void 0 !== typeof o && null !== o) {
        var u = new Stepper(o, { linear: !1 });
        $(o)
            .find(".btn-next")
            .on("click", function () {
                u.next();
            }),
            $(o)
                .find(".btn-prev")
                .on("click", function () {
                    u.previous();
                }),
            $(o)
                .find(".btn-submit")
                .on("click", function () {
                    alert("Submitted..!!");
                });
    }
});
