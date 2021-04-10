@if (Request::is('contact'))
<div class="dtr-page-title-pt"></div>
@endif

<section class="dtr-py-100" id="contact">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2>Hey there</h2>
            <p>Email me or Hire Me. Your call.</p>

            @include('frontend.components.message')
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="dtr-form">
                    <form id="contactform" method="POST" action="{{ route('contact.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="dtr-form-row dtr-form-row-2col">
                                <p class="dtr-form-column">
                                    <input name="name" class="required name" type="text"
                                        placeholder="[Name] Hi I'm Sushant, and you?">
                                    @if($errors->has('name'))
                                    <label id="email-error" class="error" for="email">
                                        {{ $errors->first('name') }}
                                    </label>
                                    @endif
                                </p>
                                <p class="dtr-form-column">
                                    <input name="email" class="required email" type="text"
                                        placeholder="[Email] How may I contact you?">
                                    @if($errors->has('email'))
                                    <label id="email-error" class="error" for="email">
                                        {{ $errors->first('email') }}
                                    </label>
                                    @endif
                                </p>
                            </div>
                            <p>
                                <input name="subject" type="text" placeholder="[Subject] Any specific subject in mind?">
                            </p>
                            <p class="antispam">Leave this empty: <br />
                                <input name="url" />
                            </p>
                            <p>
                                <textarea rows="6" name="message" id="message" class="required"
                                    placeholder="Please on you go with the message..."></textarea>
                                @if($errors->has('message'))
                                <label id="email-error" class="error" for="email">
                                    {{ $errors->first('message') }}
                                </label>
                                @endif
                            </p>
                            <p class="text-center">
                                <button class="dtr-btn btn-blue dtr-mt-minus30" type="submit">Send Now<i
                                        class="icon-cursor dtr-ml-15"></i></button>
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
                    <p>PO Box 16122, Collins, Victoria 3000, Australia</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i
                            class="icon-phone-fill dtr-mr-10 text-size-md color-blue"></i><span
                            class="font-weight-500 color-dark">Give a Call</span></p>
                    <p>90 1234 56 78</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i
                            class="icon-envelope-fill dtr-mr-10 text-size-md color-blue"></i><span
                            class="font-weight-500 color-dark">Email Me</span></p>
                    <p>sayhello@example.com</p>
                    <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                        <li><a href="#" class="dtr-social-button dtr-dribbble" target="_blank"
                                title="dribbble"><span>Follow me</span></a></li>
                        <li><a href="#" class="dtr-social-button dtr-skype" target="_blank" title="skype"><span>Call
                                    me</span></a></li>
                        <li><a href="#" class="dtr-social-button dtr-google" target="_blank" title="google"><span>Share
                                    on Google</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>