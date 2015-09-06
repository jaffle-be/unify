@extends('Unify::unify')

@section('title', Theme::setting('contactMainTitle'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
@stop

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_contact.min.css') }}">
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

            @include('Unify::contact.elements.form')

        </div>

        @include('Unify::layout.widgets.clients')
    </div>
@stop

@section('scripts-plugins')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/gmap/gmap.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
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
            ContactPage.initForm();
            OwlCarousel.initOwlCarousel();
        });
    </script>

@stop
