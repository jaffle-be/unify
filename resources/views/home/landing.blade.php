@extends('Unify::unify-clean')

@section('styles-content')
    <link rel="stylesheet" href="{{theme_asset('css/pages/landing.min.css') }}">
@stop

@section('content')

    <div class="container content">

        <div class="locales">
            <h1>In what language can we help you?</h1>

                @foreach($account->locales as $locale)
                    <div class="locale">
                        <a href="{{ store_route('store.home', [], [], $locale->slug) }}"> {{ $locale->translate($locale->slug)->name }}</a>
                    </div>
                @endforeach
        </div>
    </div>

@stop

@section('scripts-plugins')
    <script type="text/javascript" src="{{ theme_asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>
    @stop

    @section('scripts-app')
            <!-- JS Page Level -->
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
    <script type="text/javascript">
        $.backstretch([
            "{{ theme_asset('img/landing/chairs.jpg') }}"
        ])
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->
@stop