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

            <h1>Basic Medium Posts</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="container content-md">
        <div class="row">
            <!-- Blog Sidebar -->
            @include('Unify::blog.elements.sidebars.medium-overview')
                    <!-- End Blog Sidebar -->

            <!-- Blog All Posts -->
            <div class="col-md-9">
                <? $counter = 0 ?>
                @foreach($posts as $post)

                @include('Unify::blog.elements.medium-overview', ['counter' => $counter])

                <? $counter++?>

                @endforeach

                        <!-- Pager v3 -->
                <ul class="pager pager-v3 pager-sm no-margin-bottom">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="page-amount">1 of 7</li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>
                <!-- End Pager v3 -->

            </div>
            <!-- End Blog All Posts -->
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