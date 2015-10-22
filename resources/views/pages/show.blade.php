@extends('Unify::unify')

@section('title', $page->title)

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/prism/prism.css') }}">
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">

                @include('Unify::blog.elements.sidebars.large-overview')

                <div class="col-md-9">
                    <!-- News v3 -->
                    <div class="news-v3 margin-bottom-30">
                        <img class="img-responsive full-width" src="{{ asset($page->thumbnail(1140)) }}" alt="">

                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By <a href="{{ store_route('store.team.show',[$page->user]) }}">{{ $page->user->name }}</a></li>
                            </ul>

                            {!!  $page->present()->content !!}
                        </div>
                    </div>
                    <!-- End News v3 -->

                </div>
            </div>
        </div>
        <!--/end container-->
    </div>
@stop

<body>

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script src="{{ theme_asset('plugins/prism/prism.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
@stop
