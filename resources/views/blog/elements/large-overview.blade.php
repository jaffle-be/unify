<!-- Blog Posts -->
<div class="news-v3 margin-bottom-60">
    <a href="{{ route('store.blog.show', [$post]) }}">
        <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="">
    </a>

    <div class="news-v3-in">
        <ul class="list-inline posted-info">
            <li>{{ Lang::get('Unify::blog.post-by') }} <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!! $post->tags->format(null, ', ') !!}</li>
            <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
        </ul>
        <h2><a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a></h2>

        <p>{{ $post->extract }}</p>
        <ul class="post-shares">
            <li>
                <a href="#">
                    <i class="rounded-x icon-speech"></i>
                    <span>26</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-share"></i>
                    <span>98</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-heart"></i>
                    <span>30</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Blog Posts -->