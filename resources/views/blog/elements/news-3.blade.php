<!-- News v3 -->
<div class="row margin-bottom-20">
    <div class="col-sm-5 sm-margin-bottom-20">
        <a href="{{ route('store.blog.show', [$post]) }}">
            <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
        </a>
    </div>
    <div class="col-sm-7">
        <div class="news-v3">
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
                        <span>5</span>
                    </a>
                </li>
                <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--/end row-->
<!-- End News v3 -->

<div class="clearfix margin-bottom-20">
    <hr>
</div>

{{--<!-- Blog Posts -->--}}
{{--<div class="news-v3 margin-bottom-60">--}}
    {{--<img class="img-responsive full-width" src="{{ theme_asset('img/main/img12.jpg') }}" alt="">--}}

    {{--<div class="news-v3-in">--}}
        {{--<ul class="list-inline posted-info">--}}
            {{--<li>By <a href="#">Alexander Jenni</a></li>--}}
            {{--<li>In <a href="#">Design</a></li>--}}
            {{--<li>Posted January 24, 2015</li>--}}
        {{--</ul>--}}
        {{--<h2><a href="#">Incredible standard post “IMAGE”</a></h2>--}}

        {{--<p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>--}}
        {{--<ul class="post-shares">--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="rounded-x icon-speech"></i>--}}
                    {{--<span>26</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="rounded-x icon-share"></i>--}}
                    {{--<span>98</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="rounded-x icon-heart"></i>--}}
                    {{--<span>30</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- End Blog Posts -->--}}


{{--<!-- News v3 -->--}}
{{--<div class="row margin-bottom-20">--}}
    {{--<div class="col-sm-5 sm-margin-bottom-20">--}}
        {{--<div class="responsive-video">--}}
            {{--<iframe src="//player.vimeo.com/video/93094247?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-7">--}}
        {{--<div class="news-v3">--}}
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
{{--</div>--}}
{{--<!--/end row-->--}}
{{--<!-- End News v3 -->--}}

{{--<div class="clearfix margin-bottom-20">--}}
    {{--<hr>--}}
{{--</div>--}}

