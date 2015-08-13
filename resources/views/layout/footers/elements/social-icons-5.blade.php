@if($account->socialLinks)
    <ul class="list-inline dark-social-v2">
        @foreach($account->socialLinks->available() as $name => $url)
        <li><a target="_blank" href="{{ $url }}"><i class="rounded-sm fa fa-{{ $name }}"></i></a></li>
        @endforeach
    </ul>
@endif