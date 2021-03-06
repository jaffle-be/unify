@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="social-icons" itemtype="//schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $name => $url)
                <li>
                    <a target="_blank" href="{{ $url }}" data-original-title="{{ ucfirst($name) }}" class="rounded-x social_{{ $name }}" itemprop="sameAs"></a>
                </li>
            @endforeach
        </ul>
    </div>
@endif