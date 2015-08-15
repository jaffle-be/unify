<div class="col-md-9">
    <!-- News v3 -->
    <div class="news-v3 margin-bottom-30">
        <img class="img-responsive full-width" src="{{ asset($post->thumbnail(850)) }}" alt="">

        <div class="news-v3-in">
            <ul class="list-inline posted-info">
                <li>By <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!! $post->tags->format(null, ', ') !!}</li>
                <li>{{ $post->publish_at->format('d M, Y') }}</li>
            </ul>
            <h2>{{$post->title}}</h2>

            <p>{{ $post->extract }}</p>

            <p>{{ $post->content }}</p>
            <ul class="post-shares post-shares-lg">
                <li>
                    <a href="#">
                        <i class="rounded-x icon-speech"></i>
                        <span>28</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="rounded-x icon-share"></i>
                        <span>355</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="rounded-x icon-heart"></i>
                        <span>107</span>
                    </a>
                </li>
            </ul>
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

    <hr>

    @include('Unify::blog.elements.comments')
</div>