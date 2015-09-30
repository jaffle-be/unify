@extends('Unify::unify')

@section('title', $tag->name)

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">

@stop


@section('content')

    <div class="container">


        <div class="content">

            <div class="headline-v2 bg-color-light margin-bottom-40"><h2>{{ Lang::get('Unify::front.tags.posts') }}</h2></div>

                <? $counter = 0 ?>
                @foreach($tag->posts as $post)

                    @if($counter % 2 == 0)
                        <div class="row">
                    @endif

                    <div class="col-md-6">

                        @include('Unify::blog.elements.medium-overview', ['post' => $post, 'counter' => $counter])

                    </div>

                    @if($counter % 2 != 0)
                        </div>
                    @endif

                    <? $counter++ ?>
                @endforeach

            </div>

            <div class="headline-v2 bg-color-light margin-bottom-40"><h2>{{ Lang::get('Unify::front.tags.projects') }}</h2></div>

            <div class="cube-portfolio margin-bottom-40">
                <div id="grid-container" class="cbp-l-grid-agency">


                    @foreach($tag->projects as $project)

                        @include('Unify::portfolio.elements.related-item', ['project' => $project])

                    @endforeach

                </div>

            </div>

        </div>

    </div>


    </div>

@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio-4.js') }}"></script>
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