<div class="col-md-3">

    @if($latest->count())
            <!-- Posts -->
    <div class="posts margin-bottom-40">
        <div class="headline headline-md"><h2>{{ Theme::setting('blogSidebarRecentPostsTitle') }}</h2></div>
        @foreach($latest as $post)
            <dl class="dl-horizontal">
                <dt><a href="{{ route('store.uri.show', [$post->translate()->uri]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
                </dt>
                <dd>
                    <p><a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></p>
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

</div>