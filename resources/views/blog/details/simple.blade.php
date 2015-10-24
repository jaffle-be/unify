<div itemscope itemtype="//schema.org/BlogPosting">
    <!--Blog Post-->
    <div class="blog margin-bottom-40">
        <div class="blog-img">
            <img class="img-responsive" src="{{ asset($post->thumbnail(1140)) }}" alt="">
        </div>

        <h2 itemprop="headline">{{ $post->title }}</h2>

        <div class="blog-post-tags">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
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
