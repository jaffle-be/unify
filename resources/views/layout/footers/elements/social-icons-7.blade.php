@if($account->socialLinks)
    <ul class="social-icons">
        @foreach($account->socialLinks->available() as $name => $url)
            <li><a target="_blank" href="{{ $url }}" data-original-title="{{ucfirst($name)}}" class="social_{{$name}} rounded-x"></a></li>
        @endforeach
    </ul>
@endif