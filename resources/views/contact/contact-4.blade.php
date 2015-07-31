@extends('Unify::Unify')

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
@stop

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_contact.min.css') }}">
@stop

@section('breadcrumb')
    @include('Unify::contact.elements.breadcrumbs')
@stop

@section('content')
    <div class="container content">
        <div class="row margin-bottom-60">
            <div class="col-md-6 col-sm-6">

                @include('Unify::contact.elements.map', ['height' => '450px'])

            </div>
            <div class="col-md-6 col-sm-6">

                @include('Unify::contact.elements.contacts')

                @include('Unify::contact.elements.hours')

            </div>
        </div>

        <div class="margin-bottom-60">

            <!-- Get in Touch -->
            <h3>Get in Touch</h3>

            @if($success)
                <form method="post" id="sky-form3"
                      class="sky-form contact-style">
                    <p class="text-center" style="padding: 30px;">
                        <i style="font-size:5em; color: #72c02c;" class="rounded-x icon icon-check"></i>
                    </p>
                </form>
            @else
                <form action="{{ route('store.contact.store') }}" method="post" id="sky-form3"
                      class="sky-form contact-style">

                    @if($contact->form_description)
                        <div class="row">
                            <p class="col-md-7">{{ $contact->form_description }}</p>
                        </div>
                        <br>
                    @endif

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
                                <div style="position:relative; margin-bottom: 10px;" class="input-captcha">
                                    <img src="{{ captcha_src() }}" width="120" height="32" style="position: absolute; top: 1px; right:1px;"/>
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

                </form>
            @endif

        </div>

        @include('Unify::marketing.widgets.clients')
    </div>
@stop

@section('scripts-plugins')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/gmap/gmap.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/pages/page_contacts.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/owl-carousel.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            ContactPage.initMap();
            OwlCarousel.initOwlCarousel();
        });
    </script>

@stop
