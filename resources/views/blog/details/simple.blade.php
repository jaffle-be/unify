<div itemscope itemtype="//schema.org/BlogPosting">

    <meta itemprop="url" content="{{ store_route('store.uri.show', [$post->uri]) }}"/>

    <!--Blog Post-->
    <div class="blog margin-bottom-40">
        <div class="blog-img">
            <img class="img-responsive" itemprop="image" src="{{ asset($post->thumbnail(1140)) }}" alt="post image main">
        </div>

        <h2 itemprop="headline">{{ $post->title }}</h2>

        <div class="blog-post-tags">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-calendar"></i> <span itemprop="datePublished">{{ $post->publish_at->format('d M, Y') }}</span></li>
                {{--<li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>--}}
            </ul>
            <ul class="list-unstyled list-inline blog-tags">
                <li>
                    <i class="fa fa-tags"></i>
                    {!! $post->tags->format() !!}
                </li>
            </ul>
        </div>


        <section itemprop="articleBody">
        {!! $post->present()->content !!}
        </section>
    </div>
    <!--End Blog Post-->

    <hr>

    @include('Unify::blog.elements.author')

    <hr>

    @include('Unify::blog.elements.author-articles', ['posts' => $related])

    {{--<hr>--}}

    {{--@include('Unify::blog.elements.comments-simple')--}}
</div>
