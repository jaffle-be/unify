@if($account->socialLinks)
    <ul class="list-inline dark-social-v2" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
        <li><a target="_blank" href="{{ $url }}"><i class="rounded-sm fa fa-{{ $name }}" itemprop="sameAs"></i></a></li>
        @endforeach
    </ul>
@endif