@extends('unify::unify-shop')

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/revolution-slider/rs-plugin/css/settings.css') }}">
@stop

@include('unify::shop.elements.slider-home')

@section('content')

    @include('unify::shop.elements.product-content')

    @include('unify::shop.elements.twitter')

    <div class="container">
        @include('unify::shop.elements.product-service')

        @include('unify::shop.elements.illustrations')
    </div>

    @include('unify::shop.elements.collection-banner')

    @include('unify::shop.elements.sponsors')

    @include('unify::shop.elements.subscribe')
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