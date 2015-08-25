<!-- Blog Posts -->
<div class="news-v3 margin-bottom-60">
    @if($counter % 3 == 0)
        <div class="carousel slide carousel-v2" id="portfolio-carousel">
            <ol class="carousel-indicators">
                <? $imgCounter = 0; ?>
                @foreach($post->images as $image)
                    @if($img = $image->sizes->first())
                        <li class="rounded-x {{ $imgCounter == 0 ? 'active' : '' }}" data-target="#portfolio-carousel" data-slide-to="{{ $imgCounter }}"></li>
                        <? $imgCounter++ ?>
                    @endif

                @endforeach
            </ol>
            <div class="carousel-inner">

                <? $imgCounter = 0 ?>
                @foreach($post->images as $image)

                    @if($img = $image->sizes->first())

                        <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                            <a href="{{ route('store.blog.show', [$post]) }}">
                                <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(1140)) }}">
                            </a>

                            {{--<div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>--}}
                        </div>
                        <? $imgCounter++ ?>
                    @endif

                @endforeach

            </div>
            <a class="left carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left arrow-prev"></i>
            </a>
            <a class="right carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="next">
                <i class="fa fa-angle-right arrow-next"></i>
            </a>
        </div>
    @else
        <a href="{{ route('store.blog.show', [$post]) }}">
            <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="">
        </a>
    @endif

    <div class="news-v3-in">
        <ul class="list-inline posted-info">
            <li>{{ Lang::get('Unify::front.post-by') }} <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!!  $post->tags->format(null, ', ') !!}</li>
            <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
        </ul>


        <h2><a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a></h2>

        <p>{{ $post->extract }}</p>

        <ul class="post-shares">
            <li>
                <a href="#">
                    <i class="rounded-x icon-speech"></i>
                    <span>26</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-share"></i>
                    <span>98</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-heart"></i>
                    <span>30</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Blog Posts -->


{{--<!-- Blog Posts -->--}}
{{--<div class="news-v3 margin-bottom-60">--}}
{{--<div class="responsive-video">--}}
{{--<iframe src="//player.vimeo.com/video/93003441?color=567fc7" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
{{--</div>--}}
{{--<div class="news-v3-in">--}}
{{--<ul class="list-inline posted-info">--}}
{{--<li>By Alexander Jenni</li>--}}
{{--<li>In <a href="#">Design</a></li>--}}
{{--<li>Posted January 24, 2015</li>--}}
{{--</ul>--}}
{{--<h2><a href="#">Awesome post “VIDEO”</a></h2>--}}

{{--<p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>--}}
{{--<ul class="post-shares">--}}
{{--<li>--}}
{{--<a href="#">--}}
{{--<i class="rounded-x icon-speech"></i>--}}
{{--<span>5</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li><a href="#"><i class="rounded-x icon-share"></i></a></li>--}}
{{--<li><a href="#"><i class="rounded-x icon-heart"></i></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- End Blog Posts -->--}}

{{--<!-- Blog Posts -->--}}
{{--<div class="blog-post-quote margin-bottom-60">--}}
{{--<p>Look deep into nature, and then you will understand everything better.</p>--}}
{{--<span>- Albert Einstein</span>--}}
{{--</div>--}}
{{--<!-- End Blog Posts -->--}}

{{--<!-- Blog Posts -->--}}
{{--<div class="news-v3 margin-bottom-60">--}}
{{--<iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/19048953&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>--}}

{{--<div class="news-v3-in">--}}
{{--<ul class="list-inline posted-info">--}}
{{--<li>By Luke Etheridge</li>--}}
{{--<li>In <a href="#">Design</a></li>--}}
{{--<li>Posted January 24, 2015</li>--}}
{{--</ul>--}}
{{--<h2><a href="#">Wonderful post “AUDIO”</a></h2>--}}

{{--<p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>--}}
{{--<ul class="post-shares">--}}
{{--<li>--}}
{{--<a href="#">--}}
{{--<i class="rounded-x icon-speech"></i>--}}
{{--<span>5</span>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li><a href="#"><i class="rounded-x icon-share"></i></a></li>--}}
{{--<li><a href="#"><i class="rounded-x icon-heart"></i></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- End Blog Posts -->--}}