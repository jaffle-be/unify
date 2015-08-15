<div class="blog-author margin-bottom-30">
    <a href="{{ route('store.team.show',[$post->user]) }}">
        <img src="{{ asset($user->thumbnail(80)) }}" alt="">
    </a>

    <div class="blog-author-desc">
        <div class="overflow-h">

            <h4>{{ $post->user->name }}</h4>
            <ul class="list-inline">
                @foreach($post->user->socialLinks->available() as $name => $url)
                    <li><a target="_blank" href="{{ $url }}"><i class="fa fa-{{ $name }}"></i></a></li>
                @endforeach
            </ul>
        </div>
        <p>{{$post->user->bio}}</p>

        <p><a href="{{ route('store.team.show', [$post->user]) }}">{{ Lang::get('Unify::front.more-about') }}</a></p>
    </div>
</div>