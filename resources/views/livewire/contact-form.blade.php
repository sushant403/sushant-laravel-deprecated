@if (Request::is('contact'))
<div class="dtr-page-title-pt"></div>
@endif

<section class="dtr-py-100" id="contact">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2>Hey there</h2>
            <p>Email me or Hire Me. Your call.</p>
            @if ($successMessage)
            <div class="alert alert-success alert-dismissible w-auto right-0">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="font-weight-500 color-dark"><i class="icon-envelope-fill dtr-mr-10"></i>Success!
                    Thanks.</span>
                <span class="font-weight-400 color-dark">{{ $successMessage }}</span>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="dtr-form">
                    <form wire:submit.prevent="submitForm" action="/contact" method="POST">
                        @csrf
                        <fieldset>
                            <div class="dtr-form-row dtr-form-row-2col">
                                <p class="dtr-form-column">
                                    <input wire:model="name" name="name" class="required name" type="text"
                                        placeholder="[Name] Hi I'm Sushant, and you?">
                                    @error('name')
                                    <label id="email-error" class="error" for="email">
                                        {{ $message }}
                                    </label>
                                    @endif
                                </p>
                                <p class="dtr-form-column">
                                    <input wire:model="email" name="email" class="required email" type="text"
                                        placeholder="[Email] How may I contact you?">
                                    @error('email')
                                    <label id="email-error" class="error" for="email">
                                        {{ $message }}
                                    </label>
                                    @endif
                                </p>
                            </div>
                            <p>
                                <input wire:model="subject" name="subject" type="text"
                                    placeholder="[Subject] Any specific subject in mind?">
                            </p>
                            <p class="antispam">Leave this empty: <br />
                                <input name="url" />
                            </p>
                            <p>
                                @error('message')
                                <label id="email-error" class="error" for="email">
                                    {{ $message }}
                                </label>
                                @endif
                                <textarea wire:model="message" rows="6" name="message" id="message" class="required"
                                    placeholder="Please on you go with the message here...">
                                </textarea>
                            </p>
                            <p class="text-center">
                                <button class="dtr-btn btn-blue dtr-mt-minus30" type="submit">
                                    <div wire:loading wire:target="submitForm" class="spinner-border" role="status">
                                    </div>
                                    &nbsp;Send Now<i class="icon-cursor dtr-ml-15"></i>
                                </button>
                            </p>
                            <div id="result"></div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="dtr-pl-30">
                    <p class="d-flex align-items-center"><i
                            class="icon-geo-alt dtr-mr-10 text-size-md color-blue"></i><span
                            class="font-weight-500 color-dark">My Location</span></p>
                    <p>{{ $about->location }}</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i
                            class="icon-phone-fill dtr-mr-10 text-size-md color-blue"></i><span
                            class="font-weight-500 color-dark">Give a Call</span></p>
                    <p>{{ $about->phone }}</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i
                            class="icon-envelope-fill dtr-mr-10 text-size-md color-blue"></i><span
                            class="font-weight-500 color-dark">Email Me</span></p>
                    <p>I shall reply with my official Email. I promise!</p>
                    <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                        <li><a href="{{ $about->twitter_url }}" class="dtr-social-button dtr-twitter" target="_blank"
                                title="twitter"><span>Follow me</span></a></li>
                        <li><a href="{{ $about->instagram_url }}" class="dtr-social-button dtr-instagram"
                                target="_blank" title="instagram"><span>Contact Me</span></a></li>
                        <li><a href="{{ $about->github_url }}" class="dtr-social-button dtr-github" target="_blank"
                                title="github"><span>Share
                                    on Github</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>