@if($account->socialLinks)
    <ul class="social-icons">
        @foreach($account->socialLinks->available() as $link => $url)
            <li><a target="_blank" href="{{ $url }}" data-original-title="Feed" class="social_{{ $link }}"></a></li>
        @endforeach
    </ul>
@endif