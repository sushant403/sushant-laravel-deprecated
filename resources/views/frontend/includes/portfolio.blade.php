<section id="portfolio" class="dtr-section dtr-py-100">
    <div class="container">
        <div class="dtr-styled-heading heading-center">
            <h2>My Projects and Works</h2>
            <p>Works I have been Involed on or Created myself.</p>
        </div>
        <ul class="dtr-filter-nav clearfix">
            <li><a class="dtr-filter-all active" data-filter="*" href="#">All Work</a></li>
            <li><a data-filter=".filter-product" href="#">Full Stack Web</a></li>
            <li><a data-filter=".filter-design" href="#">UI-UX Design</a></li>
            <li><a data-filter=".filter-photography" href="#">Motivations</a></li>
        </ul>
        <div class="dtr-portfolio-grid dtr-portfolio-grid-4col dtr-portfolio-style-2 dtr-rounded-img clearfix">
            @foreach($portfolio as $myportfolio)
            <div class="dtr-portfolio-item isotope-item filter-{{ $myportfolio->type }} all">
                <div class="dtr-portfolio-content dual-icons">
                    <img src="{{ asset('storage/portfolio/' . $myportfolio->id . '/thumbnail_' . $myportfolio->photo) }}"
                        alt="{{ $myportfolio->title }}">
                    <div class="dtr-portfolio-overlay">
                        <a class="media-link" href="{{ $myportfolio->portfolio_url }}" target="_blank"></a>
                        <a class="media-zoom popup-gallery"
                            href="{{ asset('storage/portfolio/' . $myportfolio->id . '/thumbnail_' . $myportfolio->photo) }}"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>