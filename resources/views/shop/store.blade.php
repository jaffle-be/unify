@extends('Unify::unify-shop')

@section('title', Lang::get('Unify::front.store'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/revolution-slider/rs-plugin/css/settings.css') }}">
@stop

@section('breadcrumb')
@stop

@include('Unify::shop.elements.slider-home')

@section('content')

    @include('Unify::shop.elements.product-content')

    @include('Unify::shop.elements.twitter')

    <div class="container">
        @include('Unify::shop.elements.product-service')

        @include('Unify::shop.elements.illustrations')
    </div>

    @include('Unify::shop.elements.collection-banner')

    @include('Unify::shop.elements.sponsors')

    @include('Unify::shop.elements.subscribe')
@stop

@section('scripts-plugins')
    @parent
    <script src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    <script src="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ theme_asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ theme_asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

@stop

@section('scripts-app')
    <script src="{{ theme_asset('js/shop.app.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/revolution-slider.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            App.initScrollBar();
            App.initParallaxBg();
            OwlCarousel.initOwlCarousel();
            RevolutionSlider.initRSfullWidth();
        });
    </script>
@stop