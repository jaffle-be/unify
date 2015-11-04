@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="list-inline dark-social-v2" itemtype="//schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $name => $url)
                <li><a target="_blank" href="{{ $url }}"><i class="rounded-sm fa fa-{{ $name }}" itemprop="sameAs"></i></a>
                </li>
            @endforeach
        </ul>
    </div>
@endif