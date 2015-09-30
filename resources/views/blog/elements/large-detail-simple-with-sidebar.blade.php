<div class="col-md-9 md-margin-bottom-60">
    <!--Blog Post-->
    <div class="blog margin-bottom-40">
        <h2>
            <a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a>
        </h2>

        <div class="blog-post-tags">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
                <li><i class="fa fa-pencil"></i> <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                {{--<li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>--}}
            </ul>
            <ul class="list-unstyled list-inline blog-tags">
                <li>
                    <i class="fa fa-tags"></i>
                    {!! $post->tags->format() !!}
                </li>
            </ul>
        </div>
        <div class="blog-img">
            <img class="img-responsive" src="{{ asset($post->thumbnail(1140)) }}" alt="">
        </div>
        <p>{!!  $post->extract !!}</p>
        <br>

        {!! $post->present()->content !!}
    </div>
    <!--End Blog Post-->

    <hr>

    @include('Unify::blog.elements.author')

    <hr>

    @include('Unify::blog.elements.author-articles', ['posts' => $related])

    {{--<hr>--}}

    {{--@include('Unify::blog.elements.comments-simple')--}}
</div>