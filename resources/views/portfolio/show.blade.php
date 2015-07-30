@extends('unify::unify')

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">


@stop

@section('breadcrumb')

    <div class="breadcrumbs-v3 img-v1">
        <div class="container text-center">
            <p>Portfolio</p>

            <h1>Single Item</h1>
        </div>
        <!--/end container-->
    </div>

    @stop

    @section('content')

            <!--=== Container Part ===-->
    <div class="container">
        <div class="content">
            <!-- Magazine Slider -->
            <div class="carousel slide carousel-v2 margin-bottom-40" id="portfolio-carousel">
                <ol class="carousel-indicators">
                    @foreach($project->images as $index => $image)
                        <li class="{{$index === 0 ? 'active' : ''}} rounded-x" data-target="#portfolio-carousel" data-slide-to="{{ $index }}"></li>
                    @endforeach
                </ol>

                <div class="carousel-inner">
                    @foreach($project->images as $index => $image)
                        <div class="item {{$index === 0 ? 'active' : ''}}">
                            <img class="full-width img-responsive" src="{{ asset($image->sizes->first()->path) }}" alt="">
                        </div>
                    @endforeach
                </div>

                <a class="left carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left arrow-prev"></i>
                </a>
                <a class="right carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right arrow-next"></i>
                </a>
            </div>
            <!-- End Magazine Slider -->

            <div class="row margin-bottom-60">
                <div class="col-sm-8">
                    <div class="headline"><h2>{{ Lang::get('portfolio.project-description') }}</h2></div>
                    <p>{{ $project->description }}</p>
                </div>
                <div class="col-sm-4">
                    <div class="headline"><h2>{{ Lang::get('portfolio.project-details') }}</h2></div>
                    <ul class="list-unstyled project-details">
                        <li><strong>Client:</strong>{{ $project->client_name }}</li>
                        <li><strong>Date:</strong> {{ $project->date->format('d F Y') }}</li>
                        <li><strong>Categories:</strong> <a href="#">Web Design,</a> <a href="#">Graphic</a></li>
                        <li><strong>Website:</strong> <a target="_blank" href="{{ $project->website }}">{{ $project->website }}</a></li>
                        @if($project->collaborators->count())
                            <li><strong>Collaborators:</strong>

                                @foreach($project->collaborators as $collaborator)

                                    <a href="#">{{ $collaborator->fullname }}</a>

                                @endforeach

                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="cube-portfolio">
                <div id="grid-container" class="cbp-l-grid-agency">

                    @foreach($relatedProjects as $project)
                        <? $image = $project->images->first() ?>
                        @include('unify::portfolio.elements.related-item', ['project' => $project, 'image' => $image])
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--=== End Container Part ===-->


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