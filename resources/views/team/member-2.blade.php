@extends('Unify::unify')

@section('title', Lang::get('Unify::account.about-a-member'))

@section('styles-content')
    
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css') }}">

    
@stop

@section('content')
    

    <!-- About Me Block -->
    <div class="container content-sm">
        <div class="row about-me">
            <div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
                <div class="box-shadow shadow-effect-2">
                    <img class="img-responsive img-bordered full-width" src="{{ asset($member->thumbnail(380)) }}" alt="">
                </div>
            </div>

            <div class="col-sm-8">
                <div class="overflow-h">
                    <div class="pull-left">
                        <h2>{{ $member->name }}</h2>
                        <span>{{ $member->function }}</span>
                    </div>
                    <ul class="social-icons pull-right">
                        <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                        <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                    </ul>
                </div>    
                <p>{{ $member->bio }}</p>

                <div class="row">
                    <!-- Smallest Progress Bar -->
                    @foreach($member->skills as $skill)
                    <div class="col-md-6 md-margin-bottom-40">
                        <h3 class="heading-xs">{{ $skill->name }} - {{$skill->pivot->level}}%</h3>
                        <div class="progress progress-u progress-sm">
                            <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="{{$skill->pivot->level}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->pivot->level}}%">
                            </div>
                        </div>
                    </div>
                    <!-- End Smallest Progress Bar -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End About Me Block -->

    <!-- Parallax Quote -->
    @include('Unify::team.elements.quote',  ['quote' => $member->quote, 'author' => $member->quote_author])
    <!-- End Parallax Quote -->

    <!-- Portfolio -->
    @include('Unify::team.elements.portfolio', ['projects' => $member->projects])
    <!-- End Portfolio -->

    <!-- Parallax Counter -->
    @include('Unify::team.elements.counters')
    <!-- End Parallax Counter -->

    <!-- Call To Action -->
    @include('Unify::team.elements.hire-me')
    <!-- End Call To Action -->

     
@stop


@section('scripts-plugins')
    @parent
    
<script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
<script type="text/javascript" src="{{ theme_asset('plugins/counter/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ theme_asset('plugins/counter/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ theme_asset('plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- JS Customization -->

@stop

@section('scripts-app')
               
<script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ theme_asset('js/plugins/cube-portfolio/cube-portfolio-lightbox.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
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