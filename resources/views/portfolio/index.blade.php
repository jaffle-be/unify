@extends('Unify::unify')

@section('title', Theme::setting('portfolioMainTitleOverview'))

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">

    @stop

    @section('content')

    @if($projects->count())

            <!--=== Cube-Portfdlio ===-->
    <div class="cube-portfolio {{ $options['grid'] ? 'container': null }} margin-bottom-40">
        @include('Unify::portfolio.elements.filters')

        <div id="grid-container" class="cbp-l-grid-agency">

            @foreach($projects as $project)
                @include('Unify::portfolio.elements.overview-item')
            @endforeach

        </div>
        <!--/end Grid Container-->
    </div>
    <!--=== End Cube-Portfdlio ===-->
    @else

        <div class="container content"></div>
    @endif

@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            App.portfolio({{ $options['spaced'] ? 'true': 'false' }}, {{ (int) $options['columns'] }});
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->


@stop