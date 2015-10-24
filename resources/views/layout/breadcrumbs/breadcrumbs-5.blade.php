<div class="breadcrumbs-v4">
    <div class="container">
        <h1>@yield('title')</h1>
        <ul class="breadcrumb-v4-in" itemscope itemtype="//schema.org/BreadcrumbList">

            <? $counter = 1 ?>
            @foreach($breadcrumbs as $crumb)
                @if($crumb->last)
                    <li class="active" itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem">
                        <a href="{{ $crumb->url }}" itemprop="item"><span itemprop="name">{{ $crumb->title }}</span></a>
                        <meta itemprop="position" content="{{ $counter }}"/>
                    </li>
                @else
                    <li itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem">
                        <a href="{{ $crumb->url }}" itemprop="item"><span itemprop="name">{{ $crumb->title }}</span></a>
                        <meta itemprop="position" content="{{ $counter }}"/>
                    </li>
                @endif
                <? $counter++ ?>
            @endforeach
        </ul>
    </div>
</div>