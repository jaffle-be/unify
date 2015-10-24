@if($account->socialLinks)
    <ul class="list-inline dark-social pull-right space-bottom-0" id="organisation-social-links">
        @foreach($account->socialLinks->available() as $name => $url)
            <li>
                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="{{ $name }}" href="{{ $url }}" target="_blank" itemprop="sameAs">
                    <i class="fa fa-{{$name}}"></i>
                </a>
            </li>
        @endforeach
    </ul>
@endif