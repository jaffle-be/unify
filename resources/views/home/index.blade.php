
@extends('Unify::unify')

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css') }}'" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ theme_asset('plugins/revolution-slider/rs-plugin/css/settings-ie8.css') }}" type="text/css" media="screen"><![endif]-->


@stop


@section('breadcrumb')
{{--disable breadcrumbs--}}
@stop

@section('content')

    @include('Unify::layout.sliders.revolution-1')
    <!--=== End Slider ===-->

    <!--=== Service Block ===-->
    @include('Unify::layout.widgets.services-notes')<!--/container-->
    <!--=== End Service Block ===-->

    <!--=== Parallax Backgound ===-->
    @include('Unify::layout.widgets.call-to-action')
    <!--=== End Parallax Backgound ===-->

    <!--=== Recent Posts ===-->
    @include('Unify::layout.widgets.recent-posts')
    <!--=== End Recent Posts ===-->

    <!--=== Service Info ===-->
    @include('Unify::layout.widgets.services-media')
    <!--=== End Service Info ===-->

    @include('Unify::layout.widgets.portfolio-examples')
    <!--=== End Portfolio Box V2 ===-->

    <!--=== Service Block ===-->
    @include('Unify::layout.widgets.services-overview')
    <!--=== End Service Block ===-->

    <!--=== Testimonials Section ===-->
    @include('Unify::layout.widgets.testimonials')
    <!--=== End Section ===-->

    <!--=== Owl Carousel v6 ===-->
    <div class="container margin-bottom-60">

        <div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
            <h2>{{ Theme::setting('widgetsOurClientsTitle') }}</h2>
            <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
        </div>

        @include('Unify::layout.widgets.clients', ['title' => false])

    </div><!--/container-->
    <!--=== End Owl Carousel v6 ===-->

    @include('Unify::layout.widgets.call-out')

@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ theme_asset('js/custom.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/revolution-slider.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            App.initParallaxBg();
            FancyBox.initFancybox();
            OwlCarousel.initOwlCarousel();
            RevolutionSlider.initRSfullWidth();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->


@stop