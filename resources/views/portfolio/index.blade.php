@extends('unify::unify')

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">

@stop

@section('breadcrumb')

    <div class="breadcrumbs-v3 img-v1">
        <div class="container text-center">
            <p>Portfolio</p>

            <h1>Portfolio 2 Columns Grid</h1>
        </div>
        <!--/end container-->
    </div>

@stop

@section('content')

    <!--=== Cube-Portfdlio ===-->
    <div class="cube-portfolio margin-bottom-20">
        @include('unify::portfolio.elements.filters')

        <div id="grid-container" class="cbp-l-grid-agency">

            @foreach($projects as $project)

                <? $image = $project->images->first() && $project->images->first()->sizes->first() ? $project->images->first()->sizes->first() : false; ?>

                @include('unify::portfolio.elements.overview-item', ['image' => $image])
            @endforeach

        </div>
        <!--/end Grid Container-->
    </div>
    <!--=== End Cube-Portfdlio ===-->

@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio-2.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->


@stop