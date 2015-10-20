<div class="col-md-3">

    @if($latest->count())
        <div class="headline-v2 bg-color-light"><h2>{{ Theme::setting('blogSidebarRecentPostsTitle') }}</h2></div>
        <!-- Latest Links -->
        <ul class="list-unstyled blog-latest-posts margin-bottom-50">
            @foreach($latest as $post)
                <li>
                    <h3><a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></h3>
                    <small>{{ $post->publish_at->format('d M, Y') }}/ {!! $post->tags->format(null, ', ') !!}</small>
                    <p>{!! $post->present()->extract !!}</p>
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
        <div class="headline-v2 bg-color-light"><h2>{{ Theme::setting('blogSidebarTagsTitle') }}</h2></div>
        <!-- Tags v2 -->
        <ul class="list-inline tags-v2 margin-bottom-50">
            @foreach($tags as $tag)
                <li><a href="{{ route('store.tags.show', [$tag]) }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
        @endif
                <!-- End Tags v2 -->

</div>