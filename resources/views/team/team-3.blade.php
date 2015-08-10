@extends('Unify::unify')

@section('title', Lang::get('Unify::account.about-our-team'))

@section('styles-content')



@stop

@section('content')


    <div class="container-fluid">
        <!-- Team Blocks -->
        <? $counter = 0 ?>
        @foreach($account->members as $member)

            @if($counter % 2 == 0)
                <div class="row team-v7 no-gutter equal-height-columns">
                    <div class="col-md-6 team-arrow-right">
                        <div class="dp-table">
                            <div class="equal-height-column dp-table-cell team-v7-in">
                                <span class="team-v7-name">{{$member->name}}</span>
                                <span class="team-v7-position">{{$member->function}}</span>

                                <p>{{$member->bio}}
                                    <br>
                                    <a href="{{ route('store.team.show', [$member]) }}">{{ Lang::get('Unify::front.more-about') }}</a>
                                </p>

                                <ul class="list-inline social-icons-v1">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 team-v7-img">
                        <a href="{{ route('store.team.show', [$member]) }}">
                            <img class="img-responsive full-width equal-height-column" src="{{ asset($member->thumbnail(1280) ? : 'assets/img/team/img-v1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>

                @else
                        <!-- Team Blocks -->
                <div class="row team-v7 no-gutter equal-height-columns">
                    <div class="col-md-6 col-md-push-6 team-arrow-left">
                        <div class="dp-table">
                            <div class="equal-height-column dp-table-cell team-v7-in">
                                <span class="team-v7-name">{{$member->name}}</span>
                                <span class="team-v7-position">{{ $member->function }}</span>

                                <p>{{$member->bio}}
                                    <br>
                                    <a href="{{ route('store.team.show', [$member]) }}">{{ Lang::get('Unify::front.more-about') }}</a>
                                </p>

                                <ul class="list-inline social-icons-v1">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 team-v7-img">
                        <a href="{{ route('store.team.show', [$member]) }}">
                            <img class="img-responsive full-width equal-height-column" src="{{ asset($member->thumbnail(1280) ? : 'assets/img/team/img-v2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- End Team Blocks -->

                @endif

                <? $counter++ ?>
                @endforeach
                <!-- End Team Blocks -->

    </div>

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