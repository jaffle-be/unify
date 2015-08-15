@extends('Unify::unify')

@section('title', Lang::get('Unify::contact.titles.contact'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css') }}"><![endif]-->

@stop

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_contact.min.css') }}">
@stop

@section('content')
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">

                @include('Unify::contact.elements.map', ['height' => '250px', 'margin' => true])

                <div class="headline"><h2>{{ Theme::setting('contactFormTitle') }}</h2></div>

                <div class="margin-bottom-20">
                    {{ Theme::setting('contactFormText') }}
                </div>

                @if($success)

                    <form method="post" id="sky-form3"
                          class="sky-form contact-style">
                        <p class="text-center">
                            <i style="font-size:5em; color: #72c02c;" class="rounded-x icon icon-check"></i>
                        </p>
                    </form>

                @else
                    <form action="{{ route('store.contact.store') }}" method="post" id="sky-form3"
                          class="sky-form contact-style">

                        {!! csrf_field() !!}
                        <input name="_id" type="hidden" value="{{ $contact->id }}"/>

                        <fieldset class="no-padding">
                            <label>Name <span class="color-red">*</span></label>

                            <div class="row sky-space-20">
                                <div class="col-md-7 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label>Email <span class="color-red">*</span></label>

                            <div class="row sky-space-20">
                                <div class="col-md-7 col-md-offset-0">
                                    <div>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label>Message <span class="color-red">*</span></label>

                            <div class="row sky-space-20">
                                <div class="col-md-11 col-md-offset-0">
                                    <div>
                                        <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <label>Captcha <span class="color-red">*</span></label>

                            <div class="row sky-space-20">
                                <div class="col-md-11 col-md-offset-0">
                                    <div style="position:relative;" class="input-captcha">
                                        <img src="{{ captcha_src() }}" width="120" height="32"/>
                                        <input type="text" name="captcha" id="captcha" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            @if($errors->has('captcha'))
                                <label class="error">{{ $errors->first('captcha') }}</label>
                            @endif

                            <p>
                                <button type="submit" class="btn-u">Send Message</button>
                            </p>
                        </fieldset>

                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>

                            <p>Your message was successfully sent!</p>
                        </div>
                    </form>
                @endif
            </div>
            <!--/col-md-9-->

            <div class="col-md-3">
                @include('Unify::contact.elements.contacts')

                @include('Unify::contact.elements.hours')

                @include('Unify::contact.elements.widget')
            </div>
            <!--/col-md-3-->
        </div>
        <!--/row-->


        @include('Unify::layout.widgets.clients')

    </div>
@stop


@section('scripts-plugins')

    @parent
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/gmap/gmap.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/forms/login.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/pages/page_contacts.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/owl-carousel.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            ContactPage.initPageContactForm();
            ContactPage.initMap();
            OwlCarousel.initOwlCarousel();
        });
    </script>
@stop
