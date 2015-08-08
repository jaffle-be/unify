<div class="col-md-9 md-margin-bottom-60">
    <!--Blog Post-->
    <div class="blog margin-bottom-40">
        <h2>
            <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
        </h2>

        <div class="blog-post-tags">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-calendar"></i> {{ $post->published_at->format('d M, Y') }}</li>
                <li><i class="fa fa-pencil"></i> {{ $post->user->name }}</li>
                {{--<li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>--}}
            </ul>
            <ul class="list-unstyled list-inline blog-tags">
                <li>
                    <i class="fa fa-tags"></i>
                    @foreach($post->tags as $tag)
                    <a href="#">{{ $tag->name }}</a>
                    @endforeach
                </li>
            </ul>
        </div>
        <div class="blog-img">
            <img class="img-responsive" src="{{ asset($post->thumbnail(850)) }}" alt="">
        </div>
        <p>{{ $post->extract }}</p>
        <br>

        <p>{{$post->content}}</p>
    </div>
    <!--End Blog Post-->

    <hr>

    @include('Unify::blog.elements.author')

    <hr>

    @include('Unify::blog.elements.author-articles', ['posts' => $related])

    <hr>

    @include('Unify::blog.elements.comments-simple')
</div>