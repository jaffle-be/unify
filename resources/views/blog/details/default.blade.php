<div itemscope itemtype="//schema.org/Article">

    <meta itemprop="url" content="{{ store_route('store.uri.show', [$post->uri]) }}"/>
    <meta itemprop="description" content="{{ $post->present()->extract(200) }}"/>

    <!-- News v3 -->
    <div class="news-v3 margin-bottom-30">
        <img class="img-responsive full-width" itemprop="image" src="{{ asset($post->thumbnail(1140)) }}" alt="post image main">

        <div class="news-v3-in">

            <h2 itemprop="headline">{{ $post->title }}</h2>

            <ul class="list-inline posted-info">
                <li><i class="fa fa-tags"></i>&nbsp; {!! $post->tags->format(null, ', ') !!}</li>
                <li><i class="fa fa-calendar"></i>&nbsp; <span itemprop="datePublished">{{ $post->publish_at->format('d M, Y') }}</span></li>
            </ul>
            <section itemprop="articleBody">
                {!!  $post->present()->content !!}
            </section>
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