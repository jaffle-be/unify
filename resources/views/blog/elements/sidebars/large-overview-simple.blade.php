<div class="col-md-3 magazine-page">

    @if($latest->count())
    <!-- Posts -->
    <div class="posts margin-bottom-40">
        <div class="headline headline-md"><h2>{{ Theme::setting('blogSidebarRecentPostsTitle') }}</h2></div>
        @foreach($latest as $post)
        <dl class="dl-horizontal">
            <dt><a href="{{ route('store.blog.show', [$post->translate()]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
            </dt>
            <dd>
                <p><a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a></p>
            </dd>
        </dl>
        @endforeach
    </div>
    <!--/posts-->
    <!-- End Posts -->
    @endif

    @if($account->socialLinks)
            <!-- Social Icons -->
    <div class="magazine-sb-social margin-bottom-30">
        <div class="headline headline-md"><h2>{{ Theme::setting('blogSidebarSocialLinksTitle') }}</h2></div>

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
    <!-- Blog Tags -->
    <div class="headline headline-md"><h2>{{ Theme::setting('blogSidebarTagsTitle') }}</h2></div>
    <ul class="list-unstyled blog-tags margin-bottom-30">
        @foreach($tags as $tag)
            <li><a href="{{ route('store.tags.show', [$tag]) }}"><i class="fa fa-tags"></i> {{ $tag->name }}</a></li>
        @endforeach
    </ul>
    <!-- End Blog Tags -->
    @endif

    <!-- Blog Latest Tweets -->
    {{--<div class="blog-twitter margin-bottom-40">--}}
        {{--<div class="headline headline-md"><h2>Latest Tweets</h2></div>--}}
        {{--<div class="blog-twitter-inner">--}}
            {{--<i class="fa fa-twitter"></i>--}}
            {{--<a href="#">@htmlstream</a>--}}
            {{--At vero eos et accusamus et iusto odio dignissimos.--}}
            {{--<a href="#">http://t.co/sBav7dm</a>--}}
            {{--<span>5 hours ago</span>--}}
        {{--</div>--}}
        {{--<div class="blog-twitter-inner">--}}
            {{--<i class="fa fa-twitter"></i>--}}
            {{--<a href="#">@htmlstream</a>--}}
            {{--At vero eos et accusamus et iusto odio dignissimos.--}}
            {{--<a href="#">http://t.co/sBav7dm</a>--}}
            {{--<span>5 hours ago</span>--}}
        {{--</div>--}}
        {{--<div class="blog-twitter-inner">--}}
            {{--<i class="fa fa-twitter"></i>--}}
            {{--<a href="#">@htmlstream</a>--}}
            {{--At vero eos et accusamus et iusto odio dignissimos.--}}
            {{--<a href="#">http://t.co/sBav7dm</a>--}}
            {{--<span>5 hours ago</span>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Blog Latest Tweets -->

    <!-- Blog Posts -->
    {{--<div class="row">--}}
        {{--<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-30">--}}
            {{--<h3><a href="#">Bootstrap 3 Template</a></h3>--}}
            {{--<span><i class="color-green">By htmlstream</i> / March 19, 2014</span>--}}

            {{--<div class="magazine-posts-img">--}}
                {{--<a href="#"><img class="img-responsive" src="{{ theme_asset('img/main/img10.jpg') }}" alt=""></a>--}}
                {{--<span class="magazine-badge magazine-badge-red">Unify</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="magazine-posts col-md-12 col-sm-6">--}}
            {{--<h3><a href="#">Parralax One Page</a></h3>--}}
            {{--<span><i class="color-green">By Taylor Miller</i> / July 19, 2014</span>--}}

            {{--<div class="magazine-posts-img">--}}
                {{--<a href="#"><img class="img-responsive" src="{{ theme_asset('img/main/img1.jpg') }}" alt=""></a>--}}
                {{--<span class="magazine-badge magazine-badge-green">Bootstrap 3</span>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Blog Posts -->
</div>