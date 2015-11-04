@if(count($tweets))
    <div class="parallaxBg twitter-block margin-bottom-60">
        <div class="container">
            @if(isset($template_title) && $template_title == '2')
                <div class="headline-center-v2 headline-center-v2-light margin-bottom-60">
                    <h2 class="">{{ Lang::get('Unify::front.tweets-about-us') }}</h2>
                    <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
                </div><!--/Headline Center V2-->
            @else
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>{{ Lang::get('Unify::front.tweets-about-us') }}</h2>
                </div>
            @endif

            <div id="carousel-example-generic-v5" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <? $counter = 0 ?>
                    @while($counter < count($tweets) - 1)
                        <li class="{{ $counter == 0 ? 'active' : '' }} rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="{{ $counter }}"></li>
                        <? $counter++ ?>
                    @endwhile
                </ol>

                <div class="carousel-inner">

                    <? $counter = 0 ?>
                    @foreach($tweets as $tweet)
                        <div class="item {{ $counter == 0 ? 'active' : '' }}">
                            <p>{!! app('ttwitter')->linkify($tweet->text) !!}<p>

                            <p>{!! app('ttwitter')->linkify('@' . $tweet->user->screen_name) !!}</p>
                            <ul class="list-inline twitter-icons">
                                <li><a href="#"><i class="fa fa-reply"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>

                        <? $counter++ ?>
                    @endforeach
                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#carousel-example-generic-v5" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic-v5" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif