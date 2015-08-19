@extends('Unify::unify')

@section('title', Lang::get('Unify::account.about-our-team'))

@section('styles-content')



@stop

@section('content')


    @if(!$account->members->count())
        <div class="container content"></div>
    @else


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

                                    @if($member->socialLinks)
                                        <ul class="list-inline social-icons-v1">
                                            @foreach($member->socialLinks->available() as $name => $url)
                                                <li>
                                                    <a target="_blank" href="{{ $url }}"><i class="fa fa-{{ $name }}"></i></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 team-v7-img">
                            <a href="{{ route('store.team.show', [$member]) }}">
                                <img class="img-responsive full-width equal-height-column" src="{{ $member->thumbnail(1280) ? asset($member->thumbnail(1280)) : theme_asset('img/team/img-v1.jpg') }}" alt="">
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

                                    @if($member->socialLinks)
                                        <ul class="list-inline social-icons-v1">
                                            @foreach($member->socialLinks->available() as $name => $url)
                                                <li>
                                                    <a href="{{ $url }}" target="_blank"><i class="fa fa-{{ $name }}"></i></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6 team-v7-img">
                            <a href="{{ route('store.team.show', [$member]) }}">
                                <img class="img-responsive full-width equal-height-column" src="{{ $member->thumbnail(1280) ? asset($member->thumbnail(1280)) : theme_asset('img/team/img-v2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- End Team Blocks -->

                    @endif

                    <? $counter++ ?>
                    @endforeach
                            <!-- End Team Blocks -->

        </div>

    @endif

    @if(Theme::setting('teamHiring'))
        @include('Unify::team.elements.hiring')
    @endif


@stop


@section('scripts-plugins')
    @parent

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="{{ theme_asset('js/custom.js') }}"></script>

@stop

@section('scripts-app')

    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
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