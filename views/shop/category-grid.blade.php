@extends('theme.unify::unify-shop')

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/noUiSlider/jquery.nouislider.css') }}">
@stop

@section('breadcrumb')
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Product Filter Page</span>

            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Product Filter Page</li>
            </ul>
        </div>
    </div>
@stop

@section('content')

    <div class="content container">
        <div class="row">
            @include('theme.unify::shop.elements.filter-sidebar')

            @include('theme.unify::shop.elements.filter-grid')
        </div>
    </div>

    @include('theme.unify::shop.elements.subscribe')
@stop

@section('scripts-plugins')
    @parent
    <script src="{{ theme_asset('plugins/noUiSlider/jquery.nouislider.full.min.js') }}"></script>
@stop

@section('script-app')
    <script src="{{ theme_asset('js/shop.app.js') }}"></script>
    <script src="{{ theme_asset('js/plugins/mouse-wheel.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            App.initScrollBar();
            MouseWheel.initMouseWheel();
        });
    </script>
@stop
