@extends('Unify::unify')

@section('title', Lang::get('Unify::account.about-our-team'))

@section('styles-content')



@stop

@section('content')

    @foreach($account->teams as $team)
            <!--=== Team v5 ===-->
    <div class="container content">
        <div class="headline-center margin-bottom-60">

            <h2>{{ $team->name }}</h2>

            <p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
                Lorem ipsum
                <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla
            </p>
        </div>

        <div class="row team-v5 margin-bottom-30">
            @foreach($team->memberships as $membership)
                <div class="col-sm-4 sm-margin-bottom-50">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ asset($membership->member->thumbnail(380) ? : 'assets/img/team/img1-md.jpg') }}" alt="">

                        <div class="team-hover">
                            <ul class="list-inline team-social-v5">
                                <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
                            </ul>
                            <span>
                                <a href="{{ route('store.team.show', [$membership->member]) }}">{{ Lang::get('Unify::read-more') }}</a>
                            </span>
                        </div>
                    </div>
                    <span>{{ $membership->member->function }}</span>
                    <small>{{ implode(', ', $membership->member->skills->lists('name')->toArray()) }}</small>
                    <p>{{ $membership->member->bio }}</p>
                    <a href="{{ route('store.team.show', [$membership->member]) }}">{{ Lang::get('Unify::read-more') }}</a>
                </div>
            @endforeach
        </div>
        <!--/end team v5-->
    </div>
    <!--=== End Team v5 ===-->
    @endforeach


    {{--<hr class="margin-bottom-60">--}}

    {{--<!--=== Team v6 ===-->--}}
    {{--<div class="container">--}}
        {{--<div class="headline-center margin-bottom-60">--}}
            {{--<h2>OTHER MEMBERS</h2>--}}
            {{--<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>--}}
            {{--Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>--}}
        {{--</div>--}}

        {{--<div class="row team-v6 margin-bottom-60">--}}
            {{--<div class="col-md-3 col-sm-6 md-margin-bottom-50">--}}
                {{--<img class="img-responsive" src="assets/img/team/img3-md.jpg" alt="">--}}
                {{--<span>Marketing</span>--}}
                {{--<small>Graphic Designer</small>--}}
                {{--<ul class="list-inline social-icons-v1">--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 md-margin-bottom-50">--}}
                {{--<img class="img-responsive" src="assets/img/team/img7-md.jpg" alt="">--}}
                {{--<span>Sara Lisbon</span>--}}
                {{--<small>Community</small>--}}
                {{--<ul class="list-inline social-icons-v1">--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6 sm-margin-bottom-50">--}}
                {{--<img class="img-responsive" src="assets/img/team/img1-md.jpg" alt="">--}}
                {{--<span>John Doe</span>--}}
                {{--<small>Support</small>--}}
                {{--<ul class="list-inline social-icons-v1">--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6">--}}
                {{--<img class="img-responsive" src="assets/img/team/img5-md.jpg" alt="">--}}
                {{--<span>Alice Williams</span>--}}
                {{--<small>Marketing</small>--}}
                {{--<ul class="list-inline social-icons-v1">--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div><!--/end team v6-->--}}
    {{--</div>--}}
    {{--<!--=== End Team v6 ===-->--}}

    @if(Theme::setting('teamHiring'))
        @include('Unify::team.elements.hiring')
    @endif


@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="assets/js/app.js"></script>
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