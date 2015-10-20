<!-- Blog Posts -->
<div class="news-v3 margin-bottom-60">
    <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">
        <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="">
    </a>

    <div class="news-v3-in">
        <ul class="list-inline posted-info">
            <li>{{ Lang::get('Unify::front.post-by') }} <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!! $post->tags->format(null, ', ') !!}</li>
            <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
        </ul>
        <h2><a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></h2>

        <p>{!!  $post->present()->extract !!}</p>
    </div>
</div>
<!-- End Blog Posts -->