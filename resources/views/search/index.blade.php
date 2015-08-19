@extends('Unify::unify')

@section('title', Lang::get('Unify::portfolio.titles.detail'))

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">

@stop


@section('content')

    <div class="container">


        <div class="content">

            <div class="headline"><h2>{{ Lang::get('Unify::search.search-result') . ' ' . Input::get('query')}}</h2>
            </div>

            @if(!$projects->count() && !$posts->count())

                <div class="alert alert-warning">{{ Lang::get('Unify::search.nothing-found') }}</div>

            @endif


            <form action="{{ route('store.search.index') }}">

                <div class="form-group">
                	<label for="query" class="control-label">{{ Lang::get('Unify::search.search-for-something') }}</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div>
                            <input type="search" name="query" id="query" class="form-control" value="{{ Input::get('query') }}"/>
                        </div>
                    </div>

                </div>

            </form>


            @if($posts->count())
                <div class="headline-v2 bg-color-light margin-bottom-40"><h2>{{ Lang::get('Unify::tags.posts') }}</h2>
                </div>

                <? $counter = 0 ?>
                @foreach($posts as $post)

                    @if($counter % 2 == 0)
                        <div class="row">
                            @endif

                            <div class="col-md-6">

                                @include('Unify::blog.elements.medium-overview')

                            </div>

                            @if($counter % 2 != 0)
                        </div>
                    @endif

                    <? $counter++ ?>
                @endforeach

            @endif

        </div>

        @if($projects->count())

            <div class="headline-v2 bg-color-light margin-bottom-40"><h2>{{ Lang::get('Unify::tags.projects') }}</h2>
            </div>

            <div class="cube-portfolio margin-bottom-40">
                <div id="grid-container" class="cbp-l-grid-agency">


                    @foreach($projects as $project)

                        @include('Unify::portfolio.elements.related-item', ['project' => $project])

                    @endforeach

                </div>

            </div>

        @endif

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