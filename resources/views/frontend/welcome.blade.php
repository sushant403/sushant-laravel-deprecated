@extends('frontend.layouts.frontend-master')

@section('content')
<section id="home" class="dtr-section dtr-hero-section-top-padding dtr-pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="text-size-md font-weight-300 color-dark">Hello,</p>
                <p class="text-size-lg font-weight-300 color-dark">I am
                    <span class="font-weight-500">Sushant</span></p>
                <div class="spacer-20"></div>
                <h3 class="dtr-mb-5 color-blue">Full Stack Developer</h3>
                <h3 class="dtr-mb-5 color-blue opacity-1">Web Designer</h3>
                <h3><span class="dtr-animated-headline push"> <span class="dtr-words-wrapper">
                            <b class="is-visible"><span class="color-blue opacity-2">Laravel|PHP</span></b>
                            <b class="is-hidden"><span class="color-blue opacity-2">Database</span></b>
                            <b class="is-hidden"><span class="color-blue opacity-2">Traveller</span></b>
                        </span> </span></h3>
            </div>
            <div class="col-6 col-md-2 dtr-rounded-img"> <img src="{{ $about->user->first()->profile_photo_url}}"
                    alt="image">
            </div>
            <div class="col-6 col-md-4 dtr-rounded-img">
                <div> <img src="{{ asset('alpha-assets/images/SushantPoudel.gif') }}" alt="image"> </div>
            </div>
        </div>
        <div class="row dtr-mt-10">
            <div class="col-12 col-md-10">
                <p class="text-size-md">I am a
                    <span class="font-weight-500 color-dark">Full Stack Web Developer</span>
                    and Designer. <span class="font-weight-500 color-dark">Learning and working for 7+ years,</span>
                    which was mostly for fun, has now taken the extensive turn making me pretty good at <span
                        class="font-weight-500 color-dark">what I do and work on.</span>
                </p>

                <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                    <li class="dtr-social-title font-weight-500 color-dark">Follow Me on</li>
                    <li><a href="{{ $about->instagram_url }}" class="dtr-social-button dtr-instagram" target="_blank"
                            title="instagram"><span>Instagram</span></a></li>
                    <li><a href="{{ $about->twitter_url }}" class="dtr-social-button dtr-twitter" target="_blank"
                            title="facebook"><span>Twitter</span></a></li>
                    <li><a href="{{ $about->linkedin_url }}" class="dtr-social-button dtr-linkedin" target="_blank"
                            title="linkedin"><span>Linkedin</span></a></li>
                </ul>
            </div>
            <div class="col-12 d-none d-md-block col-md-2 dtr-rounded-img small-device-space"> <img
                    src="alpha-assets/images/experience-img.jpg" alt="image"> </div>
        </div>
    </div>
</section>

@include('frontend.includes.about')

@include('frontend.includes.services')

@include('frontend.includes.resume')

@include('frontend.includes.portfolio')

<section class="dtr-section parallax">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="font-family-alt font-weight-700 color-dark">Want to work together?</h3>
                <p class="color-dark text-size-md">I’m available for freelance work.</p>
                <a href="{{ $about->freelance_url }}" target="_blank" class="dtr-btn btn-white dtr-mt-30">Hire Me <i
                        class="icon-chevron-compact-right"></i></a>
            </div>
        </div>
    </div>
</section>

<livewire:contact-form :about="$about" />

@endsection