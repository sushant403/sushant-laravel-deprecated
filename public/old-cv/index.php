<?php
include('./include/db.php');
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db, $query);
if (!$db) {
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="<?= $data['description'] ?>"/>
    <meta name="keywords" content="<?= $data['keyword'] ?>"/>
    <meta name="author" content="Sushant Poudel"/>
    <meta property="og:image"
          content="https://avatars2.githubusercontent.com/u/59304990?s=460&u=bcc656b65c5b5370cf54613248b54239c39857b4&v=4"/>
    <!-- Favicons -->
    <link href="assets/img/<?= $data['icon'] ?>" rel="icon">
    <link href="assets/img/<?= $data['icon'] ?>" rel="apple-touch-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css">
    <link rel="stylesheet" href="assets/css/animations.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/alpha-light.css" type="text/css">
    <link rel="stylesheet" href="assets/css/alpha-dark.css" id="stylesheet" type="text/css">

    <script src="assets/js/modernizr.custom.js"></script>
</head>

<body>
<!-- <div class="preloader">
    <div class="spinner">
        <div class="circles"></div>
    </div>
</div> -->
<div id="page" class="page one-page-style">

    <!-- Arrows Nav -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Arrows Nav -->

    <?php require('./sections/header.php') ?>

    <!-- Main Content -->
    <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
            <!-- Subpages -->
            <div class="subpages">

                <?php require('./sections/intro.php') ?>

                <?php require('./sections/about.php') ?>

                <?php require('./sections/resume.php') ?>

                <?php require('./sections/portfolio.php') ?>

                <?php require('./sections/contact.php') ?>

            </div>
            <!-- /Subpages -->
        </div>
        <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
</div>

<script>
    DarkMode = function () {
        var i = document.getElementById("btnSwitchMode"),
            s = document.getElementById("stylesheet"),
            e = {
                mode: localStorage.getItem("mode") ? localStorage.getItem("mode") : null
            };

        function t(e, t) {
            if (e) {
                var a, o = s.getAttribute("href").split("/"),
                    n = o[o.length - 1];
                a = "dark" == e ? "alpha-dark.css" : "alpha-light.css", a = s.getAttribute("href").replace(n, a), s.setAttribute("href", a), localStorage.setItem("mode", e), "dark" == e ? (i.classList.add("text-warning"), i.setAttribute("data-mode", "light")) : (i.classList.remove("text-warning"), i.setAttribute("data-mode", "dark")), document.getElementById("header-main") && function (e) {
                    var t, a = document.getElementById("header-main"),
                        o = document.getElementById("navbar-main"),
                        n = document.getElementById("navbar-logo"),
                        i = n.getAttribute("src").split("/"),
                        s = i[i.length - 1];
                    a.classList.contains("header-transparent") || (t = "dark" == e ? (o.classList.remove("navbar-light", "bg-white"), o.classList.add("navbar-dark", "bg-dark"), n.getAttribute("src").replace(s, "light.svg")) : (o.classList.remove("navbar-dark", "bg-dark"), o.classList.add("navbar-light", "bg-white"), n.getAttribute("src").replace(s, "dark.svg")), n.setAttribute("src", t))
                }(e), t && t()
            }
        }

        i && s && (window.addEventListener("load", function () {
            t(e.mode, function () {
                document.body.style.opacity = "1"
            })
        }), i.addEventListener("click", function () {
            var e = i.dataset.mode;
            document.body.style.opacity = "0", t(e, function () {
                document.body.style.opacity = "1"
            })
        }))
    }();
</script>

<script src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/assets/js/jquery-2.1.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/jquery.malihu.PageScroll2id.min.js"></script>
<script src="/assets/js/validator.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/js/jquery.shuffle.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/assets/js/alpha-script.js"></script>

</body>

</html>