@if($account->socialLinks)
    <ul class="list-inline shop-social" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
            <li><a href="{{ $url }}" target="_blank"><i class="rounded-1x fa fa-{{ $name }}" itemprop="sameAs"></i></a></li>
        @endforeach
    </ul>
@endif