<section id="timeline" class="dtr-section dtr-py-100 bg-light-blue">
    <div class="container">
        <!-- heading starts -->
        <div class="dtr-styled-heading heading-left">
            <h2>My Experience</h2>
            <p>With main focus being Perfection in Work</p>
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 mx-auto">
                <div class="dtr-pr-15">
                    @foreach($resume->sortByDesc('id') as $myresume)
                    <div class="dtr-timeline-item">
                        <p class="dtr-timeline-title">{{ $myresume->date_from}} - {{ $myresume->date_to }}</p>
                        <div class="dtr-timeline-text">
                            <h5>{{ $myresume->title }}</h5>
                            <p class="text-muted" style="font-weight: 500">{{ $myresume->company }}</p>
                            <p class="text-justify">{{ $myresume->short_desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
