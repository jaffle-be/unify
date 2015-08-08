@extends('Unify::unify')

@section('title', Lang::get('account.about-a-member'))

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">


@stop

@section('content')

    <div class="breadcrumbs-v3 breadcrumbs-lg img-v2">
        <div class="container">
            <h1>{{ $member->name }}</h1>

            <p>{{ $member->function }}</p>
        </div>
    </div>


    <!--=== Container Part ===-->
    <div class="container content-sm">
        <div class="row">
            <!-- Social Network -->
            <div class="col-md-6 md-margin-bottom-50">
                <div class="headline-left margin-bottom-30">
                    <h2 class="headline-brd heading-md">ABOUT <span class="color-green">ME</span></h2>
                </div>
                <p>{{ $member->bio }}</p>
                <ul class="list-inline social-icons-v1">
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <!-- End Social Network -->

            <!-- Progress Bar -->
            <div class="col-md-6 progress-box md-margin-bottom-50">
                <div class="headline-left margin-bottom-30">
                    <h2 class="headline-brd heading-md">MY <span class="color-green">SKILLS</span></h2>
                </div>

                @foreach($member->skills as $skill)
                    <h3 class="heading-xs">{{ $skill->name }}
                        <span class="pull-right">{{ $skill->pivot->level }}%</span></h3>
                    <div class="progress progress-u progress-xxs">
                        <div class="progress-bar progress-bar-dark" role="progressbar" data-width="{{ $skill->pivot->level }}">
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- End Progress Bar -->
        </div>
        <!--/end row-->
    </div>
    <!--=== End Container Part ===-->

    <!--=== Quote v1 ===-->
    @include('Unify::team.elements.quote', ['quote' => $member->quote, 'author' => $member->quote_author])
            <!--=== End Quote v1 ===-->

    <!--=== Portfolio ===-->
    @include('Unify::team.elements.portfolio', ['projects' => $member->projects])
            <!--=== End Portfolio ===-->

    <!-- Parallax Counter -->
    @include('Unify::team.elements.counters')
            <!-- End Parallax Counter -->

    <!--=== Call To Action v2 ===-->
    @include('Unify::team.elements.hire-me')
            <!--=== End Call To Action v2 ===-->


@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery-appear.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/counter/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/counter/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ theme_asset('js/custom.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/progress-bar.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio-lightbox.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            App.initCounter();
            App.initParallaxBg();
            ProgressBar.initProgressBarHorizontal();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->


@stop