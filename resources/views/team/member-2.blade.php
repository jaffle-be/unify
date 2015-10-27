@extends('Unify::unify')

@section('title', Theme::setting('teamAboutMemberMainTitle'))

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

            <div class="col-xs-4 col-md-4">
                <img class="img-responsive" src="{{ asset($member->thumbnail(1280)) }}" alt="">
            </div>

            <!-- Social Network -->
            <div class="col-md-4 md-margin-bottom-50">
                <div class="headline-left margin-bottom-30">
                    <h2 class="headline-brd heading-md">{{ Theme::setting('teamMemberAboutTitle') }}</h2>
                </div>
                <p>{!!  Markdown::convertToHtml($member->bio) !!}</p>

                @if($member->socialLinks)
                    <ul class="list-inline social-icons-v1">
                        @foreach($member->socialLinks->available() as $name => $url)
                        <li><a target="_blank" href="{{ $url }}"><i class="rounded-x fa fa-{{ $name }}"></i></a></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <!-- End Social Network -->

            <!-- Progress Bar -->
            <div class="col-md-4 progress-box md-margin-bottom-50">
                <div class="headline-left margin-bottom-30">
                    <h2 class="headline-brd heading-md">{{ Theme::setting('teamMemberSkillsTitle') }}</h2>
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
    @include('Unify::team.elements.portfolio', ['projects' => $member->projects, 'tags' => $member->projects->getUniqueTags()])
    <!--=== End Portfolio ===-->

    <!-- Parallax Counter -->
    @include('Unify::team.elements.counters')
    <!-- End Parallax Counter -->

    <div class="container content">

        <div class="headline-left margin-bottom-30">
            <h2 class="headline-brd heading-md">{{ Theme::setting('teamMemberMyPosts') }}</h2>
        </div>

        @foreach($posts->chunk(3) as $chunk)
            @include('Unify::blog.elements.author-articles', ['posts' => $chunk])
        @endforeach

    </div>

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