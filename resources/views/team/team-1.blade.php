@extends('Unify::unify')

@section('title', Theme::setting('teamAboutTitle'))

@section('content')

    @if(!$teams->count())
        <div class="container content"></div>
    @endif

        @foreach($teams as $team)
                <!--=== Team v5 ===-->
        <div class="container content">
            <div class="headline-center margin-bottom-60">

                <h2>{{ $team->name }}</h2>

                {!!  Markdown::convertToHtml($team->description) !!}

            </div>

            <div class="row team-v5 margin-bottom-30">
                @foreach($team->memberships as $teamMembership)


                    <?
                    //member info was loaded through the memberships array
                    //so use that instead of triggering endless db queries
                    $membership = $memberships->find($teamMembership)
                    ?>

                    <div class="col-sm-4 sm-margin-bottom-50">
                        <div class="team-img">
                            <img class="img-responsive" src="{{ asset($membership->member->thumbnail(512) ? : theme_asset('img/team/img1-md.jpg')) }}" alt="">

                            <div class="team-hover">
                                @if($membership->member->socialLinks)
                                    <ul class="list-inline team-social-v5">
                                        @foreach($membership->member->socialLinks->available() as $name => $url)
                                            <li>
                                                <a target="_blank" href="{{ $url }}"><i class="rounded-x fa fa-{{$name}}"></i></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <span>
                                <a href="{{ route('store.team.show', [$membership->member]) }}">{{ Lang::get('Unify::front.read-more') }}</a>
                            </span>
                            </div>
                        </div>
                        <span>{{ $membership->member->function }}</span>
                        <small>{{ implode(', ', $membership->member->skills->lists('name')->toArray()) }}</small>
                        <p>{!!  $membership->member->bio !!}</p>
                        <a href="{{ route('store.team.show', [$membership->member]) }}">{{ Lang::get('Unify::front.read-more') }}</a>
                    </div>
                @endforeach
            </div>
            <!--/end team v5-->
        </div>
        <!--=== End Team v5 ===-->
        @endforeach

        @if(Theme::setting('teamHiring'))
            @include('Unify::team.elements.hiring')
        @endif


@stop