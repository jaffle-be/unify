@if($account->socialLinks)
    <ul class="footer-socials list-inline">
        @foreach($account->socialLinks->available() as $name => $url)
            <li>
                <a target="_blank" href="{{ $url }}" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ ucfirst($name) }}">
                    <i class="fa fa-{{$name}}"></i>
                </a>
            </li>
        @endforeach
    </ul>
@endif