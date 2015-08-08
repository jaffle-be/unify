<div class="breadcrumbs breadcrumbs-dark">
    <div class="container">
        <h1 class="pull-left">@yield('title')</h1>
        <ul class="pull-right breadcrumb">

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