<!DOCTYPE HTML>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title', config('app.name'))</title>
    <!-- Stylings -->
    <link rel="stylesheet" href="{{ asset('alpha-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('alpha-assets/fonts/iconfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('alpha-assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('alpha-assets/css/alpha-style.css') }}">
    <link rel="stylesheet" href="{{ asset('alpha-assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('alpha-assets/css/color.css') }}">
    @yield('extra-styles')
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">
        <div class="dtr-responsive-header fixed-top">
            <div class="container">
                <a href="{{ url('/') }}"><img src="{{ asset('alpha-assets/logo.png') }}" width="90" alt="logo"></a>

                <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span
                        class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            <div class="dtr-responsive-header-menu"></div>
        </div>
        <header id="dtr-header-global" class="fixed-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="dtr-header-left">
                        <a class="logo-default" href="{{ url('/') }}"><img src="{{ asset('alpha-assets/logo.png') }}"
                                alt="logo" width="100"></a>
                        <a class="logo-alt" href="{{ url('/') }}"><img src="{{ asset('alpha-assets/biglogo.svg') }}"
                                alt="logo" width="110"></a>

                    </div>
                    <div class="dtr-header-right">
                        <div class="main-navigation dtr-menu-dark">
                            <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                                @auth<li> <a class="nav-link" href="{{ route('sushant.index') }}">Hey Sushant, Wanna
                                        come in?</a> </li>@endauth
                                <li> <a class="nav-link" href="{{url('/')}}">Home</a> </li>
                                <li> <a class="nav-link" href="{{url('/#about')}}">About</a> </li>
                                <li> <a class="nav-link" href="{{url('/#services')}}">Services</a> </li>
                                <li> <a class="nav-link" href="{{url('/#portfolio')}}">Works</a> </li>
                                <li> <a class="nav-link" href="/#contact">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="dtr-main-content">
            @yield('content')
            <footer id="dtr-footer">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Copyright © Sushant Poudel ® {{ date('Y') }}. All rights reserved</p>
                        </div>
                        <div class="col-12 col-md-6 text-right">
                            <p>Github: <a href="https://github.com/sushant403">Sushant</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Little Scriptings -->
    <script src="{{ asset('alpha-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('alpha-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('alpha-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('alpha-assets/js/alpha-script.js') }}"></script>
    @yield('extra-scripts')
</body>

</html>