@extends('frontend.layouts.frontend-master')
@section('title', 'Portfolio Details | Sushant Poudel')
@section('content')

<section class="dtr-my-100 dtr-pt-50">
    <div class="container">
        <img src="alpha-assets/images/folio-item-bg1.jpg" alt="image">
        <div class="row dtr-mt-50">
            <div class="col-12 col-md-7">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. Nullam eget felis eget nunc lobortis mattis aliquam faucibus purus.
                    Odio morbi quis commodo odio aenean. Sed elementum tempus egestas sed sed risus pretium quam. Arcu
                    ac tortor dignissim convallis aenean et tortor at risus.</p>
            </div>
            <div class="col-12 col-md-5">
                <table class="table dtr-border-table">
                    <tbody>
                        <tr>
                            <th>Project Name :</th>
                            <td>Magnolia Rose</td>
                        </tr>
                        <tr>
                            <th>Services :</th>
                            <td>Branding, Web Design</td>
                        </tr>
                        <tr>
                            <th>Year :</th>
                            <td>2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row dtr-mt-50">
            <div class="col-12 col-md-6"> <img src="alpha-assets/images/photography_img11.jpg" alt="image"
                    class="dtr-mb-30">
                <h4>Objectives</h4>
                <ul class="dtr-icon-list">
                    <li> <i class="icon-arrow-right"></i> Bold </li>
                    <li> <i class="icon-arrow-right"></i> User Friendly </li>
                    <li> <i class="icon-arrow-right"></i> Aesthetic </li>
                    <li> <i class="icon-arrow-right"></i> Accessibility </li>
                    <li> <i class="icon-arrow-right"></i> Straightforward CMS </li>
                </ul>
            </div>
            <div class="col-12 col-md-6"> <img src="alpha-assets/images/photography_img14.jpg" alt="image"
                    class="dtr-mb-30">
                <h4>The Solution</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus vel facilisis.
                    Nullam eget felis eget nunc lobortis mattis aliquam faucibus purus. Odio morbi quis commodo odio
                    aenean. Sed elementum tempus egestas sed sed risus pretium quam. Arcu ac tortor dignissim convallis
                    aenean et tortor at risus.</p>
            </div>
        </div>
        <p class="text-center"> <a href="#" class="dtr-btn btn-blue dtr-mt-50">View Lorem Ipsum Project <i
                    class="icon-arrow-right"></i> </a></p>
    </div>
</section>

<section class="dtr-section parallax dtr-py-100" style="background-image: url(alpha-assets/images/background-cta.jpg);">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="font-family-alt font-weight-700 color-dark">Want to work together!</h3>
                <p class="color-dark text-size-md">I’m available for freelance work.</p>
                <a href="#" class="dtr-btn btn-white dtr-mt-30">Hire Me <i class="icon-chevron-compact-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection