<div class="blog-author margin-bottom-30" itemprop="author" itemscope itemtype="//schema.org/Person">
    <a href="{{ store_route('store.team.show',[$post->user]) }}">
        <img src="{{ asset($post->user->thumbnail(80)) }}" alt="" itemprop="image">
    </a>

    <meta itemprop="givenName" content="{{ $post->user->firstname }}"/>
    <meta itemprop="familyName" content="{{ $post->user->lastname }}"/>

    <div class="blog-author-desc">
        <div class="overflow-h">

            <h4>{{ $post->user->name }}</h4>
            @if($post->user->socialLinks)
                <ul class="list-inline">
                    @foreach($post->user->socialLinks->available() as $name => $url)
                        <li><a target="_blank" href="{{ $url }}" itemprop="sameAs"><i class="fa fa-{{ $name }}"></i></a></li>
                    @endforeach
                </ul>
            @endif
        </div>
        <p>{!! $post->user->bio !!}</p>

        <p><a href="{{ store_route('store.team.show', [$post->user]) }}">{{ Lang::get('Unify::front.more-about') }}</a></p>
    </div>
</div>