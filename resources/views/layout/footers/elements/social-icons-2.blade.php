@if($account->socialLinks)
    <ul class="footer-socials list-inline" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
            <li>
                <a target="_blank" href="{{ $url }}" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ ucfirst($name) }}" itemprop="sameAs">
                    <i class="fa fa-{{$name}}"></i>
                </a>
            </li>
        @endforeach
    </ul>
@endif