<section id="services" class="dtr-section dtr-py-100">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2>What I Offer</h2>
            <p>First things first, Client's Satisfaction</p>
        </div>
        <div class="row d-flex align-items-center dtr-styled-tab">
            <div class="col-12 col-md-4">
                @foreach($services as $myservices)
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="services-tab-{{ $loop->iteration }}-tab"
                        data-toggle="pill" href="#services-tab-{{ $loop->iteration }}" role="tab"
                        aria-controls="services-tab-{{ $loop->iteration }}"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <h4>{{ $myservices->title }}</h4>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-md-7 offset-md-1 small-device-space">
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach($services as $myservices)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                        id="services-tab-{{ $loop->iteration }}" role="tabpanel"
                        aria-labelledby="services-tab-{{ $loop->iteration }}-tab">
                        <div class="row">
                            <div class="col-12 col-md-5 small-device-space">
                                @if($myservices->photo)
                                <img src="{{ asset('storage/service/' . $myservices->id . '/thumbnail_' . $myservices->photo) }}"
                                    alt="image">
                                @else
                                <img src="{{ asset('alpha-assets/images/myservices.jpg') }}" alt="image">
                                @endif
                            </div>
                            <div class="col-12 col-md-7">
                                <h6>{{ $myservices->short_desc }}</h6>
                                <p>{{ $myservices->long_desc }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>