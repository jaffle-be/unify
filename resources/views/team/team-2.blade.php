@extends('Unify::unify')

@section('title', Theme::setting('teamAboutTitle'))

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">


    @stop

    @section('content')

    @if($memberships->count())

            <!--=== Cube Portfolio ===-->
    <div class="cube-portfolio container content margin-bottom-30">
        <div id="filters-container" class="cbp-l-filters-text no-padding">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All</div>
            |
            @foreach($teams as $team)
                <div data-filter=".{{ $team->cubeportfolio }}" class="cbp-filter-item"> {{$team->name}} </div> |
            @endforeach

        </div>
        <!--/end Filters Container-->

        <div id="grid-container" class="cbp-l-grid-gallery">

            @foreach($memberships as $membership)

                <div class="cbp-item {{ implode(' ', $membership->teams->lists('cubeportfolio')->toArray()) }}">
                    <a href="{{ store_route('store.team.show', [$membership->member]) }}" class="cbp-caption"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ $membership->member->thumbnail(512) ? asset($membership->member->thumbnail(512)): theme_asset('img/team/img2-md.jpg') }}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-desc">{{$membership->member->function}}</div>
                                    <div class="cbp-l-caption-title text-uppercase">{{ $membership->member->name }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
        <!--/end Grid Container-->
    </div>
    <!--=== End Cube Portfolio ===-->

    @else
        <div class="container content"></div>
    @endif

    @if(Theme::setting('teamHiring'))
        @include('Unify::team.elements.hiring')
    @endif


@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ theme_asset('js/custom.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio-lightbox.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->


@stop