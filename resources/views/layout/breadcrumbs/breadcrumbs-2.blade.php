<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">@yield('title')</h1>

        <ul class="pull-right breadcrumb" itemscope itemtype="//schema.org/BreadcrumbList">
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

@if(!isset($noImage) || !$noImage)
    <div class="breadcrumbs-v3 img-v1">

        <div class="container text-center">
            <p>Meet Our Folks</p>

            <h1>Our Professional Team Members</h1>
        </div>

    </div>
@endif