<div class="breadcrumbs-v4">
    <div class="container">
        {{--<span class="page-name">@yield('title')</span>--}}

        <h1>@yield('title')</h1>
        <ul class="breadcrumb-v4-in">
            @foreach($breadcrumbs as $crumb)
                @if($crumb->last)
                    <li class="active">{{ $crumb->title }}</li>
                @else
                    <li><a href="{{ $crumb->url }}">{{ $crumb->title }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>