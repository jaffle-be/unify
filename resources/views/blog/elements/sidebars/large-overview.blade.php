<div class="col-md-3">
    {{--<div class="headline-v2"><h2>Trending</h2></div>--}}
    {{--<!-- Trending -->--}}
    {{--<ul class="list-unstyled blog-trending margin-bottom-50">--}}
        {{--<li>--}}
            {{--<h3><a href="#">Praesent tincidunt ornare tortor</a></h3>--}}
            {{--<small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><a href="#">Nunc leo leo, faucibus non gravida</a></h3>--}}
            {{--<small>22 Jan, 2015 / <a href="#">Marketing</a></small>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><a href="#">Proin dapibus ornare magna.</a></h3>--}}
            {{--<small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><a href="#">Fusce at diam ante.</a></h3>--}}
            {{--<small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><a href="#">Donec quis consequat magna...</a></h3>--}}
            {{--<small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<!-- End Trending -->--}}

    @if($latest->count())
    <div class="headline-v2"><h2>{{ Theme::setting('blogSidebarRecentPostsTitle') }}</h2></div>
    <!-- Latest Links -->
    <ul class="list-unstyled blog-latest-posts margin-bottom-50">
        @foreach($latest as $post)
        <li>
            <h3><a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a></h3>
            <small>{{ $post->publish_at->format('d M, Y') }} / {!! $post->tags->format(null, ', ') !!}</small>
            <p>{!! $post->extract !!}</p>
        </li>
        @endforeach
    </ul>
    <!-- End Latest Links -->
    @endif

    @if($account->socialLinks)
            <!-- Social Icons -->
        <div class="magazine-sb-social margin-bottom-30">
            <div class="headline-v2 bg-color-light"><h2>{{ Theme::setting('blogSidebarSocialLinksTitle') }}</h2></div>

            <ul class="social-icons social-icons-color">
            @foreach($account->socialLinks->available() as $name => $url)
                <li><a class="social_{{ $name }}" data-original-title="{{ ucfirst($name) }}" href="{{ $url }}"></a></li>
            @endforeach
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- End Social Icons -->
    @endif

    @if($tags->count())
    <div class="headline-v2"><h2>{{ Theme::setting('blogSidebarTagsTitle') }}</h2></div>
    <!-- Tags v2 -->
    <ul class="list-inline tags-v2 margin-bottom-50">
        @foreach($tags as $tag)
        <li><a href="{{ route('store.tags.show', [$tag]) }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>
    @endif
    <!-- End Tags v2 -->

    {{--<div class="headline-v2"><h2>Newsletter</h2></div>--}}
    {{--<!-- Blog Newsletter -->--}}
    {{--<div class="blog-newsletter">--}}
        {{--<p>Subscribe to our newsletter for good news, sent out every month.</p>--}}

        {{--<div class="input-group">--}}
            {{--<input type="text" class="form-control" placeholder="Email">--}}
                            {{--<span class="input-group-btn">--}}
                                {{--<button class="btn-u" type="button">Subscribe</button>--}}
                            {{--</span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Blog Newsletter -->
</div>