<div class="breadcrumbs">
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

@if(!isset($noImage) || !$noImage)
    <div class="breadcrumbs-v3 img-v1">

        <div class="container text-center">
            <p>Meet Our Folks</p>

            <h1>Our Professional Team Members</h1>
        </div>

    </div>
@endif