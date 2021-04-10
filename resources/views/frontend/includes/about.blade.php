<section id="about" class="dtr-section dtr-pt-20 dtr-pb-80 bg-light-blue">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-12 col-md-6 small-device-space">
                <div class="dtr-pr-30"> <img src="alpha-assets/images/SushantPoudel-portfolio.jpg" alt="image"> </div>
            </div>
            <div class="col-12 col-md-6">

                <div class="dtr-styled-heading">
                    <h2>About Me</h2>
                    <p>{{ $about->title_tag }}</p>
                </div>
                <p class="font-weight-500 color-dark">{{ $about->short_desc }}</p>

                <p class="dtr-mt-20">{{ $about->long_desc }}</p>
                <div class="row dtr-mt-20">
                    <div class="col-12 col-md-6">
                        <table class="table dtr-border-table">
                            <tbody>
                                <tr>
                                    <th>Name :</th>
                                    <td>{{ $about->user->first()->name}}</td>
                                </tr>
                                <tr>
                                    <td>Github :</td>
                                    <td><a href="{{ $about->github_url }}">sushant403</a></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><a href="#contact">Contact Me</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table class="table dtr-border-table">
                            <tbody>
                                <tr>
                                    <th>D.O.B :</th>
                                    <td>{{ $about->birthday }} A.D.</td>
                                </tr>
                                <tr>
                                    <td>Phone :</td>
                                    <td>{{ $about->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Location :</td>
                                    <td>{{ $about->location }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ $about->resume_url }}" target="_blank" class="dtr-btn btn-blue dtr-mt-30">Download CV <i
                        class="icon-chevron-compact-right"></i></a>
            </div>
        </div>

        <div class="dtr-styled-heading heading-left dtr-mt-100">
            <h2>My Skills</h2>
            <p>Subheading or information goes here</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title"><i
                            class="icon-bxl-nodejs"></i>Node JS</span><span class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 90%;"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 offset-lg-2">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title"><i
                            class="icon-bxl-angular"></i>Angular</span><span class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 93%;"
                        aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 offset-lg-2">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title">Management</span><span
                        class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 82%;"
                        aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-4 offset-lg-2">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title">Analytics</span><span
                        class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 96%;"
                        aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title"><i
                            class="icon-bxl-adobe"></i>Adobe Suite</span><span class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 75%;"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 offset-lg-2">
                <p class="d-flex justify-content-between"><span class="dtr-progress-title"><i
                            class="icon-bxl-react"></i>React</span><span class="dtr-progress-value"></span></p>
                <div class="dtr-progress progress">
                    <div class="progress-bar bg-dark wow fadeInLeft" role="progressbar" style="width: 82%;"
                        aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</section>