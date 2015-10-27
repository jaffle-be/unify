@extends('Unify::unify')

@section('title', Theme::setting('teamAboutMemberMainTitle'))

@section('styles-content')

    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">


    @stop

    @section('content')


    <!-- About Me Block -->
    <div class="container content-sm">
        <div class="text-center margin-bottom-40">
            <h2 class="title-v2 title-center">{{ Theme::setting('teamMemberAboutTitle') }}</h2>
        </div>

        <div class="row about-me">
            <div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
                <div class="box-shadow shadow-effect-2">
                    <img class="img-responsive img-bordered full-width" src="{{ asset($member->thumbnail(512)) }}" alt="">
                </div>
            </div>

            <div class="col-sm-8">
                <div class="overflow-h">
                    <div class="pull-left">
                        <h2>{{$member->name}}</h2>
                        <span>{{ $member->function }}</span>
                    </div>
                    @if($member->socialLinks)
                        <ul class="social-icons pull-right">
                            @foreach($member->socialLinks->available() as $name => $url)
                            <li><a class="rounded-x social_{{ $name }}" data-original-title="{{ ucfirst($name) }}" target="_blank" href="{{ $url }}"></a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <p>{!!  Markdown::convertToHtml($member->bio) !!}</p><br>

                <div class="row">
                    @foreach($member->skills as $skill)

                        <div class="col-md-6">
                            <h3 class="heading-xs">{{ $skill->name }} - {{ $skill->pivot->level }}%</h3>

                            <div class="progress progress-u progress-sm">
                                <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="{{$skill->pivot->level}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->pivot->level}}%">
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- End About Me Block -->

    <!-- Parallax Quote -->
    @include('Unify::team.elements.quote', ['quote' => $member->quote, 'author' => $member->quote_author])
            <!-- End Parallax Quote -->

    <!-- Portfolio -->
    @include('Unify::team.elements.portfolio', ['projects' => $member->projects, 'tags' => $member->projects->getUniqueTags()]);
    <!-- End Portfolio -->

    <!-- Parallax Counter -->
    @include('Unify::team.elements.counters')
    <!-- End Parallax Counter -->

    <div class="container content">

        <div class="text-center margin-bottom-40">
            <h2 class="title-v2 title-center">{{ Theme::setting('teamMemberMyPosts') }}</h2>
        </div>

        @foreach($posts->chunk(3) as $chunk)
            @include('Unify::blog.elements.author-articles', ['posts' => $chunk])
        @endforeach

    </div>

    <!-- Call To Action -->
    @include('Unify::team.elements.hire-me')
    <!-- End Call To Action -->


@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/counter/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/counter/jquery.counterup.min.js') }}"></script>
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
            App.initCounter();
            App.initParallaxBg();
        });
    </script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->


@stop