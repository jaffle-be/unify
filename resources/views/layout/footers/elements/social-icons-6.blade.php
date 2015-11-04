@if($account->socialLinks)
    <div id="organisation-social-links">
        <ul class="list-inline dark-social pull-right space-bottom-0" itemtype="//schema.org/Organization" itemscope>
            <meta itemprop="url" content="{{ store_route('store.home') }}"/>
            @foreach($account->socialLinks->available() as $name => $url)
                <li>
                    <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="{{ $name }}" href="{{ $url }}" target="_blank" itemprop="sameAs">
                        <i class="fa fa-{{$name}}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif