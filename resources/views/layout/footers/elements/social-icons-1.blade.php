@if($account->socialLinks)
    <ul class="social-icons" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $link => $url)
            <li><a target="_blank" href="{{ $url }}" data-original-title="Feed" class="social_{{ $link }}" itemprop="sameAs"></a></li>
        @endforeach
    </ul>
@endif