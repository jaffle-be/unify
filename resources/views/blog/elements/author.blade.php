<div class="blog-author margin-bottom-30">
    <a href="{{ route('store.team.show',[$post->user]) }}">
        <img src="{{ asset($user->thumbnail(80)) }}" alt="">
    </a>

    <div class="blog-author-desc">
        <div class="overflow-h">

            <h4>{{ $post->user->name }}</h4>
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <p>{{$post->user->bio}}</p>

        <p><a href="{{ route('store.team.show', [$post->user]) }}">{{ Lang::get('Unify::front.more-about') }}</a></p>
    </div>
</div>