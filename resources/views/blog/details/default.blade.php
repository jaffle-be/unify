<div itemscope itemtype="//schema.org/BlogPosting">

    <meta itemprop="url" content="{{ store_route('store.uri.show', [$post->uri]) }}"/>

    <!-- News v3 -->
    <div class="news-v3 margin-bottom-30">
        <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="">

        <div class="news-v3-in">

            <h2 itemprop="headline">{{ $post->title }}</h2>

            <ul class="list-inline posted-info">
                <li><i class="fa fa-tags"></i>&nbsp; {!! $post->tags->format(null, ', ') !!}</li>
                <li>{{ $post->publish_at->format('d M, Y') }}</li>
            </ul>
            <div itemprop="articleBody">
                {!!  $post->present()->content !!}
            </div>
        </div>
    </div>
    <!-- End News v3 -->

    <hr>

    <!-- Blog Post Author -->
    @include('Unify::blog.elements.author')
            <!-- End Blog Post Author -->

    <hr>

    <!-- News v2 -->
    @include('Unify::blog.elements.author-articles', ['posts' => $related])
            <!-- End News v2 -->

    {{--<hr>--}}

    {{--@include('Unify::blog.elements.comments')--}}
</div>