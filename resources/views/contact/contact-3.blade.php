@extends('Unify::unify')

@section('title', Theme::setting('contactMainTitle'))

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
                <div class="headline"><h2>{{ Theme::setting('contactFormTitle') }}</h2></div>
                <div class="margin-bottom-20">{{ Theme::setting('contactFormText') }}</div>

                @include('Unify::contact.elements.form')

            </div>
            <!--/col-md-9-->

            <div class="col-md-3">
                @include('Unify::contact.elements.contacts', ['map' => true, 'margin' => true, 'height' => 'map-box-space1'])

                @include('Unify::contact.elements.hours')


                {{--skip including widget for contact simple... it just don't fit into the page flow.--}}
                {{--@include('Unify::contact.elements.widget')--}}
            </div>
            <!--/col-md-3-->
        </div>
        <!--/row-->

        @include('Unify::layout.widgets.clients')
    </div>
@stop

@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
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