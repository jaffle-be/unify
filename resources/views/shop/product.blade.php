@extends('Unify::unify-shop')

@section('title', Lang::get('Unify::front.product-detail'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/master-slider/quick-start/masterslider/style/masterslider.css') }}">
    <link rel='stylesheet' href="{{ theme_asset('plugins/master-slider/quick-start/masterslider/skins/default/style.css') }}">
@stop

@section('content')
    @include('Unify::shop.elements.product-detail')

    <!--=== Content Medium ===-->
    <div class="content-md container">

        @include('Unify::shop.elements.product-service')

        @include('Unify::shop.elements.tabs')
    </div>

    @include('Unify::shop.elements.subscribe')

@stop

@section('scripts-plugins')
    @parent
    <script src="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ theme_asset('plugins/master-slider/quick-start/masterslider/masterslider.min.js') }}"></script>
    <script src="{{ theme_asset('plugins/master-slider/quick-start/masterslider/jquery.easing.min.js') }}"></script>
@stop

@section('scripts-app')
    <!-- JS Page Level -->
    <script src="{{ theme_asset('js/shop.app.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/master-slider.js') }}"></script>
    <script src="{{ theme_asset('js/forms/shop/product-quantity.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            App.initScrollBar();
            OwlCarousel.initOwlCarousel();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });
    </script>
@stop