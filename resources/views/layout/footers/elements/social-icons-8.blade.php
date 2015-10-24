@if($account->socialLinks)
    <ul class="social-icons pull-right" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
            <li><a href="{{ $url }}" target="_blank" data-original-title="{{ ucfirst($name) }}" class="rounded-x social_{{ $name }}" itemprop="sameAs"></a></li>
        @endforeach
    </ul>
@endif
