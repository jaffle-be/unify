@if($account->socialLinks)
    <ul class="social-icons" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
            <li>
                <a target="_blank" href="{{ $url }}" data-original-title="{{ ucfirst($name) }}" class="rounded-x social_{{ $name }}" itemprop="sameAs"></a>
            </li>
        @endforeach
    </ul>
@endif