@if($account->socialLinks)
    <ul class="social-icons pull-right">
        @foreach($account->socialLinks->available() as $name => $url)
            <li><a href="{{ $url }}" target="_blank" data-original-title="{{ ucfirst($name) }}" class="rounded-x social_{{ $name }}"></a></li>
        @endforeach
    </ul>
@endif
