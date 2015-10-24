@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="social-icons" itemtype="http://schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $link => $url)
                <li>
                    <a target="_blank" href="{{ $url }}" data-original-title="Feed" class="social_{{ $link }}" itemprop="sameAs"></a>
                </li>
            @endforeach
        </ul>
    </div>
@endif