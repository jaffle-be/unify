@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="list-inline shop-social" itemtype="//schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $name => $url)
                <li><a href="{{ $url }}" target="_blank"><i class="rounded-1x fa fa-{{ $name }}" itemprop="sameAs"></i></a>
                </li>
            @endforeach
        </ul>
    </div>
@endif