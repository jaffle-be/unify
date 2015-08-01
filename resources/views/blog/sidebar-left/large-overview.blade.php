@extends('Unify::Unify')

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
@stop

@section('styles-content')
@stop

@section('breadcrumb')
    <div class="breadcrumbs-v1">
        <div class="container">
            <span>Blog Page</span>

            <h1>Basic With Sidebar</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">
                <!-- Blog Sidebar -->
                @include('Unify::blog.elements.sidebars.large-overview')
                <!-- End Blog Sidebar -->

                <!-- Blog All Posts -->
                <div class="col-md-9">

                    <? $counter = 0 ?>
                    @foreach($posts as $post)

                            @include('Unify::blog.elements.large-overview-with-sidebar', ['counter' => $counter])

                            <? $counter++ ?>

                    @endforeach

                    <!-- Pager v2 -->
                    <ul class="pager pager-v2 pager-md no-margin">
                        <li class="previous"><a href="#">&larr; Older</a></li>
                        <li class="page-amount">1 of 7</li>
                        <li class="next"><a href="#">Newer &rarr;</a></li>
                    </ul>
                    <!-- End Pager v2 -->
                </div>
                <!-- End Blog All Posts -->
            </div>
        </div>
    </div>
@stop


@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            FancyBox.initFancybox();
        });
    </script>
@stop