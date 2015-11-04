@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="footer-socials list-inline" itemtype="//schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $name => $url)
                <li>
                    <a target="_blank" href="{{ $url }}" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ ucfirst($name) }}" itemprop="sameAs">
                        <i class="fa fa-{{$name}}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif