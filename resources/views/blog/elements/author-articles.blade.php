<div class="row news-v2 margin-bottom-50">

    @foreach($posts as $post)
        <div class="col-sm-4">
            <div class="news-v2-badge">

                <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                    <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
                </a>

                <p>
                    <span>{{ $post->publish_at->format('d') }}</span>
                    <small>{{ $post->publish_at->format('M y') }}</small>
                </p>
            </div>
            <div class="news-v2-desc">
                <h3><a href=" {{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title}}</a></h3>
                <small>By <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a> |
                    {!! $post->tags->format(null, ', ') !!}
                </small>
                <p>{!!  $post->present()->extract !!}</p>
            </div>
        </div>
    @endforeach
</div>