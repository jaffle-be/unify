@extends('Unify::unify-shop')

@section('title', Lang::get('Unify::front.products-by-category'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/noUiSlider/jquery.nouislider.css') }}">
@stop

@section('content')

    <div class="content container">
        <div class="row">
            @include('Unify::shop.elements.filter-sidebar')

            <div class="col-md-9">
                @include('Unify::shop.elements.filters-top')

                @include('Unify::shop.elements.filter-grid')
            </div>
        </div>
    </div>

    @include('Unify::shop.elements.subscribe')
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
